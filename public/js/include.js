
// function writeData(Id, chooise){
//     firebase.database().ref('notif/'+Id).set({
//         chooise:chooise
//     });
// }

//  var db = firebase.database();
//var widthsRef = db.ref('widths');
//widthsRef.on('value',showData,showEror);


/////////////////////////////////////////
// var db = firebase.database().ref("cuaca/1/angin");
//var db = firebase.database().ref('widths');
        // var widthsRef = db.ref('widths');
// var hujan = document.getElementById('hujan');
// var kelembaban = document.getElementById('kelembaban');
// var angin = document.getElementById('angin');
// var temperatur = document.getElementById('temperatur');

// db.on('value', snap => angin.innerHTML =Object.values(snap.val()));

//////////////////////////////////////////
// function showData(items){
//     console.log(items.val())
// }
// function showEror(err){
//     console.log(err)
// }





// var ctx = document.getElementById("myChart").getContext('2d');
// var myChart = new Chart(ctx, {
//     type: 'line',
//     data: {
//         labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
//         datasets: [{ 
//             data: [86,114,106,106,107,111,133,221,783,2478],
//             label: "Angin",
//             borderColor: "#3e95cd",
//             fill: false
//           }, { 
//             data: [282,350,411,502,635,809,947,1402,3700,5267],
//             label: "Hujan",
//             borderColor: "#8e5ea2",
//             fill: false
//           }, { 
//             data: [168,170,178,190,203,276,408,547,675,734],
//             label: "Kelembapan",
//             borderColor: "#3cba9f",
//             fill: false
//           }, { 
//             data: [40,20,10,16,24,38,74,167,508,784],
//             label: "Latin America",
//             borderColor: "#e8c3b9",
//             fill: false
//           }
//         ]
//       },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero:true
//                 }
//             }]
//         }
//     }
// });
        

var ctx = document.getElementById( "sales-chart" );
ctx.height = 150;
var myChart = new Chart( ctx, {
    type: 'line',
    data: {
        labels: [ "2010", "2011", "2012", "2013", "2014", "2015", "2016" ],
        type: 'line',
        defaultFontFamily: 'Montserrat',
        datasets: [ {
            label: "Foods",
            data: [ 0, 30, 10, 120, 50, 63, 10 ],
            backgroundColor: 'transparent',
            borderColor: 'rgba(220,53,69,0.75)',
            borderWidth: 3,
            pointStyle: 'circle',
            pointRadius: 5,
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'rgba(220,53,69,0.75)',
                }, {
            label: "Electronics",
            data: [ 0, 50, 40, 80, 40, 79, 120 ],
            backgroundColor: 'transparent',
            borderColor: 'rgba(40,167,69,0.75)',
            borderWidth: 3,
            pointStyle: 'circle',
            pointRadius: 5,
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'rgba(40,167,69,0.75)',
                },{
            label: "Foods",
            data: [ 0, 70, 80, 120, 50, 63, 10 ],
            backgroundColor: 'transparent',
            borderColor: 'rgba(220,53,69,0.75)',
            borderWidth: 3,
            pointStyle: 'circle',
            pointRadius: 5,
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'rgba(220,53,69,0.75)',
            },{
            label: "Foods",
            data: [ 0, 40, 80, 100, 50, 63, 10 ],
            backgroundColor: 'transparent',
            borderColor: 'rgba(220,200,200,0.75)',
            borderWidth: 3,
            pointStyle: 'circle',
            pointRadius: 5,
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'rgba(200,200,200,0.75)',
            } ]
    },
    options: {
        responsive: true,

        tooltips: {
            mode: 'index',
            titleFontSize: 12,
            titleFontColor: '#000',
            bodyFontColor: '#000',
            backgroundColor: '#fff',
            titleFontFamily: 'Montserrat',
            bodyFontFamily: 'Montserrat',
            cornerRadius: 3,
            intersect: false,
        },
        legend: {
            display: false,
            labels: {
                usePointStyle: true,
                fontFamily: 'Montserrat',
            },
        },
        scales: {
            xAxes: [ {
                display: true,
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                scaleLabel: {
                    display: false,
                    labelString: 'Month'
                }
                    } ],
            yAxes: [ {
                display: true,
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Value'
                }
                    } ]
        },
        title: {
            display: false,
            text: 'Normal Legend'
        }
    }
} );