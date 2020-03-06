@extends('base.dashboard')



@section('title')
	{{ $users->username}}
@stop



@section('section-a')
	<script type="text/javascript">
		function showPrice(towFrom, towTo) {
			var xhttp;
			if (towFrom == "" && towTo == "") {
				document.getElementById('estPrice').innerHTML = "";
				return;
			}
			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200){
					document.getElementById("estPrice").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "myPrice.php?q=towFrom&r=towTo", true);
			xhttp.send();
		}
	</script>
	<div class="container dashboard-content">
		<div class="card estimator-form">
			<div class="card-header">
				<h1 class="ml-3" id="tow-estimator">Tow Estimator</h1>
			</div>
			<div class="card-body">
				<form method="get" action="" class="row align-items-end">
					<div class="form-group col-md-3">
						<label for="towFrom">Tow From</label>											
						{!!Form::select('towFrom', $arealist1, null, ['class'=>'form-control ', 'name'=>'towFrom']) !!}
					</div>
					<div class="form-group col-md-3">
						<label for="towTo">Tow To</label>
						{!!Form::select('towTo', $arealist2, null, ['class'=>'form-control', 'name'=>'towTo']) !!}
					</div>
					<div class="form-group col-md-3">
						<input type="text" name="estPrice" placeholder="Estimated Price" class="form-control" id="estPrice">
					</div>
					<div class="form-group col-md-3">
						<button class="btn btn-large" onclick="showPrice(towFrom, towTo)">Estimate</button>
					</div>
				</form>
			</div>
		</div>	
	</div>
@stop