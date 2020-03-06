@extends('base.dashboard')

@section('title')
	{{ $users->username}}
@stop

@section('section-a')
	<div class="container dashboard-content">
		<div class="card">
			<div class="card-header">
				<h1>My Profile</h1>
			</div>
			<div class="card-body">
				{!! Form::model($users, ["url" => "update/$users->id", "method" => "PATCH"])
!!}
					{{ csrf_field() }}
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" value="{{ $users->username }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Phone Number</label>
						<input type="tel" name="phnum" value="{{ $users->phnum}}" class="form-control">
					</div>		
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" value="{{ $users->email }}" class="form-control">
					</div>
					<div class="form-group">
						<button class="btn">Update</button>
					</div>
				{!! Form::close() !!}	
			</div>
		</div>
	</div>
@stop