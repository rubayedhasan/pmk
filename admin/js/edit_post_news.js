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

  // ============================================================
  // IMAGES
  // ============================================================

  document.querySelectorAll("#imageTbody tr").forEach((tableRow, idx) => {
    const categorySelect = tableRow.querySelector(".image-category");

    const fileInput = tableRow.querySelector(".post-image");

    const existingImageId = tableRow.querySelector(".existing-image-id");

    // Existing image ID
    postForm.append(
      `post_images[${idx}][image_id]`,
      existingImageId?.value || "",
    );

    // Image category
    postForm.append(
      `post_images[${idx}][image_category]`,
      categorySelect?.value || "",
    );

    // New/replacement image
    const image = fileInput?.files[0];

    if (image) {
      postForm.append(`post_images[${idx}][image_path]`, image);
    }
  });

  // ============================================================
  // DELETED EXISTING IMAGES
  // ============================================================

  deletedImageIds.forEach((imageId) => {
    postForm.append("deleted_image_ids[]", imageId);
  });

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
    const postResponseData = await fetch("../server/edit_posts.php", {
      method: "POST",
      body: postForm,
    });

    const responsePostResult = await postResponseData.json();

    // console.log(responsePostResult);

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

// ============================================================
// IMAGE EDIT FUNCTIONALITY
// ============================================================

const imageTableBody = document.querySelector("#imageTbody");
const imageRowTemplate = document.querySelector("#image-row-template");

// Keep deleted existing image IDs globally.
// These IDs will be sent to PHP when the post is submitted.
const deletedImageIds = new Set();

// ============================================================
// ADD NEW IMAGE ROW
// ============================================================

function addNewRow() {
  const newRow = imageRowTemplate.content.firstElementChild.cloneNode(true);

  imageTableBody.appendChild(newRow);

  handleImageUpload(newRow);
}

// ============================================================
// HANDLE IMAGE ROW
// ============================================================

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

  const existingImageIdInput =
    imageTableRow.querySelector(".existing-image-id");

  // ==========================================================
  // OPEN FILE INPUT
  // ==========================================================

  imageDropArea.addEventListener("click", function (e) {
    // Do not open file selector if clicking an inner button
    if (e.target.closest(".remove-preview")) {
      return;
    }

    fileInputField.click();
  });

  // ==========================================================
  // CATEGORY CHANGE
  // ==========================================================

  selectImageCategory.addEventListener("change", function () {
    if (!this.value) {
      imageCategoryLabel.classList.add("section-hidden");
    } else {
      imageCategoryLabel.textContent = this.value;
      imageCategoryLabel.classList.remove("section-hidden");
    }
  });

  // ==========================================================
  // DRAG OVER
  // ==========================================================

  imageDropArea.addEventListener("dragover", function (e) {
    e.preventDefault();

    this.classList.add("droparea-dragover");
  });

  // ==========================================================
  // DRAG ENTER
  // ==========================================================

  imageDropArea.addEventListener("dragenter", function (e) {
    e.preventDefault();

    this.classList.add("droparea-dragover");
  });

  // ==========================================================
  // DRAG LEAVE
  // ==========================================================

  imageDropArea.addEventListener("dragleave", function () {
    this.classList.remove("droparea-dragover");
  });

  // ==========================================================
  // DROP IMAGE
  // ==========================================================

  imageDropArea.addEventListener("drop", function (e) {
    e.preventDefault();

    this.classList.remove("droparea-dragover");

    if (e.dataTransfer.files.length) {
      fileInputField.files = e.dataTransfer.files;

      handleImageFiles(fileInputField.files);
    }
  });

  // ==========================================================
  // FILE INPUT CHANGE
  // ==========================================================

  fileInputField.addEventListener("change", function () {
    handleImageFiles(this.files);
  });

  // ==========================================================
  // HANDLE IMAGE FILE
  // ==========================================================

  function handleImageFiles(files) {
    const fileMaxSize = 5 * 1024 * 1024;

    if (!files || !files.length) {
      return;
    }

    const file = files[0];

    // Validate MIME type

    if (!file.type.startsWith("image/")) {
      alert("Please select a valid image file.");

      fileInputField.value = "";

      return;
    }

    // Validate size

    if (file.size > fileMaxSize) {
      alert("File size must not exceed 5MB.");

      fileInputField.value = "";

      return;
    }

    const fileReader = new FileReader();

    fileReader.onload = function (e) {
      imagePreviewArea.innerHTML = `
        <div class="preview-img">

          <img
            src="${e.target.result}"
            alt=""
          >

          <button
            type="button"
            class="remove-preview"
            title="Remove Preview">
            ✕
          </button>

          ${
            existingImageIdInput.value
              ? `<span class="existing-image-label">
                    New image selected
                 </span>`
              : ""
          }

        </div>
      `;

      const removePreviewButton =
        imagePreviewArea.querySelector(".remove-preview");

      removePreviewButton.addEventListener("click", function (e) {
        e.stopPropagation();

        fileInputField.value = "";

        // ======================================================
        // EXISTING IMAGE
        // ======================================================

        if (existingImageIdInput.value) {
          const originalImage = existingPostImage.find(
            (img) =>
              String(img.post_imgid) === String(existingImageIdInput.value),
          );

          if (originalImage) {
            imagePreviewArea.innerHTML = `
              <div class="preview-img existing-preview">

                <img
                  src="${originalImage.image_file_path}"
                  alt="${originalImage.post_image}"
                >

                <span class="existing-image-label">
                  Existing Image
                </span>

              </div>
            `;
          }
        }

        // ======================================================
        // NEW IMAGE
        // ======================================================
        else {
          imagePreviewArea.innerHTML = "";
        }
      });
    };

    fileReader.readAsDataURL(file);
  }

  // ==========================================================
  // DELETE IMAGE ROW
  // ==========================================================

  deleteImageRowButton.addEventListener("click", function () {
    const existingImageId = existingImageIdInput.value;

    // Existing database image
    if (existingImageId) {
      const confirmed = confirm("Are you sure you want to delete this image?");

      if (!confirmed) {
        return;
      }

      // Remember this ID.
      // PHP will delete it from database and disk.
      deletedImageIds.add(String(existingImageId));
    }

    imageTableRow.remove();
  });
}

// validation:: load existing image or new image
// ============================================================
// LOAD EXISTING IMAGES
// ============================================================

if (existingPostImage.length > 0) {
  existingPostImage.forEach((imageData) => {
    addExistingImageRow(imageData);
  });
} else {
  // No existing image.
  // Create one empty row.
  addNewRow();
}

// ============================================================
// ADD EXISTING IMAGE ROW
// ============================================================

function addExistingImageRow(imageData) {
  const newRow = imageRowTemplate.content.firstElementChild.cloneNode(true);

  imageTableBody.appendChild(newRow);

  // Elements

  const inputImgId = newRow.querySelector(".existing-image-id");

  const categorySelect = newRow.querySelector(".image-category");

  const previewArea = newRow.querySelector(".image-preview-area");

  // ==========================================================
  // SET EXISTING IMAGE ID
  // ==========================================================

  inputImgId.value = imageData.post_imgid;

  // ==========================================================
  // SET IMAGE CATEGORY
  // ==========================================================

  categorySelect.value = imageData.postimage_cat;

  // Update category label

  const categoryLabel = newRow.querySelector(".image-category-label");

  if (imageData.postimage_cat) {
    categoryLabel.textContent = imageData.postimage_cat;

    categoryLabel.classList.remove("section-hidden");
  }

  // ==========================================================
  // EXISTING IMAGE PREVIEW
  // ==========================================================

  previewArea.innerHTML = `
    <div class="preview-img existing-preview">

      <img
        src="../assets/uploads/posts/${imageData.post_image}"
        alt="${imageData.post_title}"
      >

      <span class="existing-image-label">
        Existing Image
      </span>

    </div>
  `;

  // Attach all handlers

  handleImageUpload(newRow);
}
