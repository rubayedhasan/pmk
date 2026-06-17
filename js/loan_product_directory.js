// filter functionality
const allDirectoryTabs = document.querySelectorAll(".directory-tab");
let filterKey = "all";

// toggle active button
function filterProductBy(type, btn) {
  filterKey = type;

  //   reset active state
  allDirectoryTabs.forEach((tab) =>
    tab.classList.remove("directory-tab-active"),
  );

  //   ste active state
  btn.classList.add("directory-tab-active");

  //   call filter functionality
  applyProductFilter();
}

//product filter functionality
function applyProductFilter() {
  const searchQuery = document
    .getElementById("inputSearch")
    .value.toLowerCase()
    .trim();

  const mainProductRows = document.querySelectorAll(
    "#main-product-tbody tr[data-section]",
  );
  const otherProductRows = document.querySelectorAll(
    "#other-product-tbody tr[data-section]",
  );

  let mainVis = 0,
    otherVis = 0;

  function shouldShow(row) {
    if (filterKey === "main-product" && row.dataset.section !== "main-product")
      return false;
    if (
      filterKey === "other-product" &&
      row.dataset.section !== "other-product"
    )
      return false;
    if (searchQuery && !row.dataset.search.toLowerCase().includes(searchQuery))
      return false; // ✅ fix
    return true;
  }

  mainProductRows.forEach((r) => {
    const s = shouldShow(r);
    r.classList.toggle("hidden-row", !s);
    if (s) mainVis++;
  });
  otherProductRows.forEach((r) => {
    const s = shouldShow(r);
    r.classList.toggle("hidden-row", !s);
    if (s) otherVis++;
  });

  document.getElementById("empty-row-main-product").style.display =
    mainVis === 0 ? "" : "none";
  document.getElementById("empty-row-other-product").style.display =
    otherVis === 0 ? "" : "none";

  const showMain = filterKey !== "other-product";
  const showOther = filterKey !== "main-product";
  ["main-label", "main-product-table"].forEach(
    (id) =>
      (document.getElementById(id).style.display = showMain ? "" : "none"),
  );
  ["other-label", "other-product-table"].forEach(
    (id) =>
      (document.getElementById(id).style.display = showOther ? "" : "none"),
  );
}
