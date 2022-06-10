let tabVal = [];
const tabRegion = ["WE", "NA", "A-NZ", "ME-NA", "LA-C", "SEA", "C-EE", "EA", "SSA", "SA"];
const tabYear = [2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022];
let countYear = 4;

const arrowL = document.querySelector('.arrowLeft_GraphRegion');
const arrowR = document.querySelector('.arrowRight_GraphRegion');
const yearGraph = document.querySelector('#yearGraph');

function graphRegion(url, year) {

    const form = new FormData();
    form.append("selectYear", year);

    fetch(url, {
        method: "POST",
        body: form
    })
    .then((response) => {
        return response.json();
    }).then((data) => {
        console.log(data);

        for (let i = 0; i < data.length; i++) {
            tabVal.push(data[i].valAVG);
        }
    })

    /* Graph */
    const ctx = document.getElementById('graph-region').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: tabRegion,
            datasets: [{
                label: ' ',
                data: tabVal,
                backgroundColor: '#FEC505',
                borderColor: '#FEC505',
                borderWidth: 3,
                tension: 0.3,
            }]
        },
        options: {
            scales: {
                y: {
                    grid: {
                        color: "#787878"
                    },
                },
                x: {
                    grid: {
                        color: "#787878"
                    },
                }
            },
            plugins : {
                legend: {
                    labels: {
                        boxWidth: 0,
                    }
                }, 
            }
        }
    })

    /* Arrow Left */
    arrowL.addEventListener('click', function(){
        myChart.destroy();
        if (countYear === 0) {
            countYear = 7;
            graphRegion("./models/graph_happy_region.php", tabYear[countYear]);
        }else{
            countYear --;
            graphRegion("./models/graph_happy_region.php", tabYear[countYear]);
        }
        yearGraph.firstChild.nodeValue = tabYear[countYear];
    })

    /* Arrow Right */
    arrowR.addEventListener('click', function(){
        myChart.destroy();
        if (countYear === 7) {
            countYear = 0;
            graphRegion("./models/graph_happy_region.php", tabYear[countYear]);
        }else{
            countYear ++;
            graphRegion("./models/graph_happy_region.php", tabYear[countYear]);
        }
        yearGraph.firstChild.nodeValue = tabYear[countYear];
    })
}

graphRegion("./models/graph_happy_region.php", tabYear[countYear]);