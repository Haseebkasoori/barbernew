@extends('layouts.front')

@section('content')

	<link rel="stylesheet" type="text/css" href="{{asset('front-assets/register-style.css')}}">



	<section class="register-header">
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 main-bg" >
					<div class="col-12 col-md-6 offset-md-2 overlayHead">
						<h1 class="main-heading mb-3 d-flex justify-content-sm-center justify-content-md-start ">The platform to find new customers and fill your appointment schedule</h1>
						<button class="btn main-btn float-left d-none d-md-block">REGISTER MY SHOW</button>

						<ul class="list-group d-block d-md-none">
							<li class="list-group-item"><i class="fa fa-check"></i>Cras justo odio</li>
							<li class="list-group-item"><i class="fa fa-check"></i>Dapibus ac facilisis in</li>
							<li class="list-group-item"><i class="fa fa-check"></i>Morbi leo risus</li>
						</ul>
					</div>		
				</div>
			</div>
		</div>
	</section>

	<section class="section2 d-none d-md-block"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-12 col-md-4">
					<p class=" text-center">
						<b> Without engagement</p></b>
					</div>

					<div class="col-12 col-md-4">
						<p class=" text-center">
							<b>Without subscription</p> </b>
						</div>

						<div class="col-12 col-md-4"> 
							<p class=" text-center">
								<b>No registration fees</b>
							</p>
						</div>
					</div>  
				</div>  
			</section>

			<section class="contact-info">

				<div class="container">
					<div class="row form">
						<div class="col-12">
							<h3>Are you <span style="color: #29C5A9;"> a hair salon manager?</span></h3>
						</div>
						<div class="col-12 col-md-6">
							<h5><span style="color: #29C5A9;"><b>Leave us your contact details,</b> </span><br/>
								<b>the LeCiseau team will call you back very quickly.</b></h5>
								<form method="post" action="{{ route('saloon-register') }}"> 
								 @csrf
									<div class="row">
										<div class="col-12 col-md-6">
											<input type="text" name="manager_name" class="form-control form-input" placeholder="Manager's Name">
										</div>
										<div class="col-12 col-md-6">
											<input type="text" name="name" class="form-control form-input" placeholder="Name of the Saloon">
										</div>
										<div class="col-12 col-md-6">
											<input type="email" name="email" class="form-control form-input" placeholder="E-mail Address">
										</div>
										<div class="col-12 col-md-6">
											<input type="password" name="password" class="form-control form-input" placeholder="Enter Password">
										</div>
										<div class="col-12 col-md-6">
											<input type="password" name="password_confirmation" class="form-control form-input" placeholder="Confirm Password">
										</div>
										<div class="col-12 col-md-6">
											<input type="text" name="city" class="form-control form-input" placeholder="City">
										</div>
										<div class="col-12 col-md-6">
											<input type="number" name="contact" class="form-control form-input" placeholder="Mobile Phone">
										</div>
										
										<div class="col-12 col-md-6">
											<input type="text" name="postal_code" class="form-control form-input" placeholder="Postal Code">
										</div>
										<div class="col-6 offset-3">
											<button type="submit"  class="btn btn-default call-back-btn btn-block mt-2">Register</button>
										</div>
									</div>
									<div class="col-12 mt-2">
										<div class="d-flex justify-content-center">
											<div class="phone-icon"><i class="fa fa-phone i-phone" ></i></div>

											<div class="call-us"><b>Or call us directly on <i style="color: #29C5A9;"> 01 84 80 04 40 </i></b><br/>
											(monthday to Saturday, 9:30 a.m. to 7 p.m.)</div>
										</div>

									</div>
								</form>
							</div>	
							<div class="col-12 col-md-6" style="text-align: left">
								<h5><b>For hair salons all over France:</b></h5>
								<ul class="list-group">
									<li class="list-group-item"><i class="fa fa-building icon"> </i><span> Big or small town</span>
									</li>
									<li class="list-group-item"><i class="fa fa-calendar-o icon"> </i><span> With or without an appointment</span>
									</li>
									<li class="list-group-item"><i class="fa fa-scissors icon"> </i><span> 1 or more hairdressers</span>
									</li>
									<li class="list-group-item"><i class="fa fa-pencil-square-o icon"> </i><span> Paper agenda or electronic agenda</span>
									</li>
									<li class="list-group-item"><i class="fa fa-user icon"> </i><span> Independent or franchisee</span>
									</li>
								</ul>

								<div style="font-size:18px" class="my-5"><b> Partner of </b><img src="{{asset('front-assets/images/register/icn_logo_unce@3x.png')}}" style="width: 64px;height: 24px;"></div>
								<div class="rec-size"><b> Recommended by over <font style="color: #29C5A9;">2,500</font> hair salons </b></div>
								<span class="rec-size"><b><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> &nbsp; <font style="color: #29C5A9;"> 4.5 /</font>5 * </b></span><br/>
								<span style="font-size:10px"><b> * Average of responses to the question "would you recommend LeCiseau to a friend who manages a hair salon?"</b></span><br/>


							</div>
						</div>
					</div>
				</section>



				<section class="new-customer">
					<div class="container">
						<div class="row text-sec">
							<div class="col-12 col-md-6">
								<div class="new-customer-left ">
									<h3>Find new customers</h3>
									<ul class="list-group list-group-horizontal">
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											The number 1 mobile application for online hairdressing reservations in France
										</li>
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											Several million euros of advertising investment each year to find new customers (TV, metro, bus, press, Internet)
										</li>
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											25 new customers per month on average brought by LeCiseau
										</li>
									</ul>
									<button class="btn sec-btn">Find New Customers</button>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<img src="{{asset('front-assets/images/register/img_application_mockup@2x.png')}}" height="auto" width="100%" class="img-fluid float-sm-none float-md-right ">
							</div>
						</div>
					</div>
				</section>

				<section class="appointment-schedule">
					<div class="container">
						<div class="row text-sec1">
							<div class="col-12 col-md-6">
								<img src="{{asset('front-assets/images/register/img_agenda@2x.png')}}" class="text-sec1-img">
							</div>
							<div class="col-12 col-md-6">
								<div class="text-sec-2">
									<h3 class="text-center text-md-left">Optimize your appointment schedule</h3>
									<ul class="list-group list-group-horizontal">
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											Adding slots available for booking in 3 clicks</
										</li>
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											Choose whether or not to offer promotion when you declare an available niche
										</li>
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											Free confirmation SMS and email for each new appointment</
										</li>
									</ul>
									
									<center>
										<button class="btn sec-btn">Complete My Agenda</button>
									</center>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="turnover">

					<div class="container">
						<div class="row text-sec1">
							<div class="col-lg-6">
								<div class="text-sec-3">
									<h3  class="text-center text-md-left">Increase your turnover</h3>
									<ul class="list-group list-group-horizontal">
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											1000 € of additional turnover per month for our partner salons
										</li>
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											Average basket of € 40 per online booking
										</li>
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											€ 15 additional sales on average per customer
										</li>
									</ul> 
									
									<button class="btn sec-btn">Increase My Turnover</button>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="{{asset('front-assets/images/register/img_chiffreaffaires@2x.png')}}" class="text-sec2-img">
							</div>
						</div>
					</div>
				</section>

				<section class="internet-visibility">
					<div class="container">
						<div class="row text-sec1">
							<div class="col-lg-6">
								<img src="{{asset('front-assets/images/register/img_visibilite@2x.png')}}" class="text-sec1-img">
							</div>
							<div class="col-lg-6">
								<div class="text-sec-2">
									<h3 class="text-center text-md-left">Develop your visibility on the Internet</h3>

									<ul class="list-group list-group-horizontal">
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											<span>A web page dedicated to your show with photos of the show and your achievements</span>
										</li>
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											<span>Certified hairdressers reviews visible on Google (average rating 8.9 / 10)</span>
										</li>
										<li class="list-group-item"><i class="fa fa-check-circle fa-color"></i>
											<span>Referencing on the only platform 100% dedicated to hairdressing in France</span>
										</li>
									</ul> 
									<button class="sec-btn">Reference My Show</button>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="how-it-work">
								<div class="container">
									<div class="row num-sec" >
										<div class="col-12">
											<h3> How It Works ? </h3>
										</div>
										<div class="col-12 col-md-4">
											<div class="num-sec-text">
												<img src="{{asset('front-assets/images/register/icn_n01@2x.png')}}" class="img-fluid mt-5 mb-3" width="40px" height="40px">
												<h5><b>	Adding availability</b></h5>
												<h6 class="text-center mt-3">You add slots available even at the last minute (from your computer, smartphone or tablet).</h6>
											</div>
										</div>
										<div class="col-12 col-md-4">
											<div class="num-sec-text">
												<img src="{{asset('front-assets/images/register/icn_n02@2x.png')}}" class="img-fluid mt-5 mb-3" width="40px" height="40px">
												<h5><b>	The customer reserves</b></h5>
												<h6 class="text-center mt-3">A client books and pays for the entire service online. You will receive a confirmation email and SMS.</h6>
											</div>
										</div>
										<div class="col-12 col-md-4">
											<div class="num-sec-text">
												<img src="{{asset('front-assets/images/register/icn_n03@2x.png')}}" class="img-fluid mt-5 mb-3" width="40px" height="40px">
												<h5><b>	And you style!</b></h5>
												<h6 class="text-center mt-3">You welcome the customer to the salon and perform the chosen service. You receive payment the evening of the appointment.</h6>
											</div>
										</div>
										<div class="col-12">
											<button class="btn sec-btn">Call Me Back </button>
										</div>
									</div>
								</div>
				</section>	

				<section class="advantages">
					<div class="container">
						<div class="row" style="border-bottom: 1px solid grey">
							<div class="col-12">

								<h3 class="adv-heading text-center mt-3"> LeCiseau advantages </h3><br/>
							</div>
							<div class="col-12 col-md-6">
								<ul class="list-group">
									<li class="list-group-item"><img src="{{asset('front-assets/images/register/icn_bullet_green@2x.png')}}" height="15px" width="15px"> Available on computer, tablet and smartphone (iOS and Android)</li>
									<li class="list-group-item"><img src="{{asset('front-assets/images/register/icn_bullet_green@2x.png')}}" height="15px" width="15px"> Can be used with a paper or electronic agenda</li>
									<li class="list-group-item"><img src="{{asset('front-assets/images/register/icn_bullet_green@2x.png')}}" height="15px" width="15px"> Simple and quick training in 5 minutes</li>
									<li class="list-group-item"><img src="{{asset('front-assets/images/register/icn_bullet_green@2x.png')}}" height="15px" width="15px"> Compatible with your checkout software</li>
									<li class="list-group-item"><img src="{{asset('front-assets/images/register/icn_bullet_green@2x.png')}}" height="15px" width="15px"> Registration within 24 hours</li>
								</ul>
							</div>
							<div class="col-12 col-md-6">
								<ul  class="list-group">
									<li class="list-group-item"><img src="{{asset('front-assets/images/register/icn_bullet_green@2x.png')}}" height="15px" width="15px"> A personalized digital showcase (photos of salons, hairdressers, projects)</li>
									<li class="list-group-item"><img src="{{asset('front-assets/images/register/icn_bullet_green@2x.png')}}" height="15px" width="15px"> Free appointment confirmation SMS</li>
									<li class="list-group-item"><img src="{{asset('front-assets/images/register/icn_bullet_green@2x.png')}}" height="15px" width="15px"> Customer reviews with possibility of response</li>
									<li class="list-group-item"><img src="{{asset('front-assets/images/register/icn_bullet_green@2x.png')}}" height="15px" width="15px"> Customer service 6 days a week</li>
									<li class="list-group-item"><img src="{{asset('front-assets/images/register/icn_bullet_green@2x.png')}}" height="15px" width="15px"> Payment summaries and invoices available online</li>
								</ul>
								<br/>
							</div>
						</div>
					</div>
				</section>

				<section class="testimonials">
								<div class="container">
									<div class="row iframe com-back">
										<div class="col-12">
											<br/><br/>
											<h1 style="text-align: center;">Our testimonials</h1>
											<br/>
										</div>
										<div class="col-12 col-md-6">
											<div class="embed-responsive embed-responsive-16by9">
												<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY" style="border-radius: 5px"></iframe>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="embed-responsive embed-responsive-16by9">
												<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY" style="border-radius: 5px"></iframe>
											</div>
										</div>
									</div>
								</div>
				</section>

				<section class="press-talk">
								<div class="container">
									<div class="row press com-back">
										<div class="col-12">
											<h3 class="text-center"><b>The press talks about us</b></h3>
										</div>
										<div class="col-12 ">
											<div class="press-pic">
												<div class="row">
													<div  class="col-sm-12 d-flex justify-content-center flex-row ">
														<ul class="list-group  list-group-horizontal flex-row d-none d-md-block py-2">
															<li class="list-group-item"><img src="{{asset('front-assets/images/register/biblond.png')}}" height="auto"  width="100px"></li>
															<li class="list-group-item"><img src="{{asset('front-assets/images/register/coiffuredeparis.png')}}" height="auto"  width="100px"></li>
															<li class="list-group-item"><img src="{{asset('front-assets/images/register/leclaireur.png')}}"  height="auto" width="100px"></li>
														</ul>
													</div>
													<div class="col-sm-3 col-md-12">
														<div class="row press-icons">
															<div class="col-4 col-md-1 d-none d-md-block"></div>
															<div class="col-4 col-md-1 d-block d-md-none"><img src="{{asset('front-assets/images/register/biblond.png')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1 d-block d-md-none"><img src="{{asset('front-assets/images/register/coiffuredeparis.png')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1 d-block d-md-none"><img src="{{asset('front-assets/images/register/leclaireur.png')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1"><img src="{{asset('front-assets/images/register/m6.png')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1"><img src="{{asset('front-assets/images/register/francebleu.png')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1"><img src="{{asset('front-assets/images/register/bfmtv.png')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1"><img src="{{asset('front-assets/images/register/europe1.png')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1"><img src="{{asset('front-assets/images/register/tf1Color.png')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1"><img src="{{asset('front-assets/images/register/20minutes.png')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1"><img src="{{asset('front-assets/images/register/France_Inter_logo.png')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1"><img src="{{asset('front-assets/images/register/sudradio.jpg')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1"><img src="{{asset('front-assets/images/register/France_2_logo.png')}}" height="auto" width="40px"></div>
															<div class="col-4 col-md-1"></div>

														</div>
													</div>
												</div>
											</div>

										</div>
										<div class="col-6 col-md-2 press-pic-img">
											<div class="press-pic-inner">
												<img src="{{asset('front-assets/images/register/Femme_actuelle_logo.png')}}" width="100%" height="100%" class="press-pic-img">
											</div>
										</div>
										<div class="col-6 col-md-2 press-pic-img">
											<div class="press-pic-inner">
												<img src="{{asset('front-assets/images/register/Capital_logo.png')}}" width="100%" class="press-pic-img">
											</div>
										</div>
										<div class="col-6 col-md-2 press-pic-img">
											<div class="press-pic-inner">
												<img src="{{asset('front-assets/images/register/Madame_Figaro_Logo.png')}}" width="100%" class="press-pic-img">
											</div>
										</div>
										<div class="col-6 col-md-2 press-pic-img">
											<div class="press-pic-inner">
												<img src="{{asset('front-assets/images/register/Le_Bonbon_Logo.png')}}" width="70%" height="100%" class="press-pic-img">
											</div>
										</div>
										<div class="col-6 col-md-2 press-pic-img">
											<div class="press-pic-inner">
												<img src="{{asset('front-assets/images/register/Ouest_France_Logo.png')}}" width="100%" class="press-pic-img">
											</div>
										</div>
										<div class="col-6 col-md-2 press-pic-img">
											<div class="press-pic-inner">
												<img src="{{asset('front-assets/images/register/ccmColor.png')}}" width="70%" height="100%" class="press-pic-img">
											</div>
										</div>
									</div>
								</div>
				</section>

				<section class="register-faq">
								<div class="container">
									<div class="row">
										<div class="col-12  col-md-10 offset-md-1">
											<h4 class="text-center">frequently asked Questions</h4>

											<h6 class="text-center my-4">You have "business" questions about using LeCiseau in your living room</h6>

											<div id="accordion ">
												<div class="card">
													<div class="card-header">
														<a class="card-link collapse-col" data-toggle="collapse" href="#collapseOne">
															How to choose between slots at -50%, -30% and without promotion?
														</a>
													</div>
													<div id="collapseOne" class="collapse show" data-parent="#accordion">
														<div class="card-body">
															At LeCiseau, you choose the promotion level when you declare an available niche. You develop your own strategy, depending on how full your agenda is. You can also change the promotion level if you see that there are not enough reservations.
															Here is how we advise you to choose them:
															Offer -50%: if you want to ensure an appointment at a niche on which you generally have no customers.
															Suggest -30%: if you feel that this hourly period is calm and needs to be energized.
															Without promotion: if you want to save time and offer your customers to book online. It's less time spent on the phone and more time spent with your customers in the salon
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header">
														<a class="collapsed card-link collapse-col" data-toggle="collapse" href="#collapseTwo">
															When do I get paid?
														</a>
													</div>
													<div id="collapseTwo" class="collapse" data-parent="#accordion">
														<div class="card-body">

															You are paid the evening of the appointment and you receive an invoice for the commissions charged at the end of each month.

															LeCiseau.fr customers pay the full price of the service online. It is a way to ensure that customers come to the appointment and to avoid the no-show, too frequent in the case of an online reservation without payment. Each time you book, you will receive a confirmation text and email.
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header">
														<a class="collapsed card-link collapse-col" data-toggle="collapse" href="#collapseThree">
															How can I use LeCiseau when operating without an appointment?
														</a>
													</div>
													<div id="collapseThree" class="collapse" data-parent="#accordion">
														<div class="card-body">
															We are already working with many salons that work exclusively on a walk-in basis and the results are good. Being without an appointment can also imply having quieter time slots, and wanting to bring a flow of customers to them. Also note, no risk of no-show with us: the customer pays in advance and therefore agrees to come.
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header">
														<a class="collapsed card-link collapse-col" data-toggle="collapse" href="#collapseFour">
															Who can I contact at LeCiseau?
														</a>
													</div>
													<div id="collapseFour" class="collapse" data-parent="#accordion">
														<div class="card-body">
															LeCiseau.fr is a French company with 30 employees. When you register on the platform, you have a direct contact (the person who registered you) and the partner service contact available 6/7 from 9:30 am to 7:00 pm (01 84 80 04 40).
														</div>
													</div>
												</div>
											</div>

											<center class="my-5">
												<h6 class="text-center"><b>If you have any other questions, please consult our <a href="" style="color: #29C5A9;">Help section</a></b></h6>
												<h6 class="text-center"><b>If you have not found the answer to your question or if you are already a partner, please do not hesitate to</b></h6>
												<h6 class="text-center"><b>contact us on 01.84.80.04.40 or on the Contact Us page</b></h6>
											</center>
										</div>
									</div>
								</div>
				</section>
@endsection