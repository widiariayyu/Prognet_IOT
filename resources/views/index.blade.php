
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Internet Of Things Weather</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" href="{{asset('css/main.css')}}">
		<!-- Loading third party fonts -->
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
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item current-menu-item"><a href="/">Home</a></li>
							</ul>
						</div>
					</div>
				</div>


			<div class="forecast-table forest-margin">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
						
							<div class="forecast-header">
								<div class="day">Rainfalls</div>
								<div class="date">{{date('jS F Y h:i:s A')}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">Bukit</div>
								
								<div class="degree">
									<div class="num "> &nbspM</div>
									<div class="forecast-icon">
										<img src="images/icons/icon-1.svg" alt="" width=90>
									</div>	
								</div>
								<span><img src="images/icon-umberella.png" alt="">%</span>
								{{-- <!-- @if(count($widths)) --> --}}
								{{-- @foreach($widths as $wd) --}}
								<span><img src="images/icon-wind.png" alt="">22km/h</span>
								{{-- @endforeach
								<!-- @endif --> --}}
								<span><img src="images/icon-compass.png" alt="">East</span>
							</div>
						</div>
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day">Humidities</div>
								<div class="date">{{date('jS F Y h:i:s A')}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">Bukit</div>
								<div class="degree">
									<div class="num">
										<sup>o</sup>C</div>
									<div class="forecast-icon">
										<img src="images/icons/icon-1.svg" alt="" width=90>
									</div>	
								</div>
								<span><img src="images/icon-umberella.png" alt="">%</span>
								<span><img src="images/icon-wind.png" alt="">km/h</span>
								<span><img src="images/icon-compass.png" alt="">East</span>
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
								<div class="day">Widths</div>
								<div class="date">{{date('jS F Y h:i:s A')}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">Bukit</div>
								
								<div class="degree">
									<div class="num"><p id="data_dummy"></p> M</div>
									<div class="forecast-icon">
										<img src="images/icons/icon-1.svg" alt="" width=90>
									</div>	
								</div>
								<span><img src="images/icon-umberella.png" alt="">%</span>
								{{-- <!-- @if(count($widths)) --> --}}
								{{-- @foreach($widths as $wd) --}}
								<span><img src="images/icon-wind.png" alt="">22km/h</span>
								{{-- @endforeach
								<!-- @endif --> --}}
								<span><img src="images/icon-compass.png" alt="">East</span>
							</div>
						</div>
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day">Temperatures</div>
								<div class="date">{{date('jS F Y h:i:s A')}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">Bukit</div>
								<div class="degree">
									<div class="num">
										<sup>o</sup>C</div>
									<div class="forecast-icon">
										<img src="images/icons/icon-1.svg" alt="" width=90>
									</div>	
								</div>
								<span><img src="images/icon-umberella.png" alt="">%</span>
								<span><img src="images/icon-wind.png" alt="">km/h</span>
								<span><img src="images/icon-compass.png" alt="">East</span>
							</div>
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
		<script src="{{ asset('theme/js/app.js') }}"></script>	
		{{-- <script src="{{ asset('theme/js/jquery-1.11.1.min.js') }}"></script> --}}
		<script src="{{ asset('theme/js/plugins.js') }}"></script>
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
		  var db = firebase.database().ref('widths').child("1");
		  var db2 = firebase.database().ref('widths').child("2");
		  //var db = firebase.database().ref('widths');
				 // var widthsRef = db.ref('widths');
		  var data_dummy = document.getElementById('data_dummy');
		  var data_dummy2 = document.getElementById('data_dummy2');
		
		  db.on('value', snap => data_dummy.innerText =Object.values(snap.val()));
		  db2.on('value', snap => data_dummy2.innerText =Object.values(snap.val()));		  


		  //////////////////////////////////////////
		  function showData(items){
			  console.log(items.val())
		  }
			function showEror(err){
				console.log(err)
			}
		  

		</script>
		
	</body>

</html>

