const barCanvas = document.getElementById("myChart");
const barChart = new Chart(barCanvas, {
  type: "line",
  // CHART PROPERTIES
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
  // PROPERTIES OF THE CHART, RESPONSIVNESS
  options: {
    responsive: true,
    maintainAspectRatio: false,
    elements: {
      point: {
        pointBorderColor: "green"
      }
    }, 
    // GAP BETWEEN NUMBERS Y AXIS, 1/0.5/ANY NUMBER
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
        // MAXIMIM AND MINIMUM Y AXIS 
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
      // HAPINESS RED BOX
    }, plugins : {
        legend: {
          labels: {
            boxWidth: 0,
          }
        }, 
        // CHART TITLE AND PROPERTIES
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