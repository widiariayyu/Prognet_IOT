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
						<li class="menu-item"><a href="/login">LoginAdmin</a></li>
					</ul>			
				</div>
				<div class="mobile-navigation"></div>
			</div>
		</div>	
		<div class="fullwidth-block">
			<div class="forecast-table forest-margin">
				
				<div class="container">
					
					<div class="forecast-container">
						
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day">Wind</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="degree">
									<div class="num "><span id="hujan"></span> {{ $wth->wind }} m/s</div>
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
							<div class="forecast-content" style="margin-top:15px;">
								<div class="degree" style="display: inline;">
									<div class="forecast-icon">
										<img class="icon-sensor" src="{{ asset('theme/images/thermometer-blue.png')}}" alt="">
									</div>
									<div class="num" ><h5>{{ $wth->temperatures }}<sup>o</sup>C</h5></div>
									<div class="forecast-icon">
										<img class="icon-sensor" src="{{ asset('theme/images/humid.png')}}" alt="">
									</div>
									<div class="num" ><h5>{{ $wth->humidities }} %</h5></div>
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

		<main class="main-content">
			<div class="fullwidth-block">
				<div class="container">
					<h2 class="section-title">Gallery</h2>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="live-camera">
								<figure class="live-camera-cover"><img src="{{ asset('img/7.jpg')}}" alt=""></figure>
								<h3 class="location">New York</h3>
								<small class="date">8 oct, 8:00AM</small>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="live-camera">
								<figure class="live-camera-cover"><img src="{{ asset('img/7.jpg')}}" alt=""></figure>
								<h3 class="location">Los Angeles</h3>
								<small class="date">8 oct, 8:00AM</small>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="live-camera">
								<figure class="live-camera-cover"><img src="{{ asset('img/7.jpg')}}" alt=""></figure>
								<h3 class="location">Chicago</h3>
								<small class="date">8 oct, 8:00AM</small>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="live-camera">
								<figure class="live-camera-cover"><img src="{{ asset('img/7.jpg')}}" alt=""></figure>
								<h3 class="location">London</h3>
								<small class="date">8 oct, 8:00AM</small>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="fullwidth-block">
            <div class="container">
				<h2 class="section-title">Location</h2>
                <div class="col-md-13">
                    <div class="contact-details">
                    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA7MbYys7PWpzyY9xQcwlW88styrWjH-JM&callback=initMap'></script><div style='overflow:hidden;height:400px;width:100%px;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><div><small>
                        <a href="embedgooglemaps.com/">
                            https:/embedgooglemaps.com
                        </a></small></div><div><small>
                        <a href="http://www.kumo-racing.nl/">source</a></small>
                    </div>
                    <style>#gmap_canvas img{max-width:none!important;background:none!important;padding-bottom: 20px}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(-8.796398,115.176451),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-8.795688799999999,115.17695520000007)});infowindow = new google.maps.InfoWindow({content:'<strong>Weather Stations</strong><br>Bukit, Teknologi Informasi Fakultas Teknik Udayana<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>    
                    </div>
                </div>
            </div>
        </div>
		<footer class="site-footer">
			<div class="container">
				<div class="row">		
					<div class="col-md-3 col-md-offset-1">
						<div class="social-links" >
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
				<p class="colophon">TI Udayana. Designed by TC2016. All rights reserved</p>
			</div>
		</footer>
	@endforeach
	</div>
@endsection