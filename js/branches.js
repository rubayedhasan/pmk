// all data
let allBranch = [];
let filterBranches = [];

// load Candidate data functionality
function loadBranch() {
  fetch("../server_request/fetch_branch_list.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.length === 0) {
        allBranch = [];

        document.querySelector(".branch-grid-layout").innerHTML = `
        <div class="branch-card" style="grid-column: 1 / -1; text-align: center"> 
            <div class="br-card-body">
                  <p class="br-text">
                  <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mood-puzzled">
	<path stroke="none" d="M0 0h24v24H0z" fill="none" />
	<path d="M14.986 3.51a9 9 0 1 0 1.514 16.284c2.489 -1.437 4.181 -3.978 4.5 -6.794" />
	<path d="M10 10h.01" />
	<path d="M14 8h.01" />
	<path d="M12 15c1 -1.333 2 -2 3 -2" />
	<path d="M20 9v.01" />
	<path d="M20 6a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
</svg>
                      NO DATA FOUND.
                  </p>
            </div>
        </div>
        `;

        document.getElementById("pagination").innerHTML = "";
        document.querySelector(".page-details").textContent = "";

        return;
      }

      // set data and enable pagination
      allBranch = data;
      filterBranches = [...data];
      pageNumber = 1;

      enablePagination();
    });
}

// function:: table data to  display
function displayBranches(data) {
  // validation if no data found show a message
  if (data.length === 0) {
    allBranch = [];

    document.querySelector(".branch-grid-layout").innerHTML = `
        <div class="branch-card" style="grid-column: 1 / -1; text-align: center"> 
            <div class="br-card-body">
                  <p class="br-text">
                  <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mood-puzzled">
	<path stroke="none" d="M0 0h24v24H0z" fill="none" />
	<path d="M14.986 3.51a9 9 0 1 0 1.514 16.284c2.489 -1.437 4.181 -3.978 4.5 -6.794" />
	<path d="M10 10h.01" />
	<path d="M14 8h.01" />
	<path d="M12 15c1 -1.333 2 -2 3 -2" />
	<path d="M20 9v.01" />
	<path d="M20 6a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
</svg>
                      NO DATA FOUND.
                  </p>
            </div>
        </div>
        `;

    document.getElementById("pagination").innerHTML = "";
    document.querySelector(".page-details").textContent = "";

    return;
  }

  // if data have then
  document.querySelector(".branch-grid-layout").innerHTML = data
    .map(
      (branch) => `    
        <div class="branch-card" data-branch-code="${branch.branch_code}"
        data-branch-name="${branch.branch_name}" data-division-code="${branch.division_code}" data-district-code="${branch.district_code}">
                            <div class="br_card-header">
                                <div class="br-code">
                                    ${branch.branch_code}
                                </div>
                                <div class="br-division">
                                   ${branch.division_name ?? "N/A"}
                                </div>
                            </div>

                            <div class="br-card-body">
                                <h3 class="br-name">
                                    ${branch.branch_name} 
                                    ${branch.branch_code !== "000" ? "branch" : ""}
                                </h3>
                                <p class="br-text">
                                    ${branch.upazilla_name ?? "N/A"} Upazilla, 
                                    ${branch.disctrict_name ?? "N/A"} District.
                                </p>
                            </div>

                            <div class="br-card-footer">

                                <!-- email  -->
                                <div class="br-info">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                        <path d="M3 7l9 6l9 -6" />
                                    </svg>
                                    <a href="mailto:${branch.email_id}">
                                         ${branch.email_id}
                                    </a>
                                </div>

                                <!-- phone  -->
                                <div class="br-info">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                    </svg>
                                    <a href="mailto:${branch.mobile_no}">
                                         ${branch.mobile_no}
                                    </a>
                                </div>
                                <div class="br-info">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                                    </svg>
                                    <span>
                                        ${branch.address}
                                    </span>
                                </div>
                            </div>

                        </div>
        `,
    )
    .join("");
}

// ================= Pagination =================

let perPage = 25;
let pageNumber = 1;

function enablePagination() {
  // const totalDataCount = candidateAllData.length;
  const totalDataCount = filterBranches.length;
  const totalPage = Math.ceil(totalDataCount / perPage);

  const startIndex = (pageNumber - 1) * perPage;
  const endIndex = startIndex + perPage;

  // displayTableData(candidateAllData.slice(startIndex, endIndex));
  displayBranches(filterBranches.slice(startIndex, endIndex));

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
  const totalPage = Math.ceil(filterBranches.length / perPage);

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
  const totalPage = Math.ceil(allBranch.length / perPage);

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

// get elements
const searchBranchInput = document.getElementById("search-branch");
const clearSearchBtn = document.getElementById("clear-search-btn");

// search input functionality
searchBranchInput.addEventListener("input", function (e) {
  // visible the clear search button
  clearSearchBtn.style.display = "inline";

  const searchKeyword = this.value.trim().toLowerCase();

  filterBranches = allBranch.filter((branch) => {
    const branchCode = String(branch.branch_code ?? "").toLowerCase();

    const branchName = String(branch.branch_name ?? "").toLowerCase();

    return (
      !searchKeyword ||
      branchCode.includes(searchKeyword) ||
      branchName.includes(searchKeyword)
    );
  });

  // Always start from page 1 after filtering
  pageNumber = 1;

  enablePagination();
});

// clear search functionality
clearSearchBtn.addEventListener("click", function (e) {
  searchBranchInput.value = "";
  this.style.display = "none";

  filterBranches = [...allBranch];

  // Always start from page 1 after filtering
  pageNumber = 1;

  enablePagination();
});

// live select functionality
function branchSelectionFilter(code, select) {
  if (code === "") {
    filterBranches = [...allBranch];
  } else {
    if (select === "division") {
      filterBranches = allBranch.filter((branch) => {
        return branch.division_code === code;
      });
    }

    if (select === "district") {
      filterBranches = allBranch.filter((branch) => {
        return branch.district_code === code;
      });
    }
  }

  // Always start from page 1 after filtering
  pageNumber = 1;

  enablePagination();
}

// select element event
document
  .getElementById("search-division")
  .addEventListener("change", function (e) {
    const keyCode = this.value;
    branchSelectionFilter(keyCode, "division");
  });
document
  .getElementById("search-district")
  .addEventListener("change", function (e) {
    const keyCode = this.value;
    branchSelectionFilter(keyCode, "district");
  });

// load branch data default
loadBranch();
