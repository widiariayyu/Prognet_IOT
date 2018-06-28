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
						<li class="menu-item current-menu-item"><a href="{{url('/')}}">Home</a></li>
						<li class="menu-item"><a href="{{url('charts')}}">Charts</a></li>
						<li class="menu-item">
						<select class="custom-select" id="save_data" style="background-color:#28292f; color: white; border-color: #5dade2;">
							<option>--Time Refresh--</option>
							<option value="60">every 1 minutes</option> 
							<option value="300">every 5 minutes</option> 
							<option value="600">every 10 minutes</option> 
							<option value="900">every 15 minutes</option> 
							<option value="1800">every 30 minutes</option> 
							<option value="3600">every 1 hours</option>
						</select>
						</li>
					</ul>
					<ul type="submit" id="save_btn" class="menu">
						<button class="btn btn-primary">Submit</button>
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