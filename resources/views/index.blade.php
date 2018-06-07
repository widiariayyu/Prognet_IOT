@extends('include')


@section('index')
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
				{{--  <canvas id="myChart" style="width: 300px; height:150px !important"></canvas>  --}}
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
					{{--  <canvas id="ChartWind" style="width: 300px; height:150px !important"></canvas>  --}}
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
					{{--  <canvas id="ChartTemper" style="width: 300px; height:150px !important"></canvas>  --}}
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
@endsection