@extends('layouts.front')

@section('content')


<section class="map-listing">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-8">
				<div class="map-listing-search mt-3">
					<form>
					  <div class="row">
					    <div class="col-12 col-lg-4 pr-lg-0">
						    <div class="form-group">
						  		<select class="form-control form-control-lg rounded-0" id="sel1">
							    	<div>
							    	    <option><i class="fa fa-map-marker"></i>All the services</option>
							    	    <optgroup>
							    	        <option></option>
							    	    </optgroup>
							    	</div>
							  </select>
							</div>
					 	</div>
					    <div class="col-12 col-lg-4 p-lg-0">
						    <div class="form-group">
						  		<select class="form-control form-control-lg rounded-0" id="sel1">
							    <option>option 1</option>
							    <option>option 1</option>
							    <option>option 1</option>
							    <option>option 1</option>
							  </select>
							</div>
					 	</div>
					 	<div class="col-12 col-lg-4 pl-lg-0">
						    <div class="form-group">
						  		<select class="form-control form-control-lg rounded-0" id="sel1">
							    <option>option</option>
							    <option>option</option>
							    <option>option</option>
							    <option>option</option>
							  </select>
							</div>
					 	</div>
					  </div>
					</form>
				</div>
				
					<h6 class="text-center text-md-left">5 hairdressers offer availability at -50% or -30% or without promotion</h6>
				
				<div class="barbers-list">
					<ul class="list-unstyled">
					    <!--@if(isset($barbers))-->
    					    @foreach ($barbers as $barber)
    						    <li class="media  flex-column flex-md-row my-4">
    							<img class="img-fluid" src="{{asset('public/user-uploads/service')}}/{{ $barber->image  }}" alt="Generic placeholder image">
    							
    							<div class="media-body">
    								<div class="mt-0 title">
    									<div class="row">
    										<div class="col-sm-8">
    											<h4 class="text-center float-md-left   mr-4">{{ $barber->name }}</h4>
    											<div class="text-center text-md-nowrap"  style="max-width: 300px;"><h6 class="pt-2"><b>Manager Name:</b> {{ $barber->manager_name }}</h6>  </div>
    										</div>
    										<div class="col-sm-4">
    											<div class="float-none text-center float-md-right ">
    											<i class="fa fa-map"></i>  {{ $barber->city }}</div>
    										</div>
    									</div>
    										
    								</div>
    								<div class="detail">
    									<div class="row">
    										<div class="col-sm-3">
    											<div class="mt-3 ml-2 availability">
    												<h6 class="text-center"><b><i class="fa fa-clock-o"></i> His availability</b></h6>
    												<hr class="m-0">
    												<div class="calender-outer-box">
    													<div class="calender-box">
    													    <h6 class="text-center"><b>From:</b><br>	{{ $barber->from_time }}</h6>
    													    <hr class="m-1">
    													    <h6 class="text-center"><b>To:</b><br>{{ $barber->to_time  }}</h6>
    													</div>
    													
    												</div>
    											</div>
    										</div>
    
    										<div class="col-sm-8 border-left mx-2 mx-md-0" >
    											<div class="services mt-3"><h6 class="text-center text-md-left"><b> <i class="fa fa-scissors"></i>  Service</b></h6></div>
    										
    											<div class="d-flex flex-column flex-md-row align-items-center justify-content-md-between">
    												<p class="text-md-nowrap text-truncate" style="max-width: 300px;">{{ $barber->service_name }}</p>
    												<p>{{ $barber->price }}€</p>
    											</div>
    											<div class="services mt-3"><h6 class="text-center text-md-left"><b> <i class="fa fa-phone"></i>  Contact</b></h6></div>
    										
    											<div class="d-flex flex-column flex-md-row align-items-center justify-content-md-between">
    												<p class="text-md-nowrap text-truncate" style="max-width: 300px;">Contact Number:</p>
    												<p>{{ $barber->contact }}</p>
    											</div>
    											
    										</div>
    										<div class="col-sm-1">
    											<a href="/select-service" class="next-btn"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
    										</div>
    									</div>
    								</div>
    							</div>
    						</li>
    		            	@endforeach
    		            <!--@endif-->
					</ul>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				
				<div id="googleMap" style="width:100%;height:600px;"></div></a>
			</div>
		</div>
	</div>
</section>

<script>
	function myMap() {
		var mapProp= {
			center:new google.maps.LatLng(51.508742,-0.120850),
			zoom:5,
		};
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmydDVEgMj8fzrmN9j0c6YIOuuAl8quCg&callback=myMap"></script>

@endsection