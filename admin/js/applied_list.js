// current page location
const pageUrl = new URLSearchParams(window.location.search);
let fetchUrl = "../server/fetch_applied-list.php";

// set fetching url on condition
if (pageUrl.has("interview")) {
  fetchUrl = "../server/fetch_interview_list.php";
}

if (pageUrl.has("result")) {
  fetchUrl = "../server/fetch_result_list.php";
}

if (pageUrl.has("reject")) {
  fetchUrl = "../server/fetch_reject_list.php";
}

// all data
let candidateAllData = [];
let candidateFilteredData = [];

// circular select functionality
const selectCircular = document.getElementById("select-circular");
selectCircular.addEventListener("change", function () {
  // Update circular title
  document.getElementById("selected-circular-title").innerText =
    selectCircular.options[selectCircular.selectedIndex].text;

  // Reset all filters
  searchCandidate.value = "";
  eduSearch.value = "";
  higherDegree.value = "";

  // Load candidates for the selected circular
  loadCandidates(this.value);
});

// load Candidate data functionality
function loadCandidates(circularId = "") {
  const tbody = document.getElementById("applied_list_tbody");

  // Show loading state
  tbody.innerHTML = `
    <tr>
      <td colspan="9" style="text-align:center; padding:30px;">
        <div class="loading-state">
          <span class="loading-spinner"></span>
          <span>Loading candidates...</span>
        </div>
      </td>
    </tr>
  `;

  // Optional: clear pagination/details while loading
  document.getElementById("pagination").innerHTML = "";
  document.querySelector(".page-details").textContent = "";

  fetch(fetchUrl, {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: "circular_id=" + encodeURIComponent(circularId),
  })
    .then((res) => {
      if (!res.ok) {
        throw new Error("Failed to fetch candidate data");
      }

      return res.json();
    })
    .then((data) => {
      if (data.length === 0) {
        candidateAllData = [];
        candidateFilteredData = [];

        tbody.innerHTML = `
          <tr>
            <td colspan="8" style="text-align:center">
              No Data Found
            </td>
          </tr>
        `;

        document.getElementById("pagination").innerHTML = "";
        document.querySelector(".page-details").textContent = "";

        return;
      }

      console.log(data);

      candidateAllData = data;
      candidateFilteredData = [...data];
      pageNumber = 1;

      enablePagination();
    })
    .catch((error) => {
      console.error("Error loading candidates:", error);

      candidateAllData = [];
      candidateFilteredData = [];

      tbody.innerHTML = `
        <tr>
          <td colspan="8" style="text-align:center; padding:30px;">
            Failed to load candidate data.
          </td>
        </tr>
      `;

      document.getElementById("pagination").innerHTML = "";
      document.querySelector(".page-details").textContent = "";
    });
}

// function:: table data to  display
function displayTableData(data) {
  document.getElementById("applied_list_tbody").innerHTML = data
    .map(
      (candidate, idx) => `       
        <tr data-user-id="${candidate.user_id}" data-candidate-name = "${candidate.candidate_name}" data-candidate-phone="${candidate.user_id.split("-")[1]}">
                           <td>
                                <figure class="candidate-image">
                                    <img src="https://careers.pmk-bd.org/assets/candidate_picture/${candidate.profile_picture}" alt="picture">
                                </figure>
                            </td>
                            <td>
                                <div style="display:flex; flex-direction:column; gap:2px;">
                                <span class='item-title'>
                                    ${candidate.candidate_name}
                                </span>                                
                                <span class='circular-id'>
                                    ${candidate.user_id}
                                </span>
                                </div>
                            </td>
                            <td>
                                <span class='open-position'>
                                    ${candidate.user_id.split("-")[1]}
                                </span>
                            </td>
                            <td>
                                <div class='edu-section' >
                                    ${candidate.edu_institution}
                                </div>
                            </td>
                            <td>
                                <div class='edu-section' >
                                    ${candidate.edu_examination} in ${candidate.edu_msubject}
                                </div>
                            </td>
                            <td>
                                <div class='published-date'>
                                    <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-calendar-week'>
                                        <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                        <path d='M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12' />
                                        <path d='M16 3v4' />
                                        <path d='M8 3v4' />
                                        <path d='M4 11h16' />
                                        <path d='M7 14h.013' />
                                        <path d='M10.01 14h.005' />
                                        <path d='M13.01 14h.005' />
                                        <path d='M16.015 14h.005' />
                                        <path d='M13.015 17h.005' />
                                        <path d='M7.01 17h.005' />
                                        <path d='M10.01 17h.005' />
                                    </svg>
                                    ${candidate.applied_date}
                                </div>
                            </td>
                            <td>
                            ${getApplicantStatus(candidate.applicant_status)}
                            </td>
                            <td>
                                <div class='item-actions'>
                                    <a href="../includes/user_profile.php?user_id=${candidate.user_id}&circular_id=${candidate.circular_id}" target="_blank" title='view profile' class='action-btn btn-view'>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-address-book">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2" />
                                            <path d="M10 16h6" />
                                            <path d="M11 11a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M4 8h3" />
                                            <path d="M4 12h3" />
                                            <path d="M4 16h3" />
                                        </svg>
                                    </a>
                                    <a
                                          href="javascript:void(0)"
                                          title="change applicant status"
                                          class="action-btn btn-edit"
                                          onclick="openStatusModal('${candidate.user_id}','${
                                            candidate.circular_id
                                          }', '${candidate.candidate_name}')"
                                        >
                                          <svg
                                            width="16"
                                            height="16"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-id"
                                          >
                                            <path
                                              stroke="none"
                                              d="M0 0h24v24H0z"
                                              fill="none"
                                            />
                                            <path d="M3 7a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3l0 -10" />
                                            <path d="M7 10a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M15 8l2 0" />
                                            <path d="M15 12l2 0" />
                                            <path d="M7 16l10 0" />
                                          </svg>
                                        </a>

                                    ${
                                      userRole == 1
                                        ? `
                                        <a href="../server/delete_candidate.php?user_id=${candidate.user_id}&circular_id=${candidate.circular_id}" title='delete' class='action-btn btn-delete' onclick="return confirm('Are you sure you want to delete this candidate?')">
                                            <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-trash-x'>
                                                <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                                <path d='M4 7h16' />
                                                <path d='M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12' />
                                                <path d='M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3' />
                                                <path d='M10 12l4 4m0 -4l-4 4' />
                                            </svg>
                                        </a>
                                        `
                                        : ""
                                    }
                                        
                                </div>
                            </td>
                        </tr>
        `,
    )
    .join("");
}

function getApplicantStatus(status) {
  switch (Number(status)) {
    case 1:
      return `<span class='circular-status cs-pending'>pending</span>`;
    case 2:
      return `<span class="circular-status cs-active">Shortlisted</span>`;
    case 3:
      return `<span class="circular-status cs-active">Selected</span>`;
    case 0:
      return `<span class="circular-status cs-dead">Rejected</span>`;
    default:
      return `<span class="circular-status">Unknown</span>`;
  }
}

// open status change modal functionality
function openStatusModal(userId, circularId, candidateName) {
  document.getElementById("candidate_user_id").value = userId;
  document.getElementById("candidate_circular_id").value = circularId;

  document.getElementById("d-modal-candidate-Name").innerHTML =
    `<strong>${candidateName}</strong>`;

  document.querySelector(".d-modal-content").style.top = "30%";
  document.getElementById("candidate_status_modal").style.opacity = "1";
  document.getElementById("candidate_status_modal").style.visibility =
    "visible";
}

// close  status change modal functionality
function closeStatusModal() {
  document.querySelector(".d-modal-content").style.top = "25%";
  document.getElementById("candidate_status_modal").style.opacity = "0";
  document.getElementById("candidate_status_modal").style.visibility = "hidden";
}

//   status change functionality
function updateCandidateStatus() {
  const userId = document.getElementById("candidate_user_id").value;
  const circular_id = document.getElementById("candidate_circular_id").value;

  const applicantStatus = document.getElementById("candidate-status").value;

  fetch("../server/update_candidate_status.php", {
    method: "POST",

    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },

    body:
      "user_id=" +
      encodeURIComponent(userId) +
      "&circular_id=" +
      encodeURIComponent(circular_id) +
      "&applicant_status=" +
      encodeURIComponent(applicantStatus),
  })
    .then((res) => res.json())

    .then((data) => {
      alert(data.message);

      if (data.success) {
        closeStatusModal();
        loadCandidates(selectCircular.value);
      }
    });
}

// ================= Pagination =================

let perPage = 25;
let pageNumber = 1;

function enablePagination() {
  // const totalDataCount = candidateAllData.length;
  const totalDataCount = candidateFilteredData.length;
  const totalPage = Math.ceil(totalDataCount / perPage);

  const startIndex = (pageNumber - 1) * perPage;
  const endIndex = startIndex + perPage;

  // displayTableData(candidateAllData.slice(startIndex, endIndex));
  displayTableData(candidateFilteredData.slice(startIndex, endIndex));

  document.querySelector(".page-details").textContent =
    `Showing ${startIndex + 1} to ${Math.min(endIndex, totalDataCount)} of ${totalDataCount}`;

  let html = "";

  // First Page
  html += `
<li class="d-page-item">
    <button
        type="button"
        class="d-page-link ${pageNumber === 1 ? "disabled" : ""}"
        ${pageNumber === 1 ? "disabled" : ""}
        onclick="changePage(1)">
        &laquo;
    </button>
</li>
`;

  // Previous Page
  html += `
<li class="d-page-item">
    <button
        type="button"
        class="d-page-link ${pageNumber === 1 ? "disabled" : ""}"
        ${pageNumber === 1 ? "disabled" : ""}
        onclick="changePage(${pageNumber - 1})">
        &lsaquo;
    </button>
</li>
`;

  // Page Numbers
  for (let i = 1; i <= totalPage; i++) {
    html += `
    <li class="d-page-item">
        <button
            type="button"
            class="d-page-link ${i === pageNumber ? "d-page-active" : ""}"
            onclick="changePage(${i})">
            ${i}
        </button>
    </li>
    `;
  }

  // Next Page
  html += `
<li class="d-page-item">
    <button
        type="button"
        class="d-page-link ${pageNumber === totalPage ? "disabled" : ""}"
        ${pageNumber === totalPage ? "disabled" : ""}
        onclick="changePage(${pageNumber + 1})">
        &rsaquo;
    </button>
</li>
`;

  // Last Page
  html += `
<li class="d-page-item">
    <button
        type="button"
        class="d-page-link ${pageNumber === totalPage ? "disabled" : ""}"
        ${pageNumber === totalPage ? "disabled" : ""}
        onclick="changePage(${totalPage})">
        &raquo;
    </button>
</li>
`;

  document.getElementById("pagination").innerHTML = html;
  document.getElementById("go-page").max = totalPage;
}

function changePage(page) {
  // const totalPage = Math.ceil(candidateAllData.length / perPage);
  const totalPage = Math.ceil(candidateFilteredData.length / perPage);

  if (page < 1 || page > totalPage) {
    return;
  }

  pageNumber = page;

  enablePagination();
}

// Go To Page
document.getElementById("go-page").addEventListener("keydown", function (e) {
  if (e.key !== "Enter") return;

  const page = parseInt(this.value);
  const totalPage = Math.ceil(candidateAllData.length / perPage);

  if (isNaN(page) || page < 1 || page > totalPage) {
    alert(`Enter a page between 1 and ${totalPage}`);
    return;
  }

  pageNumber = page;
  enablePagination();

  this.value = "";
});

// Change Per Page
document.getElementById("per-page").addEventListener("change", function () {
  perPage = parseInt(this.value);
  pageNumber = 1;
  enablePagination();
});

// live search functionality
const searchCandidate = document.getElementById("search-candidate");
const eduSearch = document.getElementById("search-edu");
const higherDegree = document.getElementById("select-higher-degree");

function filterCandidates() {
  const searchKeyword = searchCandidate.value.trim().toLowerCase();
  const eduKey = eduSearch.value.trim().toLowerCase();
  const degreeKey = higherDegree.value.trim().toLowerCase();

  candidateFilteredData = candidateAllData.filter((candidate) => {
    const userId = String(candidate.user_id ?? "").toLowerCase();

    const candidateName = String(candidate.candidate_name ?? "").toLowerCase();

    const candidatePhone = String(
      candidate.user_id?.split("-")[1] ?? "",
    ).toLowerCase();

    const eduInstitute = String(candidate.edu_institution ?? "").toLowerCase();

    const candidateDegree = String(
      candidate.edu_examination ?? "",
    ).toLowerCase();

    // Search by ID / name / phone
    const candidateMatch =
      !searchKeyword ||
      userId.includes(searchKeyword) ||
      candidateName.includes(searchKeyword) ||
      candidatePhone.includes(searchKeyword);

    // Search by university
    const educationMatch = !eduKey || eduInstitute.includes(eduKey);

    // Filter by higher degree
    let degreeMatch = true;
    if (degreeKey) {
      degreeMatch = candidateDegree.includes(degreeKey);
    }

    return candidateMatch && educationMatch && degreeMatch;
  });

  // Always start from page 1 after filtering
  pageNumber = 1;
  enablePagination();
}

// Search filters
searchCandidate.addEventListener("input", filterCandidates);
eduSearch.addEventListener("input", filterCandidates);

// Higher degree filter
higherDegree.addEventListener("change", function () {
  filterCandidates();
});

// load candidate data default
loadCandidates();

// ============================================================
// Excel Export
// ============================================================

const downloadExcelButton = document.getElementById("download-excel");
downloadExcelButton.addEventListener("click", function () {
  const circularId = selectCircular.value;
  if (circularId === "") {
    return alert("Please select a circular first.");
  }

  if (!candidateAllData || candidateAllData.length === 0) {
    return alert("No candidates available for this circular.");
  }

  // export excel file function call
  downloadCandidatesExcel(candidateAllData);
});

// ============================================================
// Create Excel File
// ============================================================

function downloadCandidatesExcel(candidates) {
  let excelContent = `
      <html>

          <head>
                <meta charset = "UTF-8">

                <style>
                    table{
                        border-collapse: collapse;
                        width:100%;                    
                    }

                    th,td{
                        padding: 6px;
                        vertical-align: middle;
                        border: 1px solid #000000;                    
                    }

                    th{
                       text-align: center;
                       font-weight: 700;
                       background-color: #09EAF7;                 
                    }

                    td{
                        text-align: center;                    
                    }

                    .text-left{
                        text-align: left;                 
                    }
                </style>
          </head>

          <body>

              <table>
                  <thead>
                                  <!-- =========================
                                               HEADER ROW 1
                                  ========================== -->
                    <tr>
                        <th rowspan="2">SL.</th>
                        <th rowspan="2">Name</th>
                        <th colspan="5">Educational Qualification</th>
                        <th colspan="2">Experience</th>
                        <th colspan="2">Working Period</th>
                        <th rowspan="2">Date of Birth</th>
                        <th rowspan="2">Age</th>
                        <th rowspan="2">Address</th>
                        <th rowspan="2">Contact Number</th>
                    </tr>
                    
                                  <!-- =========================
                                               HEADER ROW 2
                                  ========================== -->
                    <tr>
                            <!-- Education -->
                        <th>Institute</th>
                        <th>Degree</th>
                        <th>Subject</th>
                        <th>Academic Year</th>
                        <th>Result</th>

                            <!-- experience -->
                        <th>Org. Name</th>
                        <th>Designation</th>

                            <!-- working period -->
                        <th>From</th>
                        <th>To</th>
                    </tr>                    

                  </thead>

                  <tbody>
                  `;
  // ========================================================
  // Candidate Rows
  // ========================================================

  candidates.forEach(function (candidate, idx) {
    const experiences = candidate.experiences || [];

    // If candidate has no experience, create one empty row
    const experienceRows =
      experiences.length > 0
        ? experiences
        : [
            {
              org_name: "",
              project_name: "",
              from_date: "",
              to_date: "",
            },
          ];

    const rowSpan = experienceRows.length;

    experienceRows.forEach(function (experience, experienceIndex) {
      excelContent += `<tr>`;

      // ====================================================
      // Candidate information
      // ====================================================

      if (experienceIndex === 0) {
        excelContent += `
                <td rowspan="${rowSpan}">
                    ${idx + 1}
                </td>

                <td rowspan="${rowSpan}">
                    ${escapeExcelValue(candidate.candidate_name)}
                </td>
            `;
      }

      // ====================================================
      // Education
      // ====================================================
      if (experienceIndex === 0) {
        excelContent += `
                <td rowspan="${rowSpan}">
                    ${escapeExcelValue(candidate.edu_institution)}
                </td>

                <td rowspan="${rowSpan}">
                    ${escapeExcelValue(candidate.edu_examination)}
                </td>

                <td rowspan="${rowSpan}">
                    ${escapeExcelValue(candidate.edu_msubject)}
                </td>

                <td rowspan="${rowSpan}">
                    ${escapeExcelValue(candidate.academic_year)}
                </td>

                <td rowspan="${rowSpan}">
                    ${escapeExcelValue(candidate.result)}
                </td>
            `;
      }

      // ====================================================
      // Experience
      // ====================================================

      excelContent += `
            <td>
                ${escapeExcelValue(experience.org_name)}
            </td>

            <td>
                ${escapeExcelValue(experience.project_name)}
            </td>

            <td>
                ${escapeExcelValue(experience.from_date)}
            </td>

            <td>
                ${escapeExcelValue(experience.to_date)}
            </td>
        `;

      // ====================================================
      // Candidate address age contact
      // ====================================================

      if (experienceIndex === 0) {
        excelContent += `
                <td rowspan="${rowSpan}">
                    ${escapeExcelValue(candidate.date_of_birth)}
                </td>

                <td rowspan="${rowSpan}">
                    ${calculateTheAge(
                      candidate.date_of_birth,
                      candidate.age_deadline,
                    )}
                </td>

                <td rowspan="${rowSpan}">
                    ${escapeExcelValue(candidate.per_upazilla)},
                    ${escapeExcelValue(candidate.per_post)}-
                    ${escapeExcelValue(candidate.per_post_code)},
                    ${escapeExcelValue(candidate.per_district)},
                    ${escapeExcelValue(candidate.per_division)}
                </td>

                <td rowspan="${rowSpan}">
                    ${escapeExcelValue(candidate.user_id?.split("-")[1] || "")}
                </td>
            `;
      }

      excelContent += `</tr>`;
    });
  });

  excelContent += `  </tbody>

              </table>

          </body>


      </html>

  `;

  // ========================================================
  // Calculate the age
  // ========================================================
  function calculateTheAge(dob, ageDeadline) {
    if (!dob || !ageDeadline) {
      return "";
    }

    const birth = new Date(dob);
    const deadline = new Date(ageDeadline);

    if (isNaN(birth.getTime() || isNaN(deadline.getTime()))) {
      return "";
    }

    let years = deadline.getFullYear() - birth.getFullYear();
    let months = deadline.getMonth() - birth.getMonth();

    return `${years} year ${months} month`;
  }

  // ========================================================
  // Create Blob
  // ========================================================

  const blob = new Blob(["\ufeff", excelContent], {
    type: "application/vnd.ms-excel",
  });

  // ========================================================
  // Create Blob
  // ========================================================

  const url = URL.createObjectURL(blob);
  const link = document.createElement("a");
  link.href = url;

  link.download = getExcelFileName();

  document.body.appendChild(link);

  link.click();

  document.body.removeChild(link);

  URL.revokeObjectURL(url);
}

// ============================================================
// Escape HTML Values
// ============================================================
function escapeExcelValue(value) {
  if (value === null || value === undefined) {
    return "";
  }

  return String(value)
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
    .replace(/}/g, "&quot;")
    .replace(/'/g, "&#039;");
}

// ========================================================
// Excel File Name
// ========================================================
function getExcelFileName() {
  const fileName = selectCircular.options[selectCircular.selectedIndex].text
    .replace(/[\\/:*?"<>|[\]]/g, "")
    .trim();

  return `${fileName || "candidates"}.xls`;
}
