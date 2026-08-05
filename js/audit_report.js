// get all needed container elements
// inside: sidebar view panel
const panelReportList = document.getElementById("panel-report-list");
const reportSearchBox = document.getElementById("search-field");
const noReportFound = document.getElementById("no-report-found");

// inside: report-board
const reportIntroTitle = document.getElementById("introTitle");
const reportIntroText = document.getElementById("introText");
const reportOpenButton = document.getElementById("open-report");
const reportDownloadButton = document.getElementById("download-report");
const reportFrame = document.getElementById("report-frame");
const reportLoadingState = document.getElementById("report-loading-state");
const emptyReportBoard = document.getElementById("empty-report-board");

// inside:mobile report list panel
const openDrawerButton = document.getElementById("reportDrawerButton");
// inside: report drawer mask
const reportDrawerMask = document.getElementById("report-drawer-mask");
// inside:report drawer
const reportDrawer = document.getElementById("report-drawer");
const closeDrawerButton = document.getElementById("drawer-close-button");
const drawerReportList = document.getElementById("drawer-report-list");
const drawerSearchBox = document.getElementById("drawer-search-field");

// audit report data
// const auditReport = [
//   {
//     financialYear: "AUD 2022-23",
//     pages: 7,
//     size: "10 MB",
//     badge: "latest",
//     url: "../assets/audit_report/audit_report_2022-23.pdf",
//   },
//   //   {
//   //     financialYear: "FY 2021-22",
//   //     pages: 45,
//   //     size: "10 MB",
//   //     badge: "archived",
//   //     url: "../assets/annual_report/po-application-form-guidelines.pdf",
//   //   },
// ];

// pdf file icon
function fileIcon(iconActive) {
  const greenColor = iconActive ? "#00946a" : "#b0c4bb";

  return `
         <svg xmlns="http://www.w3.org/2000/svg"
         width="24"
         height="24"
         viewBox="0 0 24 24"
         fill="none"
         stroke="${greenColor}"
         stroke-width="2"
         stroke-linecap="round"
         stroke-linejoin="round"
         class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-text">
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
      <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
      <path d="M9 12h6" />
      <path d="M9 16h6" />
    </svg>
  `;
}

// report list item
function reportListItem(report, reportIndex) {
  const reportBadge =
    report.badge === "latest"
      ? `<span class="report-badge latest">Latest</span>`
      : `<span class="report-badge latest">${report.financialYear.slice(-2)}</span>`;

  return `
       <div class="report " data-index="${reportIndex}">
                                <div class="report-icon">
                                   ${fileIcon(false)}
                                </div>
                                <div class="report-body">
                                    <div class="report-year">
                                    ${report.financialYear}
                                    </div>
                                </div>
                                ${reportBadge}
                            </div>
      `;
}

// insert the html
// insert the report list item to the sidebar: panel-report-list
auditReport.forEach((report, index) => {
  // insert main report list panel
  panelReportList.insertAdjacentHTML(
    "beforeend",
    reportListItem(report, index),
  );

  // insert drawer report list panel
  drawerReportList.insertAdjacentHTML(
    "beforeend",
    reportListItem(report, index),
  );
});

// report active and view state
let activeReportIndex = -1;
let spinnerLoaderTimer = null;

function selectedReport(reportIndex) {
  // validation
  if (activeReportIndex === reportIndex) {
    return;
  }

  //   set index
  activeReportIndex = reportIndex;
  const activeReport = auditReport[reportIndex];

  //get the  report item element
  const allReportItems = document.querySelectorAll(".report");

  // active the selected report from the list
  allReportItems.forEach((reportItem) => {
    const reportItemActiveState =
      parseInt(reportItem.dataset.index) == reportIndex;
    reportItem.classList.toggle("report-active", reportItemActiveState);
    reportItem.querySelector(".report-icon").innerHTML = fileIcon(
      reportItemActiveState,
    );
  });

  //   report intro bar
  reportIntroTitle.textContent = `PMK Audit Report · ${activeReport.financialYear}`;
  reportIntroText.textContent = `${activeReport.pages} pages · ${activeReport.size}`;

  //   report meta buttons
  reportOpenButton.href = activeReport.url;
  reportDownloadButton.href = activeReport.url;

  //   show loader
  reportFrame.classList.add("no-display");
  emptyReportBoard.classList.add("no-display");
  reportLoadingState.classList.remove("no-display");

  // set the pdf src
  reportFrame.src = activeReport.url;

  //   clear the spinner time (setTimeout)
  clearTimeout(spinnerLoaderTimer);

  // spin the loader state
  spinnerLoaderTimer = setTimeout(() => {
    reportLoadingState.classList.add("no-display");
    reportFrame.classList.remove("no-display");
  }, 500);

  //   show report meta buttons
  reportOpenButton.classList.remove("no-display");
  reportDownloadButton.classList.remove("no-display");

  //   close drawer
  closeReportDrawer();
}

// active the report on clicking
[panelReportList, drawerReportList].forEach((listItem) => {
  listItem.addEventListener("click", (e) => {
    const reportItem = e.target.closest(".report");
    if (reportItem) {
      selectedReport(parseInt(reportItem.dataset.index));
    }
  });
});

// report search functionality
function searchReport(searchQuery) {
  const searchText = searchQuery.toLowerCase().trim();
  let match = 0;

  //get the  report item element
  const allReportItems = document.querySelectorAll(".report");
  allReportItems.forEach((reportItem) => {
    const reportYear = reportItem
      .querySelector(".report-year")
      .textContent.toLowerCase();

    //   validation:: search report display
    if (!reportYear.includes(searchText)) {
      reportItem.classList.add("no-display");
    } else {
      reportItem.classList.remove("no-display");
      match++;
    }

    // validation:: if not match then display not found
    if (match <= 0) {
      noReportFound.classList.remove("no-display");
    } else {
      noReportFound.classList.add("no-display");
    }
  });
}

// main panel search box
reportSearchBox.addEventListener("input", (e) => {
  searchReport(e.target.value);
});

// drawer search box
drawerSearchBox.addEventListener("input", (e) => {
  searchReport(e.target.value);
});

// open drawer
function openReportDrawer() {
  reportDrawerMask.classList.add("open");
  reportDrawer.classList.add("open");
}

// close drawer
function closeReportDrawer() {
  reportDrawerMask.classList.remove("open");
  reportDrawer.classList.remove("open");
}

// click handler open drawer
openDrawerButton.addEventListener("click", () => {
  openReportDrawer();
});

// click handler close drawer by close button
closeDrawerButton.addEventListener("click", () => {
  closeReportDrawer();
});

// click handler close drawer by mask
reportDrawerMask.addEventListener("click", () => {
  closeReportDrawer();
});
