const circularPublishButton = document.querySelector(".publish-button");

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
async function uploadThePost() {
  // check the rice editor
  if (typeof tinymce !== "undefined") {
    tinymce.triggerSave();
  }

  // create form
  const postForm = new FormData();

  // inserting input data of form
  postForm.append("post_id", document.getElementById("post-id").value);
  postForm.append("post_title", document.getElementById("post-title").value);
  postForm.append(
    "post_main_category",
    document.getElementById("post-main-category").value,
  );
  postForm.append(
    "post_subcategory_main",
    document.getElementById("post-subcategory-main").value,
  );
  postForm.append(
    "post_description",
    document.getElementById("post-description").value,
  );
  postForm.append("author_name", document.getElementById("author-name").value);

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
    const postResponseData = await fetch("../server/posts.php", {
      method: "POST",
      body: postForm,
      enctype: "multipart/form-data",
    });

    const responsePostResult = await postResponseData.json();

    // response result success message
    if (responsePostResult.success) {
      alert(`Success ${responsePostResult.message}`);
      window.history.back();
    } else {
      alert(`Error: ${responsePostResult.message}`);
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
  }
}

// active the tabs functionality
const allPublishTab = document.querySelectorAll(".publish-tab");
allPublishTab.forEach((tab) => {
  tab.addEventListener("click", () => {
    allPublishTab.forEach((t) => t.classList.remove("publish-tab-active"));
    tab.classList.add("publish-tab-active");
  });
});

// toggle the post sections
function togglePostSection(sectionId) {
  document
    .querySelectorAll(".post-section")
    .forEach((pSec) => pSec.classList.add("section-hidden"));
  document.getElementById(sectionId).classList.remove("section-hidden");
}

// functionality:: enable the sub category after selection the category
const postMainCategory = document.querySelector("#post-main-category");
const postSubcategoryMain = document.querySelector("#post-subcategory-main");
postMainCategory.addEventListener("change", function () {
  const categoryId = this.value;

  if (categoryId === "") {
    postSubcategoryMain.setAttribute("disabled", true);
    return;
  }

  // fetch the sub category data from server
  fetch("../server/fetch_post_subcategory.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: "post_category_id=" + categoryId,
  })
    .then((response) => response.text())
    .then((subcategory_data) => {
      postSubcategoryMain.innerHTML = subcategory_data;
      postSubcategoryMain.removeAttribute("disabled");
    });
});

// upload image functionality
const imageTableBody = document.querySelector("#imageTbody");
const imageRowTemplate = document.querySelector("#image-row-template");

// function:: add new row
function addNewRow() {
  const newRow = imageRowTemplate.content.firstElementChild.cloneNode(true);
  imageTableBody.append(newRow);
  handleImageUpload(newRow);
}

// image select category functionality
function handleImageUpload(imageTableRow) {
  const selectImageCategory = imageTableRow.querySelector(".image-category");
  const imageCategoryLabel = imageTableRow.querySelector(
    ".image-category-label",
  );
  const imageDropArea = imageTableRow.querySelector(".image-drop-area");
  const fileInputField = imageTableRow.querySelector(".post-image");
  const imagePreviewArea = imageTableRow.querySelector(".image-preview-area");
  const deleteImageRowButton = imageTableRow.querySelector(
    ".delete-image-row-btn",
  );

  // open input
  imageDropArea.addEventListener("click", function () {
    fileInputField.click();
  });

  // selecting image category
  selectImageCategory.addEventListener("change", function () {
    if (!this.value) {
      imageCategoryLabel.classList.add("section-hidden");
    } else {
      imageCategoryLabel.textContent = this.value;
      imageCategoryLabel.classList.remove("section-hidden");
    }
  });

  // drag and drop functionality
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
    handleImageFiles(fileInputField.files);

    this.classList.remove("droparea-dragover");
  });

  fileInputField.addEventListener("change", function (e) {
    console.dir(e.target.files);

    handleImageFiles(e.target.files);
  });

  function handleImageFiles(files) {
    const fileMaxSize = 5 * 1024 * 1024;

    Array.from(files).forEach((file) => {
      // valid:: file typo is image
      if (!file.type.startsWith("image/")) {
        fileInputField.value = "";
        return;
      }

      // valid:: file size max 5 mb
      if (file.size > fileMaxSize) {
        alert("File Size is Too long");
        fileInputField.value = "";
        return;
      }

      const fileReader = new FileReader();
      fileReader.onload = (e) => {
        imagePreviewArea.innerHTML = `
              <div class="preview-img">
                  <img src="${e.target.result}" alt="">
                  <button class="remove-preview" title="Remove Preview">✕</button>
              </div>
        `;

        imagePreviewArea
          .querySelector(".remove-preview")
          .addEventListener("click", function (e) {
            fileInputField.value = "";
            imagePreviewArea.remove();
          });
      };

      fileReader.readAsDataURL(file);
    });
  }

  deleteImageRowButton.addEventListener("click", () => {
    if (imageTableBody.children.length > 1) {
      imageTableRow.remove();
    }
  });
}

// call first time
addNewRow();
