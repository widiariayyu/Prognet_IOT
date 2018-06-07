<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Internet Of Things Weather</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" href="{{asset('css/main.css')}}">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Loading third party fonts -->
		<link rel="stylesheet" type="text/css" href="{{asset('theme/weather-icons/css/weather-icons.min.css')}}">
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

        @yield('index')

		@yield('charts')
        <script src="{{ asset('app.js') }}"></script>
        <script src="{{ asset('theme/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{ asset('theme/js/plugins.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-database.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-messaging.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-storage.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
        <script src="{{ asset('js/include.js')}}"></script>
        
        
	</body>

</html>

