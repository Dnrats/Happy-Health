const barCanvas = document.getElementById("myChart");
const DISPLAY = true;
const BORDER = true;
const CHART_AREA = true;
const TICKS = true;
const barChart = new Chart(barCanvas, {
  type: "line",
  data: {
    labels: ["2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022"],
    datasets: [{
      label: "Happiness",
      data: [6, 3, 5, 6, 2, 5, 3, 5],
      backgroundColor: [
        "red",
        "orange",
        "purple",
        "yellow"
      ],
      tension: 0.4,
      borderColor : "orange"
    }]
  },
  options: {
    elements: {
      point: {
        pointBorderColor: "green"
      }
    },
    scales: {
      y: {
        ticks:{
          color: "white",
          stepSize: 1
        },
        grid: {
          display: DISPLAY,
          drawborder: BORDER,
          drawOnChartArea: CHART_AREA,
          drawTicks: TICKS,
          color: "white"
        },
        suggestedMax: 7,
        suggestedMin: 1
      },
        
      
      x: {
        ticks: {
          color: "white",
          stepSize: 1
        },
        grid: {
          display: DISPLAY,
          drawborder: BORDER,
          drawOnChartArea: CHART_AREA,
          drawTicks: TICKS,
          color: "white"
        }
      },
    }
  }
})