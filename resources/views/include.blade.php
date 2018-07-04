<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Internet Of Things Weather</title>
		<link rel="shortcut icon" href="{{asset('theme/images/logo-ti.png')}}">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/datatables/dataTables.bootstrap4.css') }}">
		<link rel="stylesheet" href="{{asset('css/main.css')}}">
		{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
		<!-- Loading third party fonts -->
		<link rel="stylesheet" type="text/css" href="{{asset('theme/weather-icons/css/weather-icons.min.css')}}">
		
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{ asset('theme/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

		
		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('lib/magnific-popup/magnific-popup.css') }}">
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		{{--  <script src="{{ asset('theme/js/plugins.js') }}"></script>	  --}}
        {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>		  --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>	
		{{--  <!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->  --}}

	</head>

	<body>

        @yield('index')
		@yield('charts')
		@yield('table')
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>

		<script src="{{ asset('js/plugins.js') }}"></script>
		<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>

		<script src="{{asset('vendor/datatables/jquery.dataTables.js') }}"></script>
		<script src="{{asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
		{{--  <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  --}}
		{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
		

        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-database.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-messaging.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-storage.js"></script>
		<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
		
        
        <script>
			//function firebase(){
				//alert("tes")
				var config = {
					apiKey: "AIzaSyD31ZLIBbyPB4UFYCkzebSlcL7AmniZgPg",
					authDomain: "weatherstation-97401.firebaseapp.com",
					databaseURL: "https://weatherstation-97401.firebaseio.com",
					projectId: "weatherstation-97401",
					storageBucket: "weatherstation-97401.appspot.com",
					messagingSenderId: "494211813974"
				};
				firebase.initializeApp(config);
				var db = firebase.database();
				var rootRef = db.ref('service');
				var woodRef = db.ref('user');
				
				var ab = document.querySelector('service');
				var rain = document.querySelector('rain');
				var wind = document.querySelector('wind');
				var tempe = document.querySelector('tempe');
				var humi = document.querySelector('humi');
				var intensity = document.querySelector('inten');


				$('#save_btn').click(function(){
					
					rootRef.set({
						waktu:$('#save_data').val()
					});
					//console.log({save_data: $('#save_data').val()});
				});

				rootRef.on('value',function(snapshot){
					hasil = snapshot.val();
					//ab.innerHTML =  hasil.waktu / 60;
					console.log('hasil = '+hasil);
				})
				
				woodRef.on('value',function(snapshot){
					var rainfalls=snapshot.child("-LGLgvgs3llIkzZxtvtq/rainfalls").val();
					rain.innerHTML =  rainfalls
					var inten=snapshot.child("-LGLgvgs3llIkzZxtvtq/intensity").val();
					intensity.innerHTML = inten
					//console.log(inten);

					//console.log('#st_hujan');
					humi.innerHTML = snapshot.child("-LGLgvgs3llIkzZxtvtq/humidities").val();
					rain_sta = snapshot.child("-LGLgvgs3llIkzZxtvtq/rain_status").val();
					tempe.innerHTML = snapshot.child("-LGLgvgs3llIkzZxtvtq/temperatures").val();
					wind.innerHTML = snapshot.child("-LGLgvgs3llIkzZxtvtq/wind").val();
					
					//console.log(rainfls,humi,rain_sta,inten,tempe,wind);
					if(rainfalls<500){
						$('#rain-status').html('<i  class="wi wi-wind wi-from-e"></i><img id="rain-image" src={{asset('theme/images/icon-umberella.png')}} alt="">Status: Rain')
						
					}else{
						$('#rain-status').html('<i  class="wi wi-wind wi-from-e"></i><img id="rain-image" src={{asset('theme/images/icon-umberella.png')}} alt="">Status: Not Rain')
						
					}

					if(inten<1){
						$('#inten-status').html('<i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/moon.png')}} alt=""> Status: Dark');
					}else if(inten<11){
						$('#inten-status').html('<i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icons/icon-1.svg')}} alt=""> Status: Twilight');
					}else if(inten<108){
						$('#inten-status').html('<i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icons/icon-7.svg')}} alt=""> Status: Very Dark Day');
					}else if(inten<1076){
						$('#inten-status').html('<i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icons/icon-6.svg')}} alt=""> Status: Overcast Day');
					}else if(inten<10753){
						$('#inten-status').html('<i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icons/icon-3.svg')}} alt=""> Status: Full Daylight');
					}else if(inten> 10753){
						$('#inten-status').html('<i class="wi wi-wind wi-from-e"></i><img src={{asset('theme/images/icons/icon-2.svg')}} alt=""> Status: Sunglight');
					}

				})
			//}
				
		</script>

		<script>
			jQuery(document).ready(function( $ ) {
				firebase()
				// custom code
				$('.gallery-popup').magnificPopup({
					type: 'image',
					removalDelay: 300,
					mainClass: 'mfp-fade',
					gallery: {
						enabled: true
					},
					zoom: {
						enabled: true,
						duration: 300,
						easing: 'ease-in-out',
						opener: function(openerElement) {
						return openerElement.is('img') ? openerElement : openerElement.find('img');
						}
					}
				});

			});
		</script>
	</body>

</html>
