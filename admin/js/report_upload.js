const circularPublishButton = document.querySelector(".publish-button");
const imageDropArea = document.querySelector(".image-drop-area");
const fileInputField = document.querySelector(".post-pdf");

// function:: to handle the circular publish cancel process
function handleCancel() {
  if (
    confirm(
      "Are you sure you want to cancel? Any unsaved changes will be discarded.",
    )
  ) {
    window.history.back();
  }
}

// function:: handle post upload
async function uploadTheReport() {
  // create form
  const reportForm = new FormData();

  // inserting input data of form
  reportForm.append(
    "report_title",
    document.getElementById("report-title").value,
  );
  reportForm.append(
    "report_category",
    document.getElementById("report-category").value,
  );
  reportForm.append(
    "financial_year",
    document.getElementById("financial-year").value,
  );

  const pdfFile = fileInputField.files[0];

  if (pdfFile) {
    reportForm.append("report_file", pdfFile);
  }

  console.log(Object.fromEntries(reportForm));
  // send data to the server
  try {
    // disable the publish button
    if (circularPublishButton) {
      circularPublishButton.disabled = true;
      circularPublishButton.innerHTML = `
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-loader">
  	<path stroke="none" d="M0 0h24v24H0z" fill="none" />
  	<path d="M12 6l0 -3" />
  	<path d="M16.25 7.75l2.15 -2.15" />
  	<path d="M18 12l3 0" />
  	<path d="M16.25 16.25l2.15 2.15" />
  	<path d="M12 18l0 3" />
  	<path d="M7.75 16.25l-2.15 2.15" />
  	<path d="M6 12l-3 0" />
  	<path d="M7.75 7.75l-2.15 -2.15" />
  </svg>
      <span>Publishing...</span>
      `;
    }

    // fetching the data
    const reportResponseData = await fetch("../server/upload_report.php", {
      method: "POST",
      body: reportForm,
    });

    const responseReportResult = await reportResponseData.json();

    console.log(responseReportResult);

    // response result success message
    if (responseReportResult.success) {
      alert(`Success ${responseReportResult.message}`);
      window.history.back();
    } else {
      alert(`Error: ${responseReportResult.message}`);
    }

    // on error enable the publish button
    if (circularPublishButton) {
      circularPublishButton.disabled = false;
      circularPublishButton.innerHTML = `
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-telegram">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                  </svg>
      <span>Publish</span>
      `;
    }
  } catch (err) {
    alert(`Network Error: ${err.message}`);

    // on error enable the publish button
    if (circularPublishButton) {
      circularPublishButton.disabled = false;
      circularPublishButton.innerHTML = `
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-telegram">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                </svg>
    <span>Publish</span>
    `;
    }
  }
}

// drag and drop functionality
// open input
imageDropArea.addEventListener("click", function () {
  fileInputField.click();
});

imageDropArea.addEventListener("dragover", function (e) {
  e.preventDefault();
  this.classList.add("droparea-dragover");
});

imageDropArea.addEventListener("dragenter", function (e) {
  e.preventDefault();
  this.classList.add("droparea-dragover");
});

imageDropArea.addEventListener("drop", function (e) {
  e.preventDefault();

  if (e.dataTransfer.files.length) {
    fileInputField.files = e.dataTransfer.files;
  }
  handleFiles(fileInputField.files);

  this.classList.remove("droparea-dragover");
});

fileInputField.addEventListener("change", function (e) {
  handleFiles(e.target.files);
});

function handleFiles(files) {
  const file = files[0];
  const fileSize = file.size / (1024 * 1024);

  // validate:: if no file
  if (!file) {
    document.querySelector(".file-display").classList.add("section-hidden");
    return;
  }

  // validate:: check the file type
  if (file.type !== "application/pdf") {
    alert("Only PDF files are accepted...");
    return;
  }

  // preview functionality
  document.querySelector(".file-display").classList.remove("section-hidden");
  document.querySelector(".file-name").innerHTML = file.name;
  document.querySelector("#file-mb").innerHTML = fileSize.toFixed(2);
}

// remove selected file functionality
document.querySelector("#remove-file").addEventListener("click", function (e) {
  fileInputField.value = "";
  document.querySelector(".file-display").classList.add("section-hidden");
});
