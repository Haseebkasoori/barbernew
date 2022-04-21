<!-- All CSS files must be attached here -->



<!DOCTYPE html>
<html>
<head>
	<title>Hair Dresser</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
	<link rel="stylesheet" href="{{asset('front-assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('front-assets/style.css')}}">

    @yield('css')

</head>
<body>
    <nav class="nav-color">
    	<div class="container">
    		<nav class="navbar navbar-expand-lg navbar-dark ">
                <a class="navbar-brand" href="/public/">
        			<img class="img-fluid d-none d-lg-block" src="{{asset('front-assets/images/logo.png')}}">
        		</a>
        		<a class="navbar-brand" href="/public/">
        			<img  class="img-fluid d-block d-lg-none" src="{{asset('front-assets/images/logo.png')}}">
        		</a>
                <button type="button" class="navbar-toggler"data-toggle="modal" data-target="#fullHeightModalRight">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse justify-content-end"  id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="register-page" class="nav-item nav-link">Register my Salon</a>
                        <a href="login" class="nav-item nav-link">Login</a>
                        <a href="faqs" class="nav-item nav-link">Need Help?</a>
                    </div>
        	    </div>
    		</nav>
    	</div>
    </nav>
    
    
    <!-- Full Height Modal Right -->
    <div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
      <div class="modal-dialog modal-full-height modal-right" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <ul class="navbar-nav  mt-2 mt-md-0 ml-auto">
    			<li class="nav-item ">
    				<a class="nav-link slib" href="register-page">Register my salon <i class="fa fa-angle-right ic" aria-hidden="true"></i></a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link slib" href="faqs">Need help? <i class="fa fa-angle-right ic" aria-hidden="true"></i></a>
    			</li>
    		</ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Full Height Modal Right -->

    @yield('content')

    <footer class="main_footer"> 
      <div class="container">
        <div class="row ">
          <div class="col-12 col-md-3" >
            <img src="{{asset('front-assets/images/logo.png')}}">
    
            <ul class=" footer_ul">
              <li>
                <a href="/about-us" > 
                  Who are we? 
                </a>
              </li>
              <li>
                <a href="#"> 
                  We are recruiting!
                </a>
              </li>
              <li>
                <a href="press"> 
                 In the press
                </a>
              </li>
               <li>
                <a href="legal-notice"> 
                 Legal Notice 	
               </a>
             </li>
           </ul>
         </div>
         <div class="col-12 col-md-4" >
          <ul class="footer_ul">
           <li> <h4>VAre you an individual </h4></li>
           <li> <a href="faqs">frequently asked Questions</a></li>
           <li> <a href="hair-guide">Hairdressing guide</a></li>
           <li> <a href="#">Terms</a></li>
           <li> <a href="#">Contact us</a></li>
           <li> <a href="salons-info">Our partner hair salons</a></li>
         </ul>
    
       </div>
       <div class="col-12 col-md-5" >
        <ul class="footer_ul"  >
    
         <li><h4>You are the manager of a hair salon</h4></li>
         <li><a href="#">Hairdressers' Blog</a></li>
         <li><a href="faqs">Need help ?</a></li>
         <li> 
         <a href="register-page" class="btn btn-default footer_btn">Register My salon</a>
         </li>
      </ul>
    </div>
    
    </div>
    </div>
    
    </footer>
    
    
    <!-- all js Files must be attached here -->
    




  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.0.js" ></script>
  <script src="{{asset('front-assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="{{asset('assets/custom.js')}}"></script>
  @yield('js')
</body>
</html>