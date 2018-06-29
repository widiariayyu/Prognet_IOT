@extends('include')
@section('charts')
	<div class="site-content">
		<div class="site-header header-nav">
			<div class="container">
				<a href="{{url('/')}}" class="branding">
					<img src="images/logo.png" alt="" class="logo">
					<div class="logo-type">
						<h1 class="site-title">Weather Station</h1>
						<small class="site-description">Internet of Things project</small>
						<div class="">{{date('jS F Y ')}}</div>
					</div>
				</a>		
				{{--  navbar  --}}
				<div class="main-navigation">
					<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
					<ul class="menu">
						<li class="menu-item current-menu-item" style="padding-top:5px"><a href="{{url('/')}}">Home</a></li>
						<li class="menu-item" style="padding-top:5px"><a href="{{url('charts')}}">Charts</a></li>
					</ul>				
				</div>
				<div class="mobile-navigation"></div>
			</div>
		</div>
        <div class="forecast-table forest-margin chart-margin">
			<div class="container">
				<div class="forecast-container">
					<canvas id="canvasWind" width="800" height="400"></canvas>
				</div>
				<div id="jarak-chart" class="forecast-container">
					<canvas id="canvasHumidities" width="800" height="400"></canvas>
				</div>
				<div id="jarak-chart" class="forecast-container">
					<canvas id="canvasRainfalls" width="800" height="400"></canvas>
				</div>
				<div id="jarak-chart" class="forecast-container">
					<canvas id="canvasTemperatures" width="800" height="400"></canvas>
				</div>
				<div id="jarak-chart" class="forecast-container">
					<canvas id="canvasIntensity" width="800" height="400"></canvas>
				</div>																
			</div>
			</div>
		</div>
		<footer class="site-footer">
			<div class="container">
				<div class="row justify-content-around">
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div>
				</div>
				<p class="row justify-content-around" style="padding-top:15px;">Copyright 2018 Weather Stations. All rights reserved</p>
			</div>
		</footer>
	</div>
	<script>
		var url = "{{url('charts/chart')}}";
		var Wind = new Array();
		var Humidities = new Array();
		var Rainfalls = new Array();
		var Temperatures = new Array();
		var Intensity = new Array();
		var Waktu =new Array();


		$(document).ready(function(){
			$.get(url, function(response){
			response.forEach(function(data){
				Wind.push(data.wind);
				Humidities.push(data.humidities);
				Rainfalls.push(data.rainfalls);
				Temperatures.push(data.temperatures);
				Intensity.push(data.intensity);
				Waktu.push(data.waktu);
				
			});
			var ctx = document.getElementById("canvasWind").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: Waktu,
						datasets: [{
							label: 'Wind',
							data: Wind,
							//backgroundColor: 'transparent',
							borderColor: 'rgba(200,100,70,0.75)',
							pointStyle: 'circle',	
							pointRadius: 3,					
							borderWidth: 3
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
			var ctx = document.getElementById("canvasHumidities").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: Waktu,
						datasets: [{
							label: 'Humidities',
							data: Humidities,
							//backgroundColor: 'transparent',
							borderColor: 'rgba(40,167,69,0.75)',
							pointStyle: 'circle',	
							pointRadius: 3,					
							borderWidth: 3
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
				var ctx = document.getElementById("canvasRainfalls").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: Waktu,
						datasets: [{
							label: 'Rainfalls',
							data: Rainfalls,
							//backgroundColor: 'transparent',
							borderColor: 'rgba(220,53,69,0.75)',
							pointStyle: 'circle',
							pointRadius: 3,
							borderWidth: 3						
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
				var ctx = document.getElementById("canvasTemperatures").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: Waktu,
						datasets: [{
							label: 'Temperatures',
							data: Temperatures,
							//backgroundColor: 'transparent',
							borderColor: '#1565C0',
							pointStyle: 'circle',
							pointRadius: 3,
							borderWidth: 3						
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
				var ctx = document.getElementById("canvasIntensity").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: Waktu,
						datasets: [{
							label: 'Intensity',
							data: Intensity,
							//backgroundColor: 'transparent',
							borderColor: '#EEFF41',
							pointStyle: 'circle',
							pointRadius: 3,
							borderWidth: 3						
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
			});
		});
	</script>
@endsection