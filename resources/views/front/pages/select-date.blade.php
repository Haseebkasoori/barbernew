@extends('layouts.front')

@section('content')
@section('css')
<!-- evo-calendar.css, followed by [theme-name].css (optional) -->
       <link rel="stylesheet" href="{{asset('front-assets/plugins/event-calendar-evo/evo-calendar/css/evo-calendar.css')}}">
       <link rel="stylesheet" href="{{asset('front-assets/plugins/event-calendar-evo/evo-calendar/css/evo-calendar.royal-navy.css')}}">

    <style>
        body{
            background:#fff;
        }
        }
    </style>
@endsection

@section('content')



        <section class="select-date">
	         <!-- this is where your calendar goes.. :) -->
	        <div id="calendar"></div>

	         <!-- evo-calendar.js, right after jQuery (required) -->

        
	         	<div class="container">
	         		<div class="row">
	         			<div class="col-12 col-md-8 offset-md-2">
		         			<div class="daily-offer  d-flex justify-content-between align-items-center">
		         					<div class="col-sm-8 d-flex ">
		         						<div class="time-slot mx-2"><b>12:15</b></div>
		         						<div class="discount-percentage">-50%</div>
		         					</div>
		         					<div class="col-sm-4 d-flex align-items-center justify-content-between">
		         						<div class="price d-flex">
		         							<span><h6><s class="text-muted">27€</s></h6></span>
		         							<span><h6 class="text-dark">15€</h6></span>
		         						</div>
		         						<a  href="cart-page" class="btn choose-btn">Choose</a>
		         					</div>
		         			</div>
		         			<div class="daily-offer  d-flex justify-content-between align-items-center">
		         					<div class="col-sm-8 d-flex ">
		         						<div class="time-slot mx-2"><b>12:15</b></div>
		         						<div class="discount-percentage">-50%</div>
		         					</div>
		         					<div class="col-sm-4 d-flex align-items-center justify-content-between">
		         						<div class="price d-flex">
		         							<span><h6><s class="text-muted">27€</s></h6></span>
		         							<span><h6 class="text-dark">15€</h6></span>
		         						</div>
		         						<a  href="cart-page" class="btn choose-btn">Choose</a>
		         					</div>
		         			</div>
		         			<div class="daily-offer  d-flex justify-content-between align-items-center">
		         					<div class="col-sm-8 d-flex ">
		         						<div class="time-slot mx-2"><b>12:15</b></div>
		         						<div class="discount-percentage">-50%</div>
		         					</div>
		         					<div class="col-sm-4 d-flex align-items-center justify-content-between">
		         						<div class="price d-flex">
		         							<span><h6><s class="text-muted">27€</s></h6></span>
		         							<span><h6 class="text-dark">15€</h6></span>
		         						</div>
		         						<a  href="cart-page" class="btn choose-btn">Choose</a>
		         					</div>
		         			</div>
		         			<div class="daily-offer  d-flex justify-content-between align-items-center">
		         					<div class="col-sm-8 d-flex ">
		         						<div class="time-slot mx-2"><b>12:15</b></div>
		         						<div class="discount-percentage">-50%</div>
		         					</div>
		         					<div class="col-sm-4 d-flex align-items-center justify-content-between">
		         						<div class="price d-flex">
		         							<span><h6><s class="text-muted">27€</s></h6></span>
		         							<span><h6 class="text-dark">15€</h6></span>
		         						</div>
		         						<a  href="cart-page" class="btn choose-btn">Choose</a>
		         					</div>
		         			</div>
		         			<div class="daily-offer  d-flex justify-content-between align-items-center">
		         					<div class="col-sm-8 d-flex ">
		         						<div class="time-slot mx-2"><b>12:15</b></div>
		         						<div class="discount-percentage">-50%</div>
		         					</div>
		         					<div class="col-sm-4 d-flex align-items-center justify-content-between">
		         						<div class="price d-flex">
		         							<span><h6><s class="text-muted">27€</s></h6></span>
		         							<span><h6 class="text-dark">15€</h6></span>
		         						</div>
		         						<a  href="cart-page" class="btn choose-btn">Choose</a>
		         					</div>
		         			</div>
		         			<div class="daily-offer  d-flex justify-content-between align-items-center">
		         					<div class="col-sm-8 d-flex ">
		         						<div class="time-slot mx-2"><b>12:15</b></div>
		         						<div class="discount-percentage">-50%</div>
		         					</div>
		         					<div class="col-sm-4 d-flex align-items-center justify-content-between">
		         						<div class="price d-flex">
		         							<span><h6><s class="text-muted">27€</s></h6></span>
		         							<span><h6 class="text-dark">15€</h6></span>
		         						</div>
		         						<a  href="cart-page" class="btn choose-btn">Choose</a>
		         					</div>
		         			</div>
		         			<div class="daily-offer  d-flex justify-content-between align-items-center">
		         					<div class="col-sm-8 d-flex ">
		         						<div class="time-slot mx-2"><b>12:15</b></div>
		         						<div class="discount-percentage">-50%</div>
		         					</div>
		         					<div class="col-sm-4 d-flex align-items-center justify-content-between">
		         						<div class="price d-flex">
		         							<span><h6><s class="text-muted">27€</s></h6></span>
		         							<span><h6 class="text-dark">15€</h6></span>
		         						</div>
		         						<a  href="cart-page" class="btn choose-btn">Choose</a>
		         					</div>
		         			</div>
	         		</div>
	         	</div>
	         </div>
        	
        </section>


        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
 @section('js')
        <script src="{{asset('front-assets/plugins/event-calendar-evo/evo-calendar/js/evo-calendar.js')}}"></script>

        <script>
        // initialize your calendar, once the page's DOM is ready
        $(document).ready(function() {
            $('#calendar').evoCalendar({
                 theme: 'Royal Navy',
                 firstDayOfWeek: 1,
                 todayHighlight: true,
                 sidebarToggler: true,
                 eventDisplayDefault: false,
            })
        })
        </script>
        
@endsection

@endsection