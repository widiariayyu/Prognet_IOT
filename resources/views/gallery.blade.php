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
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/7.jpg" />
        <div class="titleBox">Butterfly</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/1.jpg" />
        <div class="titleBox">An old greenhouse</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/2.jpg" />
        <div class="titleBox">Purple wildflowers</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/3.jpg" />
        <div class="titleBox">A birdfeeder</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/10.jpg" />
        <div class="titleBox">Crocus close-up</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/4.jpg" />
        <div class="titleBox">The garden shop</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/5.jpg" />
        <div class="titleBox">Spring daffodils</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/6.jpg" />
        <div class="titleBox">Iris along the path</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/8.jpg" />
        <div class="titleBox">The garden blueprint</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/9.jpg" />
        <div class="titleBox">The patio</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/11.jpg" />
        <div class="titleBox">Bumble bee collecting nectar</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/12.jpg" />
        <div class="titleBox">Winding garden path</div>
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