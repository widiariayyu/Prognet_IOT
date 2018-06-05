
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Internet Of Things Weather</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" href="{{asset('css/main.css')}}">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Loading third party fonts -->
		<link rel="stylesheet" type="text/css" href="{{asset('theme/weather-icons/css/weather-icons.min.css')}}">
		<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
		<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{ asset('theme/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">


		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		
		{{--  <!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->  --}}

	</head>

	<body>
			<div class="site-content">
				<div class="site-header header-nav">
					<div class="container">
						<a href="index.html" class="branding">
							<img src="images/logo.png" alt="" class="logo">
							<div class="logo-type">
								<h1 class="site-title">Weather Station</h1>
								<small class="site-description">Internet of Things project</small>
							</div>
						</a>
						{{--  navbar  --}}
						<div class="main-navigation">
							<ul class="menu">
								
								<div class="logo-type">
									<small class="site-description">Time Refresh</small>
								</div>
								   <select class="custom-select" id="sel1" style="background-color:#28292f; color: white; border-color: #5dade2;">
								        <option>--Select The Time--</option>
								        <option>every minutes</option>
								        <option>every hours</option>
								   </select>	
							</ul>

							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu"  style="margin-top: 20px;">
								<li class="menu-item current-menu-item"><a href="/">Submit</a></li>
							</ul>
						</div>
					</div>
				</div>


			<div class="forecast-table forest-margin">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
						
							<div class="forecast-header">
								<div class="day">Rainfall</div>
								<div class="date">{{date('jS F Y ')}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">Bukit</div>
								
								<div class="degree">
									<div class="num "><span id="hujan"></span> M</div>
									<div class="forecast-icon">
										<img src="{{ asset('theme/images/icons/icon-10.svg')}}" alt="" width=90>
									</div>	
								</div>
								<span><img src="{{asset('theme/images/icon-umberella.png')}}" alt="">%</span>
								{{-- <!-- @if(count($widths)) --> --}}
								{{-- @foreach($widths as $wd) --}}
								<span><img src="{{asset('theme/images/icon-wind.png')}}" alt="">22km/h</span>
								{{-- @endforeach
								<!-- @endif --> --}}
								<span><img src="{{asset('theme/images/icon-compass.png')}}" alt="">East</span>
							</div>
						<canvas id="myChart" style="width: 300px; height:150px !important"></canvas>
						</div>
						
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day">Humidities</div>
								<div class="date">{{date('jS F Y ')}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">Bukit</div>
								<div class="degree">
									<div class="num">
										<span id="kelembaban"></span>
										<sup>o</sup>C</div>
									<div class="forecast-icon">
										<img src="{{asset('theme/images/humidity.png')}}" alt="" width=90>
									</div>	
								</div>
								<span><i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icon-umberella.png')}} alt="">%</span>
								<span><img src="{{asset('theme/images/icon-wind.png')}}" alt="">km/h</span>
								<span><img src="{{asset('images/icon-compass.png')}}" alt="">East</span>
							</div>
							<canvas id="ChartHumid" style="width: 300px; height:150px !important"></canvas>
			
						</div>
					</div>
				</div>
			</div>

			<div class="forecast-table forest-margin">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
						
							<div class="forecast-header">
								<div class="day">Wind</div>
								<div class="date">{{date('jS F Y ')}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">Bukit</div>
								
								<div class="degree">
									<div class="num"><p id="data_dummy"></p></div>
									<div class="forecast-icon">
										<img src="{{asset('theme/images/wind.png')}}" alt="" width=90>
									</div>	
								</div>
								<span><img src="{{asset('theme/images/icon-umberella.png')}}" alt="">%</span>
								{{-- <!-- @if(count($widths)) --> --}}
								{{-- @foreach($widths as $wd) --}}
								<span><img src="{{asset('theme/images/icon-wind.png')}}" alt="">22km/h</span>
								{{-- @endforeach
								<!-- @endif --> --}}
								<span><img src="{{asset('theme/images/icon-compass.png')}}" alt="">East</span>
							</div>
							<canvas id="ChartWind" style="width: 300px; height:150px !important"></canvas>
						</div>
						
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day">Temperatures</div>
								<div class="date">{{date('jS F Y ')}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">Bukit</div>
								<div class="degree">
									<div class="num">
										<span id="temperatur"></span>
										<sup>o</sup>C</div>
									<div class="forecast-icon">
										<img src="{{asset('theme/images/thermometer-blue.png')}}" alt="" width=90>
									</div>	
								</div>
								<span><img src="{{asset('theme/images/icon-umberella.png')}}" alt="">%</span>
								<span><img src="{{asset('theme/images/icon-wind.png')}}" alt="">km/h</span>
								<span><img src="{{asset('theme/images/icon-compass.png')}}" alt="">East</span>
							</div>
							<canvas id="ChartTemper" style="width: 300px; height:150px !important"></canvas>
						</div>
						
					</div>
				</div>
			</div>
			


			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-md-offset-1">
							<div class="social-links">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>
					<p class="colophon">Copyright 2018 Weather Stations. All rights reserved</p>
				</div>
			</footer>
		</div>
		</div>
		
		<script src="{{ asset('theme/js/app.js') }}"></script>	
		{{-- <script src="{{ asset('theme/js/jquery-1.11.1.min.js') }}"></script> --}}
		<script src="{{ asset('theme/js/plugins.js') }}"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
		<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-database.js"></script>
		<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-firestore.js"></script>
		<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-messaging.js"></script>
		{{--  firebase js nya   --}}
		<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-storage.js"></script>
		<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
		<script>
		  // Initialize Firebase
		  var config = {
			apiKey: "AIzaSyD31ZLIBbyPB4UFYCkzebSlcL7AmniZgPg",
			authDomain: "weatherstation-97401.firebaseapp.com",
			databaseURL: "https://weatherstation-97401.firebaseio.com",
			projectId: "weatherstation-97401",
			storageBucket: "weatherstation-97401.appspot.com",
			messagingSenderId: "494211813974"
		  };
		  firebase.initializeApp(config);

		  //NoSQL

		//  var db = firebase.database();
		//var widthsRef = db.ref('widths');
		  //widthsRef.on('value',showData,showEror);


		  /////////////////////////////////////////
		  var db = firebase.database().ref("cuaca/1/angin");
		  //var db = firebase.database().ref('widths');
				 // var widthsRef = db.ref('widths');
		  var hujan = document.getElementById('hujan');
		  var kelembaban = document.getElementById('kelembaban');
		  var angin = document.getElementById('angin');
		  var temperatur = document.getElementById('temperatur');
		
		  db.on('value', snap => angin.innerHTML =Object.values(snap.val()));
		  
		  //////////////////////////////////////////
		  function showData(items){
			  console.log(items.val())
		  }
			function showEror(err){
				console.log(err)
			}
		  

		 var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
			    type: 'bar',
			    data: {
			        labels: ["Rainfall", "Humidities", "Wind", "Temperatures"],
			        datasets: [{
			            label: '# of Votes',
			            data: [12, 19, 3, 5, 2, 3],
			            backgroundColor: [
			                'rgba(255, 99, 132, 0.2)',
			                'rgba(54, 162, 235, 0.2)',
			                'rgba(255, 206, 86, 0.2)',
			                'rgba(75, 192, 192, 0.2)'
			                
			            ],
			            borderColor: [
			                'rgba(255,99,132,1)',
			                'rgba(54, 162, 235, 1)',
			                'rgba(255, 206, 86, 1)',
			                'rgba(75, 192, 192, 1)'
			                
			            ],
			            borderWidth: 1
			        }]
			    },
			    options: {
			        scales: {
			            yAxes: [{
			                ticks: {
			                    beginAtZero:true
			                }
			            }]
			        }
			    }
			});
				
			var ctx = document.getElementById("ChartHumid").getContext('2d');
			var myChart = new Chart(ctx, {
			    type: 'bar',
			    data: {
			        labels: ["Rainfall", "Humidities", "Wind", "Temperatures"],
			        datasets: [{
			            label: '# of Votes',
			            data: [12, 19, 3, 5, 2, 3],
			            backgroundColor: [
			                'rgba(255, 99, 132, 0.2)',
			                'rgba(54, 162, 235, 0.2)',
			                'rgba(255, 206, 86, 0.2)',
			                'rgba(75, 192, 192, 0.2)'
			                
			            ],
			            borderColor: [
			                'rgba(255,99,132,1)',
			                'rgba(54, 162, 235, 1)',
			                'rgba(255, 206, 86, 1)',
			                'rgba(75, 192, 192, 1)'
			                
			            ],
			            borderWidth: 1
			        }]
			    },
			    options: {
			        scales: {
			            yAxes: [{
			                ticks: {
			                    beginAtZero:true
			                }
			            }]
			        }
			    }
			});		

			var ctx = document.getElementById("ChartWind").getContext('2d');
			var myChart = new Chart(ctx, {
			    type: 'bar',
			    data: {
			        labels: ["Rainfall", "Humidities", "Wind", "Temperatures"],
			        datasets: [{
			            label: '# of Votes',
			            data: [12, 19, 3, 5, 2, 3],
			            backgroundColor: [
			                'rgba(255, 99, 132, 0.2)',
			                'rgba(54, 162, 235, 0.2)',
			                'rgba(255, 206, 86, 0.2)',
			                'rgba(75, 192, 192, 0.2)'
			                
			            ],
			            borderColor: [
			                'rgba(255,99,132,1)',
			                'rgba(54, 162, 235, 1)',
			                'rgba(255, 206, 86, 1)',
			                'rgba(75, 192, 192, 1)'
			                
			            ],
			            borderWidth: 1
			        }]
			    },
			    options: {
			        scales: {
			            yAxes: [{
			                ticks: {
			                    beginAtZero:true
			                }
			            }]
			        }
			    }
			});		

			var ctx = document.getElementById("ChartTemper").getContext('2d');
			var myChart = new Chart(ctx, {
			    type: 'bar',
			    data: {
			        labels: ["Rainfall", "Humidities", "Wind", "Temperatures"],
			        datasets: [{
			            label: '# of Votes',
			            data: [12, 19, 3, 5, 2, 3],
			            backgroundColor: [
			                'rgba(255, 99, 132, 0.2)',
			                'rgba(54, 162, 235, 0.2)',
			                'rgba(255, 206, 86, 0.2)',
			                'rgba(75, 192, 192, 0.2)'
			                
			            ],
			            borderColor: [
			                'rgba(255,99,132,1)',
			                'rgba(54, 162, 235, 1)',
			                'rgba(255, 206, 86, 1)',
			                'rgba(75, 192, 192, 1)'
			                
			            ],
			            borderWidth: 1
			        }]
			    },
			    options: {
			        scales: {
			            yAxes: [{
			                ticks: {
			                    beginAtZero:true
			                }
			            }]
			        }
			    }
			});		
		</script>

		</script>
		
	</body>

</html>

