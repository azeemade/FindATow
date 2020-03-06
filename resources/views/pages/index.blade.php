@extends('base.master')

@section('title')
	Homepage - FindATow
@stop


@section('section-a')
	<div class="container">
		<div class="row hero-section">
			<div class="hero-left col-md-8">
				<div class="hero-title">
					<h1 class="hero-title">Get Your Vehicle Towed With Ease.</h1>
				</div>
				<div class="hero-body">
					<p class="hero-body mt-5 mr-5">Whenever your vehicle breaks down you can now get it towed easily and faster. FindATow links you up with the towman in your vicinity. All you have to do is to pay the towman, our service is free.</p>
				</div>	
			</div>
			<div class="hero-right col-md-4">
				<div class="hero-image">
					<img src="Images/tows1.png" class="hero-image-r">
				</div>
			</div>	
		</div>		
	</div><br><br><br>
@stop

@section('section-b')
	<div class="container">
		<div class="card estimator-form">
			<div class="card-header">
				<h1 class="ml-3" id="tow-estimator">Tow Estimator</h1>
			</div>
			<div class="card-body">
				<form method="post" action="" class="row align-items-end">
					{{ csrf_field() }}
					<div class="form-group col-md-3">
						<label for="towFrom">Tow From</label>									
						{!!Form::select('tow_id', $arealist1, null, ['class'=>'form-control ']) !!}
					</div>
					<div class="form-group col-md-3">
						<label for="towTo">Tow To</label>
						{!!Form::select('tow_id', $arealist2, null, ['class'=>'form-control']) !!}
					</div>
					<div class="form-group col-md-3">
						<input type="text" name="estPrice" placeholder="Estimated Price" class="form-control" >
					</div>
					<div class="form-group col-md-3">
						<button class="btn btn-large">Estimate</button>
					</div>
				</form>
			</div>
		</div>	
	</div><br><br><br>
@stop

@section('section-c')
	<div class="container">
		<div class="row">
			<div class="section-left col-md-8 mb-5">
				<div class="section-head">
					<h1 class="section-title pt-5" id="how-it-works">How It Works</h1>
				</div>
				<div class="section-body">
					<p class="section-info">FindATow works by creating a medium where owners of broken down vehicle can connect with the towman nearest to them.This is done via E-mail or Phone call. </p><br><br>
					<div class="section-list">
						<p>After signing up or logging in to your dashboard, customers are to fill the form to enable us get information about their tow order.</p><br>
						<p>After the form has been filled and submitted, you will recieve an email with the details of your towman which includes contact within minutes.</p><br>
						<p>When the tow service has been offered, pay the towman.</p><br>
						<p>** We have a tow estimator form which helps you get the estimated range of the tow.</p>
					</div>
				</div>
				<div class="section-account">
					<a href="{{ url('account')}}" class="btn btn-large text">Get Started</a>
				</div>
			</div>
			<div class="section-right col-md-4 mt-5">
				<div class="contact-form">
					<div class="card">
						<div class="card-header">
							<h1 class="ml-3" id="contact-us">Contact Us</h1>
						</div>
						<div class="card-body">
							<p>We will get back to you as soon as possible.</p>
							<form method="post" action="{{ url('contact-us/successful') }}">
								{{ csrf_field() }}
								<div class="form-group">
									<input type="text" name="name" placeholder="Name" class="form-control" required>
								</div>
								<div class="form-group">
									<input type="email" name="email" placeholder="Email" class="form-control"required>
								</div>
								<div class="form-group">
									<input type="text" name="subject" placeholder="Subject" class="form-control" required>
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="5" name="message" placeholder="Message" required></textarea>
								</div>
								<div class="form-group">
									<button class="btn btn-large">Submit</button>
								</div>
							</form>
							<div class="social-media">
								<p>We're on the following social media platforms also</p>
								<div class="icon-bar">
									<a href="https://facebook.com/findatowNG" class="facebook"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
									<defs>
									    <clipPath id="clip-path">
									      <rect width="16" height="16" fill="none"/>
									    </clipPath>
									 </defs>
									 <g id="Facebook" clip-path="url(#clip-path)">
									    <rect id="Rectangle_1458" data-name="Rectangle 1458" width="16" height="16" fill="none"/>
									    <path id="Path_1" data-name="Path 1" d="M85.422,16V8.711h2.489l.356-2.844H85.422V4.089c0-.8.267-1.422,1.422-1.422h1.511V.089C88,.089,87.111,0,86.133,0a3.431,3.431,0,0,0-3.644,3.733V5.867H80V8.711h2.489V16Z" transform="translate(-76)" fill="#f55f00" fill-rule="evenodd"/>
									 </g>
									</svg></a>
									<a href="" class="twitter">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
										  <defs>
										    <clipPath id="clip-path">
										      <rect width="16" height="16" fill="none"/>
										    </clipPath>
										  </defs>
										  <g id="Twitter" clip-path="url(#clip-path)">
										    <rect id="Rectangle_1457" data-name="Rectangle 1457" width="16" height="16" fill="none"/>
										    <path id="Path_2" data-name="Path 2" d="M43.067,14.978A9.25,9.25,0,0,0,52.4,5.644V5.2A7.225,7.225,0,0,0,54,3.511a7.379,7.379,0,0,1-1.867.533,3.458,3.458,0,0,0,1.422-1.778,8.153,8.153,0,0,1-2.044.8A3.175,3.175,0,0,0,49.111,2a3.34,3.34,0,0,0-3.289,3.289A1.733,1.733,0,0,0,45.911,6a9.19,9.19,0,0,1-6.756-3.467,3.4,3.4,0,0,0-.444,1.689,3.532,3.532,0,0,0,1.422,2.756,3,3,0,0,1-1.511-.444h0a3.249,3.249,0,0,0,2.667,3.2,2.74,2.74,0,0,1-.889.089,1.513,1.513,0,0,1-.622-.089,3.367,3.367,0,0,0,3.111,2.311A6.711,6.711,0,0,1,38.8,13.467a2.461,2.461,0,0,1-.8-.089,8.39,8.39,0,0,0,5.067,1.6" transform="translate(-38)" fill="#f55f00" fill-rule="evenodd"/>
										  </g>
										</svg>
									</a>	
									<a href="https://instagram.com/findatow" class="instagram">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
										  <defs>
										    <clipPath id="clip-path">
										      <rect width="16" height="16" fill="none"/>
										    </clipPath>
										  </defs>
										  <g id="Instagram" clip-path="url(#clip-path)">
										    <path id="Path_3" data-name="Path 3" d="M8,1.422a24.53,24.53,0,0,1,3.2.089,4.123,4.123,0,0,1,1.511.267,3.122,3.122,0,0,1,1.511,1.511A4.123,4.123,0,0,1,14.489,4.8c0,.8.089,1.067.089,3.2a24.53,24.53,0,0,1-.089,3.2,4.123,4.123,0,0,1-.267,1.511,3.122,3.122,0,0,1-1.511,1.511,4.123,4.123,0,0,1-1.511.267c-.8,0-1.067.089-3.2.089a24.53,24.53,0,0,1-3.2-.089,4.123,4.123,0,0,1-1.511-.267,3.122,3.122,0,0,1-1.511-1.511A4.123,4.123,0,0,1,1.511,11.2c0-.8-.089-1.067-.089-3.2a24.53,24.53,0,0,1,.089-3.2,4.123,4.123,0,0,1,.267-1.511A3.192,3.192,0,0,1,2.4,2.4a1.5,1.5,0,0,1,.889-.622A4.123,4.123,0,0,1,4.8,1.511,24.53,24.53,0,0,1,8,1.422M8,0A26.264,26.264,0,0,0,4.711.089,5.488,5.488,0,0,0,2.756.444a3.48,3.48,0,0,0-1.422.889A3.48,3.48,0,0,0,.444,2.756,4.05,4.05,0,0,0,.089,4.711,26.264,26.264,0,0,0,0,8a26.264,26.264,0,0,0,.089,3.289,5.488,5.488,0,0,0,.356,1.956,3.48,3.48,0,0,0,.889,1.422,3.48,3.48,0,0,0,1.422.889,5.488,5.488,0,0,0,1.956.356A26.264,26.264,0,0,0,8,16a26.264,26.264,0,0,0,3.289-.089,5.488,5.488,0,0,0,1.956-.356,3.729,3.729,0,0,0,2.311-2.311,5.488,5.488,0,0,0,.356-1.956C15.911,10.4,16,10.133,16,8a26.264,26.264,0,0,0-.089-3.289,5.488,5.488,0,0,0-.356-1.956,3.48,3.48,0,0,0-.889-1.422A3.48,3.48,0,0,0,13.244.444,5.488,5.488,0,0,0,11.289.089,26.264,26.264,0,0,0,8,0M8,3.911A4.023,4.023,0,0,0,3.911,8,4.089,4.089,0,1,0,8,3.911m0,6.756A2.619,2.619,0,0,1,5.333,8,2.619,2.619,0,0,1,8,5.333,2.619,2.619,0,0,1,10.667,8,2.619,2.619,0,0,1,8,10.667m4.267-7.911a.978.978,0,1,0,.978.978.986.986,0,0,0-.978-.978" fill="#f55f00" fill-rule="evenodd"/>
										  </g>
										</svg>
									</a>
								</div>								
							</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>	
	</div><br><br>

	<div class="dead-footer container">
			<hr>
			<p>@2018-2020 FindATow Inc. Designed By PACIFICA</p>
	</div>
@stop
