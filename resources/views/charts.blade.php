@extends('include')


@section('charts')
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
                        <canvas id="myChart" style="width: 300px; height:150px !important"></canvas>
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