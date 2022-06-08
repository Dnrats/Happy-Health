let url = "./models/graph_home.php";
fetch(url, {
  method: "POST"
})
.then((response) => {
  return response.json();   
}).then((data) => {
  let tabVal = [];
  let tabDate = [];

  for (let i = 0; i < data.length; i++) {
    tabVal.push(data[i].valAVG);
    tabDate.push(data[i].year);
  }

  const barCanvas = document.getElementById("myChart");
  const DISPLAY = true;
  const BORDER = true;
  const CHART_AREA = true;
  const TICKS = true;
  const barChart = new Chart(barCanvas, {
    type: "line",
    data: {
      labels: tabDate,
      datasets: [{
        label: "Happiness",
        data: tabVal,
        backgroundColor: [
          "yellow"
        ],
        tension: 0.4,
        borderColor : "orange"
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
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
            family: 'Montserrat',
            size: 16,

          }
        }
      }
    }
  })
});