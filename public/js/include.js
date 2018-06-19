
// var ctx = document.getElementById( "sales-chart" );
// ctx.height = 150;
// var myChart = new Chart( ctx, {
//     type: 'line',
//     data: {
//         labels: [ "2010", "2011", "2012", "2013", "2014", "2015", "2016" ],
//         type: 'line',
//         defaultFontFamily: 'Montserrat',
//         datasets: [ {
//             label: "RAINFALLS",
//             data: [ 0, 30, 10, 120, 50, 63, 10 ],
//             backgroundColor: 'transparent',
//             borderColor: '#EEFF41',
//             borderWidth: 3,
//             pointStyle: 'circle',
//             pointRadius: 5,
//             pointBorderColor: 'transparent',
//             pointBackgroundColor: '#EEFF41',
//                 }, {
//             label: "HUMIDITIES",
//             data: [ 0, 50, 40, 80, 40, 79, 120 ],
//             backgroundColor: 'transparent',
//             borderColor: 'rgba(40,167,69,0.75)',
//             borderWidth: 3,
//             pointStyle: 'circle',
//             pointRadius: 5,
//             pointBorderColor: 'transparent',
//             pointBackgroundColor: 'rgba(40,167,69,0.75)',
//                 },{
//             label: "WIDTHS",
//             data: [ 0, 70, 80, 120, 50, 63, 10 ],
//             backgroundColor: 'transparent',
//             borderColor: 'rgba(220,53,69,0.75)',
//             borderWidth: 3,
//             pointStyle: 'circle',
//             pointRadius: 5,
//             pointBorderColor: 'transparent',
//             pointBackgroundColor: 'rgba(220,53,69,0.75)',
//             },{
//             label: "TEMPERATURES",
//             data: [ 0, 40, 80, 100, 50, 63, 40 ],
//             backgroundColor: 'transparent',
//             borderColor: '#0091EA',
//             borderWidth: 3,
//             pointStyle: 'circle',
//             pointRadius: 5,
//             pointBorderColor: 'transparent',
//             pointBackgroundColor: '#0091EA',
//             } ]
//     },
//     options: {
//         responsive: true,

//         tooltips: {
//             mode: 'index',
//             titleFontSize: 12,
//             titleFontColor: '#000',
//             bodyFontColor: '#000',
//             backgroundColor: '#fff',
//             titleFontFamily: 'Montserrat',
//             bodyFontFamily: 'Montserrat',
//             cornerRadius: 3,
//             intersect: false,
//         },
//         legend: {
//             display: false,
//             labels: {
//                 usePointStyle: true,
//                 fontFamily: 'Montserrat',
//             },
//         },
//         scales: {
//             xAxes: [ {
//                 display: true,
//                 gridLines: {
//                     display: false,
//                     drawBorder: false
//                 },
//                 scaleLabel: {
//                     display: false,
//                     labelString: 'Month'
//                 }
//                     } ],
//             yAxes: [ {
//                 display: true,
//                 gridLines: {
//                     display: false,
//                     drawBorder: false
//                 },
//                 scaleLabel: {
//                     display: true,
//                     labelString: 'Value'
//                 }
//                     } ]
//         },
//         title: {
//             display: false,
//             text: 'Normal Legend'
//         }
//     }
// } );