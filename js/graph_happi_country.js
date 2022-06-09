let url = "./models/graph_happy_country.php";
const form = new FormData();
const selectCountry = document.querySelector('#selectCountry');
form.append("country", selectCountry.value);
const barCanvas = document.getElementById("myChart");
const DISPLAY = true;
const BORDER = true;
const CHART_AREA = true;
const TICKS = true;

selectCountry.addEventListener('change', function(){
  barChart.destroy();
  callGraph();
})

function callGraph() {
  fetch(url, {
    method: "POST",
    body: form
  })
  .then((response) => {
    return response.json();
  }).then((data) => {
    //console.log(data);
    let tabVal = [];
    let tabDate = [];
  
    for (let i = 0; i < data.length; i++) {
      tabVal.push(data[i].valAVG);
      tabDate.push(data[i].year);
    }

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
            suggestedMax: 8,
            suggestedMin: 4
  
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
          }
      }
    })
  });
}
callGraph();