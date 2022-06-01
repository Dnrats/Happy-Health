
// let labels1 =  ['Yes', 'No'];
// let data1 = [55, 36];
// let colors1 = ['black', 'yellow'];


// let myChart = document.getElementById('myChart').getContext('2d');
// let chaart = new Chart(myChart, {
//     type: 'doughnut',
//     data: {
//         labels: labels1,
//         datasets: [ {
//             data: data1,
//             backgroundColor: colors1
//         }]
//     },
//     options: {
//         title: {
//             text: "Duh, its a donut!",
//             display: true
//         }
//     }
// });


  const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );