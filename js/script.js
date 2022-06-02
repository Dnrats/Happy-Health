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
        "yellow"
      ],
      tension: 0.4,
      borderColor : "orange"
    }]
  },
  options: {
    responsive: true,
    elements: {
      point: {
        pointBorderColor: "green"
      }
    },
    scales: {
      y: {
        display: true,
        ticks:{
          color: "white",
          stepSize: 1,
        },
        grid: {
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
          color: "white"
        }
      },
    }, plugins : {
        legend: {
          labels: {
            boxWidth: 0,
          }
        }, 
      title: {
        display: true,
        text: 'Average World Happiness Score over time',
        color: "white",
        font: {
          family: "Montserrat"
        }
        }
    }
  }
  // legend: {
  //   labels: {
  //     boxWidth: 0,
  //   }
  // }
})