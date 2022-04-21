
<nav class="nav-color">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="index.php">
			<img class="img-fluid d-none d-lg-block" src="./assets/images/logo.png">
		</a>
		<a class="navbar-brand" href="index.php">
			<img  class="img-fluid d-block d-lg-none" src="./assets/images/logo.png">
		</a>
        <button type="button" class="navbar-toggler"data-toggle="modal" data-target="#fullHeightModalRight">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end"  id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link">Register my Salon</a>
                <a href="#" class="nav-item nav-link">Need Help?</a>
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
				<a class="nav-link slib" href="register.php">Register my salon <i class="fa fa-angle-right ic" aria-hidden="true"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link slib" href="faqs.php">Need help? <i class="fa fa-angle-right ic" aria-hidden="true"></i></a>
			</li>
			
		</ul>
      </div>
     
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->