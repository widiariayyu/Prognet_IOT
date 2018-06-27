@extends('include')

@section('gallery')

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
					<ul class="menu"  style="margin-top: 20px;">
						<li class="menu-item"><a href="{{url('/')}}">Home</a></li>
						<li class="menu-item"><a href="{{url('charts')}}">Charts</a></li>
						<li class="menu-item"><a href="{{url('gallery')}}">Gallery</a></li>
						{{--  <li class="btn btn-primary"><a href="/">Submit</a></li>  --}}
				
					</ul>
					<ul class="menu">
							
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
        
	<div class="wrap">
    <!-- Define all of the tiles: -->
    <section id="gallery">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item wow fadeInUp">
                        <a href="{{ asset('img/7.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/7.jpg')}}" alt="">
                        </a>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item wow fadeInUp">
                        <a href="{{ asset('img/images.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/images.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item wow fadeInUp">
                        <a href="{{ asset('img/images.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/images.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item wow fadeInUp">
                        <a href="{{ asset('img/1.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/1.jpg')}}" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item wow fadeInUp">
                        <a href="{{ asset('img/1.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/1.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item wow fadeInUp">
                        <a href="{{ asset('img/2.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/2.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item wow fadeInUp">
                        <a href="{{ asset('img/7.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/7.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item wow fadeInUp">
                        <a href="{{ asset('img/1.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/1.jpg')}}" alt="">
                        </a>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
  
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

@endsection