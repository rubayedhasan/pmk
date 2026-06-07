// /**
//  * ============================================================================================================
//  * script for showing graph and charts
//  */
/* =========================
   DATA (Current vs Benchmark)
========================= */

const comparisonData = {
  division: {
    current: 7,
    benchmark: 8,
  },
  district: {
    current: 36,
    benchmark: 64,
  },
  upazila: {
    current: 236,
    benchmark: 495,
  },
  village: {
    current: 46003,
    benchmark: 87230,
  },
};

const labels = ["Division", "District", "Upazila", "Village"];

const values = Object.values(comparisonData).map(
  (item) => (item.current / item.benchmark) * 100,
);

/* =========================
           SHADOW (3D feel)
        ========================= */

const shadowPlugin = {
  id: "shadowPlugin",
  beforeDatasetDraw(chart) {
    const ctx = chart.ctx;
    ctx.save();
    ctx.shadowColor = "rgba(0,0,0,0.25)";
    ctx.shadowBlur = 15;
    ctx.shadowOffsetY = 10;
  },
  afterDatasetDraw(chart) {
    chart.ctx.restore();
  },
};

/* =========================
           LABEL ON SLICE PLUGIN
        ========================= */

const labelPlugin = {
  id: "labelPlugin",
  afterDraw(chart) {
    const { ctx } = chart;
    ctx.save();

    chart.getDatasetMeta(0).data.forEach((slice, i) => {
      const value = values[i];

      // hide tiny slices (optional but professional)
      if (value < 5) return;

      const pos = slice.tooltipPosition();

      ctx.fillStyle = "#fff";
      ctx.font = "bold 12px sans-serif";
      ctx.textAlign = "center";
      ctx.textBaseline = "middle";

      ctx.fillText(`${labels[i]}\n${value.toFixed(1)}%`, pos.x, pos.y);
    });

    ctx.restore();
  },
};

/* =========================
           CHART
        ========================= */

const ctx = document.getElementById("myChart");

new Chart(ctx, {
  type: "pie",
  data: {
    labels,
    datasets: [
      {
        data: values,
        backgroundColor: ["#1D4ED8", "#059669", "#F59E0B", "#8B5CF6"],
        borderColor: "#fff",
        borderWidth: 2,
        hoverOffset: 18,
      },
    ],
  },

  plugins: [shadowPlugin, labelPlugin],

  options: {
    responsive: true,

    plugins: {
      legend: {
        position: "bottom",
      },

      tooltip: {
        callbacks: {
          label: function (context) {
            const i = context.dataIndex;
            const item = Object.values(comparisonData)[i];

            return [
              labels[i],
              `Current: ${item.current.toLocaleString()}`,
              `Benchmark: ${item.benchmark.toLocaleString()}`,
              `Achievement: ${values[i].toFixed(2)}%`,
            ];
          },
        },
      },
    },

    animation: {
      animateRotate: true,
      animateScale: true,
      duration: 1200,
    },
  },
});
