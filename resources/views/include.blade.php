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
		@yield('gallery')
		@yield('location')
		@yield('table')
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>

		<script src="{{ asset('js/plugins.js') }}"></script>
		<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>

		<script src="{{asset('vendor/datatables/jquery.dataTables.js') }}"></script>
		<script src="{{asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
		{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
		

        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-database.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-messaging.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-storage.js"></script>
		<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
		
        
        <script>
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
				
				var ab = document.querySelector('service');
				var hasil;

				$('#save_btn').click(function(){
					
					rootRef.set({
						waktu:$('#save_data').val()
					});
					//console.log({save_data: $('#save_data').val()});
				});

				rootRef.on('value',function(snapshot){
					hasil = snapshot.val();
					//var waktu = data.waktu();
					//ab = waktu / 60;
					//hasil =( data / 60);
					ab.innerHTML =  hasil.waktu / 60;
					console.log(snapshot.val());
				})
				
		</script>

		<script>
			jQuery(document).ready(function( $ ) {

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
