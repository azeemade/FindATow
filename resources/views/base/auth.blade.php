<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css\site.css') }}">
</head>
<body>
	<div class="auth-head mb-1">
		<a href="{{ url('index')}}" class="auth-brand">
			<svg id="FATlogo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 187.42 144.01"><defs><style>.cls-1{fill:none;stroke:#ea5b0c;stroke-linecap:round;stroke-linejoin:round;stroke-width:4px;}.cls-2{font-size:30px;fill:#ea5b0c;font-family:Verdana-BoldItalic, Verdana;font-weight:700;font-style:italic;}</style></defs><title>logoFAT+name</title><path class="cls-1" d="M384.11,385.61c5.93,5.83,6.41,12.67,4.93,20.33H323.12v11.3" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M355,351.87c-2.54,2-5.55,3.72-7.54,6.08-7.14,8.5-13.89,17.25-20.93,25.82-1.25,1.53-3.18,2.64-4.8,4" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M227.47,440.43l-13.22-18.88c3.24-10.34,13.86-12.15,21.65-16.51,14.62-8.17,29.85-15.53,45-23,6-3,12.37-5.4,18.69-7.85,5.57-2.15,10.52-1.19,13.77,3,3.68,4.77,6.74,9.9,10.35,15.28l-11.66,7" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M368.17,388.62c-2.77-7.23-5.71-14.41-8.27-21.7-2.31-6.56-4.31-13.22-6.21-19.88-.49-1.7-.07-3.6-.07-5.41,6.94-6.78,13.89-6.83,16.58,0,2.33,6,4.28,12,6.27,18.06,2.38,7.21,4.67,14.45,6.92,21.69a15.3,15.3,0,0,1,.42,3.13l-16.33,3.66v16.1" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M260.74,424.17a39.58,39.58,0,0,1,.66,4.82c.12,6.46-3,11.21-9.65,12.71-6.28,1.41-13.38-.44-16.66-4.88-2.09-2.85-.15-11.52,2.72-14.5,4.15-4.3,11.6-4.61,16.65-2.31,2,.91,3.54,2.55,5.62,4.1l24.92-12" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M312,400.07c2.21,8.27.9,12.51-6.3,15.55-7.57,3.21-14.58,1.76-20.44-5.64-2-7.68-.63-11.71,5.95-14.73,7.54-3.47,14-2.3,20.1,3.61" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M280.84,381.39l-17.71-13.84-43,21.44,6.61,20.12" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M328.66,418.14h-9.35v9.64h9.35" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M233.71,383.2l11.09,16.27" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M356.39,351.27c5,0,10.17.28,13.86-3.61" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M355.7,424.77l6.46,4.05L355.35,434c-7-4-7.07-5.36-1-9.23" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M358.47,415.73c6.67,1.69,11.09,5.16,11.76,11.45.59,5.52-1.07,10.21-6.9,13.26-5.19,2.71-13,2.47-17.34-.61-5.29-3.78-7.61-10.09-5.54-15.06,2.27-5.45,7.86-8.92,14.55-9h2.78" transform="translate(-212.25 -334.53)"/><text class="cls-2" transform="translate(16.46 134.91)">FindATow</text></svg>
		</a>
	</div>
	<section>
		@yield('section-a')
	</section>

<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>