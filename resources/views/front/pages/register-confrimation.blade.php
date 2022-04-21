@extends('layouts.front')

@section('content')

	<link rel="stylesheet" type="text/css" href="{{asset('front-assets/register-style.css')}}">




			<section class="contact-info">

				<div class="container">
					<div class="row">
						<div class="col-12">
						    <div class="alert alert-success my-5" role="alert" >
                              <h2 class="text-center">Congratulation, </h2>
                              <hr>
                              <h4 class="text-center text-info">Your Saloon have been registered! Get mobile app to login.</h4>
                              
                              <div class="text-center justify-content-md-center align-items-sm-center flex-column flex-md-row">
                                  <a href="#" target="_blank"><img class="img-fluid m-3 rounded" src="{{asset('front-assets/images/apple.png')}}" /></a>
                                  <a href="#" target="_blank"><img class="img-fluid m-3 rounded" src="{{asset('front-assets/images/googleplay.png')}}" /></a>
                              </div>
                            </div>
						</div>
					</div>
				</section>



	
@endsection