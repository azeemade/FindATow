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
    @yield('head')
</head>
<body>
	<div class="fixed-top a-nav">
		<div class="uc-nav container navbar">
			<div class="navbar-left">
				<a href="{{ url('index')}}" class="navbar-brand">FAT</a>
			</div>
			<div class="navbar-right align-items-center d-flex ">			
				<div class="nav-item mr-3"><a href="{{ url('index#how-it-works') }}">How It Works</a></div>
				<div class="nav-item mr-3"><a href="">About Us</a></div>
				<div class="nav-item"><a href="{{ url('account')}}" class="btn">
					<svg xmlns="http://www.w3.org/2000/svg" width="15.999" height="15.999" viewBox="0 0 15.999 15.999"><path id="Icon" d="M-6120-16074v-2c0-2.2,3.6-4,8-4s8,1.8,8,4v2Zm4-12a4,4,0,0,1,4-4,4,4,0,0,1,4,4,4,4,0,0,1-4,4A4,4,0,0,1-6116-16086Z" transform="translate(6120 16089.998)" fill="rgb(245, 95, 0)"/></svg></a>
				</div>
			</div>
		</div>
		<div class="c-nav container navbar">
			<div class="navbar-left">
				<a href="{{ url('account')}}" class="btn">
					<svg xmlns="http://www.w3.org/2000/svg" width="15.999" height="15.999" viewBox="0 0 15.999 15.999"><path id="Icon" d="M-6120-16074v-2c0-2.2,3.6-4,8-4s8,1.8,8,4v2Zm4-12a4,4,0,0,1,4-4,4,4,0,0,1,4,4,4,4,0,0,1-4,4A4,4,0,0,1-6116-16086Z" transform="translate(6120 16089.998)" fill="rgb(245, 95, 0)"/></svg>
				</a>
			</div>
			<div class="navbar-middle">
				<a href="{{ url('index')}}" class="navbar-brand">
				FAT</a>
			</div>
			<div class="navbar-right">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><svg class="navbar-toggler-icon"height="30px" width="30px" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
				  <g fill="none">
				    <path stroke="rgb(245, 95, 0)" d="M4 7 h22 M4 15 h22 M4 23 h22" stroke-width="2" stroke-linecap="round"></path>
				  </g></svg></button>
			</div>
			<div class="collapse mt-3" id="navbarCollapse">
				<div class="accountBtns">
					<button class="accountLink btn" onclick="openPage('OurService')" id="defaultOpen">Our Service</button>
					<button class="accountLink btn" onclick="openPage('OurCompany')">Our Company</button>
				</div>
				<div id="OurService" class="footerContent">
					<ul>
						<li><a href="{{ url('account') }}">Order Tow</a></li>
						<li><a href="{{ url('index#how-it-works') }}">How It Works</a></li>
						<li><a href="{{ url('index#tow-estimator') }}">Tow Estimator</a></li>
						<li><a href="">Service Coverage</a></li>
					</ul>
				</div>
				<div id="OurCompany" class="footerContent">
					<ul>
						<li><a href="">About Us</a></li>
						<li><a href="{{ url('index#contact-us') }}">Contact</a></li>
						<li><a href="">Investor Relations</a></li>
						<li><a href="">Careers</a></li>
						<li><a href="">Terms & Condition</a></li>
						<li><a href="">Privacy Statement</a></li>
					</ul>
				</div>	        	
		    </div>
		</div>
	</div>
		
	<section class="section-a">
		@yield('section-a')
	</section>

	<section class="section-b">
		@yield('section-b')
	</section>
	<section class="section-c">
		@yield('section-c')
	</section>
	<footer class="footer-section">
		<div class="footer-body container">
			<div class="row">
				<div class="col-md-4">
					<ul>
						<li><a href="">About Us</a></li>
						<li><a href="{{ url('index#contact-us') }}">Contact</a></li>
						<li><a href="">Service Coverage</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li><a href="">Career</a></li>
						<li><a href="{{ url('account') }}">Order Tow</a></li>
						<li><a href="{{ url('index#tow-estimator') }}">Tow Estimator</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li><a href="">Investor Relations</a></li>
						<li><a href="">Privacy Statement</a></li>
						<li><a href="">Terms & Condition</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-footer container">
			<hr>
			<p>@2018-2020 FindATow Inc. Designed By PACIFICA</p>
		</div>
	</footer>

<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>