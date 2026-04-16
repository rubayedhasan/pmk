/**
 * script for count down the kpi items
 */
// get the element
const graphicalBoard = document.getElementById("impact-graphical-board");

// data of the glance field
const dataOfPmk = {
  "employee-count": 2775,
  "member-count": 379721,
  "borrower-count": 313219,
  "branch-count": 364,
  "area-count": 71,
  "zone-count": 25,
  "division-count": 8,
  "district-count": 36,
  "upazila-count": 236,
  "village-count": 46003,
};

// function:: calculate the number
function countAnimation(element, target, duration = 2000) {
  // starting time
  let startTime = null;

  //   function:: control the calculating speed
  function animation(timestamp) {
    if (!startTime) {
      startTime = timestamp;
    }

    // animate time
    const progress = timestamp - startTime;

    // animation steps
    const parentage = Math.min(progress / duration, 1);
    const eased = 1 - Math.pow(1 - parentage, 3);

    // value
    const value = Math.floor(eased * target);

    // set the value in the element
    element.innerText = value.toLocaleString();

    // validation::animation running
    if (parentage < 1) {
      requestAnimationFrame(animation);
    } else {
      element.innerText = target.toLocaleString();
    }
  }

  //   recall the animation
  requestAnimationFrame(animation);
}

// observer method
const observeContainer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // start counting
        Object.keys(dataOfPmk).forEach((keyName) => {
          const element = document.getElementById(keyName);
          if (element) {
            // reset
            element.innerText = "0";

            // count start
            countAnimation(element, dataOfPmk[keyName]);
          }
        });
      }
    });
  },
  {
    threshold: 0.5,
  },
);

// observed parent only
if (graphicalBoard) {
  observeContainer.observe(graphicalBoard);
}

/**
 * ============================================================================================================
 * script for showing graph and charts
 */
const ctx = document.getElementById("myChart");

// LABELS
const labelMap = {
  "employee-count": "Employees",
  "member-count": "Members",
  "borrower-count": "Borrowers",
  "branch-count": "Branches",
  "area-count": "Areas",
  "zone-count": "Zones",
  "division-count": "Divisions",
  "district-count": "Districts",
  "upazila-count": "Upazilas",
  "village-count": "Villages",
};

// 🎨 Premium NGO palette
const palette = [
  "#1D4ED8",
  "#059669",
  "#F59E0B",
  "#0EA5E9",
  "#8B5CF6",
  "#EF4444",
  "#22C55E",
  "#6366F1",
  "#F97316",
  "#EC4899",
];

// Convert entries
const entries = Object.entries(dataOfPmk);

// Sort DESC (important)
entries.sort((a, b) => b[1] - a[1]);

const labels = entries.map(([k]) => labelMap[k]);
const rawValues = entries.map(([, v]) => v);

// 🔥 LOG SCALE (this is the fix)
const logValues = rawValues.map((v) => Math.log10(v + 1));

// Normalize to make chart balanced but still proportional
const max = Math.max(...logValues);
const normalizedValues = logValues.map((v) => (v / max) * 100);

// Keep real values for tooltip
new Chart(ctx, {
  type: "pie",
  data: {
    labels,
    datasets: [
      {
        data: normalizedValues,
        backgroundColor: palette,
        borderColor: "#fff",
        borderWidth: 2,
        hoverOffset: 14,
      },
    ],
  },
  options: {
    responsive: true,

    plugins: {
      legend: {
        position: "bottom",
        labels: {
          usePointStyle: true,
          pointStyle: "circle",
          padding: 12,
        },
      },

      tooltip: {
        callbacks: {
          label: function (context) {
            const i = context.dataIndex;

            return [
              `${labels[i]}`,
              `Value: ${rawValues[i].toLocaleString()}`,
              `Normalized: ${normalizedValues[i].toFixed(2)}`,
            ];
          },
        },
      },
    },

    animation: {
      animateRotate: true,
      duration: 1200,
    },
  },
});
