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

// circular select functionality
const selectCircular = document.getElementById("select-circular");
selectCircular.addEventListener("change", function () {
  loadCandidates(this.value);
});

// load Candidate data functionality
function loadCandidates(circularId = "") {
  fetch(fetchUrl, {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: "circular_id=" + encodeURIComponent(circularId),
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.length === 0) {
        candidateAllData = [];

        document.getElementById("applied_list_tbody").innerHTML = `<tr>
                <td colspan="9" style="text-align:center">
                    No Data Found
                </td>
            </tr>`;

        document.getElementById("pagination").innerHTML = "";
        document.querySelector(".page-details").textContent = "";

        return;
      }

      // console.log(data);

      candidateAllData = data;
      pageNumber = 1;

      enablePagination();
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
                                <span class='circular-id'>
                                   ${candidate.user_id}
                                </span>
                            </td>
                            <td>
                                <span class='item-title'>
                                    ${candidate.candidate_name}
                                </span>
                            </td>
                            <td>
                                <span class='open-position'>
                                    ${candidate.user_id.split("-")[1]}
                                </span>
                            </td>
                            <td>
                                 <div>
                                    <span class='open-position'>
                                    ${candidate.circular_title}
                                    </span>
                                    <span class='circular-id'>
                                        ${candidate.circular_id}
                                    </span>
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
                                    <a href="../includes/user_profile.php?user_id=${candidate.user_id}" title='view profile' class='action-btn btn-view'>
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
                                        <a href="../server/delete_candidate.php?user_id=${candidate.user_id}" title='delete' class='action-btn btn-delete' onclick="return confirm('Are you sure you want to delete this candidate?')">
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
  const totalDataCount = candidateAllData.length;
  const totalPage = Math.ceil(totalDataCount / perPage);

  const startIndex = (pageNumber - 1) * perPage;
  const endIndex = startIndex + perPage;

  displayTableData(candidateAllData.slice(startIndex, endIndex));

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
  const totalPage = Math.ceil(candidateAllData.length / perPage);

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
searchCandidate.addEventListener("input", function () {
  const searchKeyword = this.value.trim().toLowerCase();

  const tableRows = document.querySelectorAll("#applied_list_tbody tr");
  let searchCount = 0;

  tableRows.forEach((dataRow) => {
    if (!dataRow.dataset.userId) {
      return;
    }

    const userId = dataRow.dataset.userId.toLowerCase();
    const candidateName = dataRow.dataset.candidateName.toLowerCase();
    const candidatePhone = dataRow.dataset.candidatePhone.toLowerCase();

    const matchedData =
      userId.includes(searchKeyword) ||
      candidateName.includes(searchKeyword) ||
      candidatePhone.includes(searchKeyword);

    if (matchedData) {
      dataRow.style.display = "";
      searchCount++;
    } else {
      dataRow.style.display = "none";
    }
  });
});

// load candidate data default
loadCandidates();
