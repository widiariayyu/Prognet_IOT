@extends('include')


@section('index')
<div class="site-content">
	@foreach($weather as $wth)
		
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
						<li class="menu-item"><a href="{{url('gallery')}}">Gallery</a></li>
					</ul> 
					<ul class="menu">
							{{--  <li class="menu-item"><a href="news.html">News</a></li>		  --}}
						<div class="logo-type">
							<small class="site-description">Time Refresh</small>
						</div>
						{{--  <input type="text" id="save_data" class="form-control custom-select">  --}}
						<select class="custom-select" id="save_data" style="background-color:#28292f; color: white; border-color: #5dade2;">
							<option>--Select The Time--</option>
							<option value="60">every 1 minutes</option>
							<option value="1800">every 30 minutes</option>
							<option value="3600">every 1 hours</option>
						</select>
					</ul>
					{{-- <button type="submit" id="save_btn" onclick="savedata()" class="menu-toggle"><i class="fa fa-bars"></i></button> --}}
					<ul type="submit" id="save_btn" class="menu"  style="margin-top: 20px;">
						<button class="btn btn-primary">Submit</button>
						{{--  <li class="btn btn-primary"><a href="/">Submit</a></li>  --}}
					</ul>					
				</div>
				
				<div class="mobile-navigation">
					<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
					<ul class="menu">
						<li class="menu-item current-menu-item"><a href="{{url('/')}}">Home</a></li>
						<li class="menu-item"><a href="{{url('charts')}}">Charts</a></li>
						<li class="menu-item"><a href="{{url('gallery')}}">Gallery</a></li>
					</ul> 
					<ul class="menu">
							{{--  <li class="menu-item"><a href="news.html">News</a></li>		  --}}
						<div class="logo-type">
							<small class="site-description">Time Refresh</small>
						</div>
						{{--  <input type="text" id="save_data" class="form-control custom-select">  --}}
						<select class="custom-select" id="save_data" style="background-color:#28292f; color: white; border-color: #5dade2;">
							<option>--Select The Time--</option>
							<option value="60">every 1 minutes</option>
							<option value="1800">every 30 minutes</option>
							<option value="3600">every 1 hours</option>
						</select>
					</ul>
					{{-- <button type="submit" id="save_btn" onclick="savedata()" class="menu-toggle"><i class="fa fa-bars"></i></button> --}}
					<ul type="submit" id="save_btn" class="menu"  style="margin-top: 20px;">
						<button class="btn btn-primary">Submit</button>
						{{--  <li class="btn btn-primary"><a href="/">Submit</a></li>  --}}
					</ul>					
				</div>

			</div>
		</div>


	<div class="forecast-table forest-margin">
		<div class="container">
			<div class="forecast-container">
				<div class="today forecast">
				
					<div class="forecast-header">
						<div class="day">Wind</div>
					</div> <!-- .forecast-header -->
					<div class="forecast-content">

						<div class="degree">
							<div class="num "><span id="hujan"></span> {{ $wth->wind }} %</div>
							<div class="forecast-icon">
								<img class="icon-sensor" src="{{ asset('theme/images/wind.png')}}" alt="">
							</div>	
						</div>	
				
					</div>
			
				</div>
				
				<div class="today forecast">
					<div class="forecast-header">
						<div class="day">Rainfall</div>
					</div> <!-- .forecast-header -->
					<div class="forecast-content">
						<div class="degree">
							<div class="num">
								<span id="rainfall"></span> {{ $wth->rainfalls }} 
							</div>
							<div class="forecast-icon">
								<img class="icon-sensor" src="{{asset('theme/images/humidity.png')}}" alt="">
							</div>	
						</div>
						@if ( $wth->rainfalls  < 500)
						<span><i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icon-umberella.png')}} alt="">Status: hujan </span>
						@else 
						<span><i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icon-umberella.png')}} alt="">Status: tidak hujan </span>
						@endif
					</div>
				
	
				</div>
			</div>
		</div>
	</div>

	<div class="forecast-table forest-margin">
		<div class="container">
			<div class="forecast-container">
				<div class="today forecast">
					<div class="forecast-header">
						<div class="day">Temperature and Humidities</div>
					</div> <!-- .forecast-header -->
					<div class="forecast-content">
						
						<div class="degree" style="display: inline;">
							<div class="forecast-icon">
								<img class="icon-sensor" src="{{ asset('theme/images/thermometer-blue.png')}}" alt="">
							</div>
							<div class="num ">{{ $wth->temperatures }} <sup>o</sup>C</div>
							<div class="forecast-icon">
								<img class="icon-sensor" src="{{ asset('theme/images/humid.png')}}" alt="">
							</div>
							<div class="num ">{{ $wth->humidities }} %</div>
							
						</div>	
					
					</div>
			
				</div>
				
				<div class="today forecast">
					<div class="forecast-header">
						<div class="day">Bright Intensity</div>
					</div> <!-- .forecast-header -->
					<div class="forecast-content">
						<div class="degree">
							<div class="num">
								<span id="kelembaban"></span> {{ $wth->intensity }}
							</div>
							<div class="forecast-icon">
								<img class="icon-sensor" src="{{asset('theme/images/sun.png')}}" alt="">
							</div>	
						</div>
						@if ( $wth->intensity  < 1 )
						<span><i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/moon.png')}} alt=""> Status: Dark</span>
						@elseif ($wth->intensity  < 11)
						<span><i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icons/icon-1.svg')}} alt=""> Status: Twilight</span>
						@elseif ($wth->intensity  < 108)
						<span><i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icons/icon-7.svg')}} alt=""> Status: Very Dark Day </span>
						@elseif ($wth->intensity  < 1076)
						<span><i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icons/icon-6.svg')}} alt=""> Status: Overcast Day </span>
						@elseif ($wth->intensity  < 10753)
						<span><i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icons/icon-3.svg')}} alt=""> Status: Full Daylight </span>
						@elseif ($wth->intensity  > 10753)
						<span><i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icons/icon-2.svg')}} alt=""> Status: Sunlight </span>
						@endif
						
						
					</div>
				
	
				</div>
			</div>
		</div>
	</div>
	</div>
	
	

	<footer class="site-footer">
				<div class="container">
					<div class="row">
						
						<div class="col-md-3 col-md-offset-1" style="margin-left:40%">
							<div class="social-links" >
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>

					<p class="colophon" style="margin-left:35%">TI Udayana. Designed by TC2016. All rights reserved</p>
				</div>
			</footer> <!-- .site-footer -->
	@endforeach
</div>

@endsection