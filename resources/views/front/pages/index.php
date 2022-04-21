@extends('layouts.front')

@section('content')
<div class="section1"> 
  <div class="container"> 
    <div class="row"> 
      <div class="col">
        <div class="section1Text  d-none d-md-block"> 
          <h1 class="">Book a hairdresser up to -50%</h1>
        </div>
      </div>
      <div class="col">
        <div class="section1Box d-flex justify-content-center">
          <div class="card" style="width: 25rem;">
            <div class="card-body">
              <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                <li class="nav-item">

                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                    <i class="fa fa-map-o fa-3x"></i>
                    <h6>Around me</h6>
                  </a>
                </li>
                <li class="nav-item">

                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <i class="fa fa-home fa-3x"></i>
                    <h6>Name of the Show</h6>
                  </a>
                </li>

              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <h4 class="text-center"><b>Book the hairdresser</b></h4>
                  <form action="#" method="#">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Your city or postal code" aria-label="Username" aria-describedby="basic-addon1">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-send"></i></span>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i style="color:#29c5a9" class="fa fa-calendar-o"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Nom du salon" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i style="color:#29c5a9"  class="fa fa-scissors "></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Nom du salon" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <button type="submit" class="btn btn-default btn-block text-uppercase">see the hairdresser</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                 <form action="#" method="#">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fa fa-home fa-2x"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Name of the Show" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <button type="submit" class="btn btn-default btn-block">SEARCH</button>
                </form> 
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div> 
</div>  


<section class="section2"> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12 col-md-3">
        <p class="text1">
          <span style="font-size: 1.25rem;padding-right: 15px;">-50%</span>Promotions up to -50%</p>
      </div>

      <div class="col-12 col-md-4">
        <p class="text2">
          <span style="font-size: 1.25rem;padding-right: 15px;"><i class="fa fa-lock"></i></span>100% secure online payment</p> 
      </div>
     
      <div class="col-12 col-md-5"> 
        <p class="text3"><span style="font-size: 1.25rem;padding-right: 15px;">24h</span>Free cancellation up to 24 hours before the appointment
        </p>
      </div>
    </div>  
  </div>  
</section>

<section class="section3">

  <div class="container"> 
    <div class="row"> 
      <div class="col-12">
        <h3 class="text-center"><b>Or choose a city</b></h3> 
      </div>
    </div>  
  </div> 
  <div class="owl-carousel owl-theme">
    <div class="item">
      <img src="assets/images/slide1.webp">
    </div>  
    <div class="item">
      <img src="assets/images/slide2.webp">
    </div>  
    <div class="item">
      <img src="assets/images/slide3.webp">
    </div>  
    <div class="item">
      <img src="assets/images/slide4.webp">
    </div>  
    <div class="item">
      <img src="assets/images/slide5.webp">
    </div>  
    <div class="item">
      <img src="assets/images/slide8.webp">
    </div>  
    <div class="item">
      <img src="assets/images/slide9.webp">
    </div>  
    <div class="item">
      <img src="assets/images/slide10.webp">
    </div>
    
  </div>
</section>


<section class="section4">
  <div class="container" >
    <div class="box"> 
      <div class="row">
       <div class="col-12 col-lg-6 " >

         <div class="card_outer"> 
          <div class="card_body offset-2">

            <div class="card_ body_content d-flex justify-content-between">
              <div class="smallLogo"> 
                <img src="assets/images/smallLogo.png">
              </div>  
              <div class="price_div float-right">
                <h3 class="m-0" ><b>70€</b></h3 >
              </div>
            </div>
            <h5 style="width: 70%" class="d-flex align-items-end"><b> Your gift card to use in LeCiseau partner salons</b></h5>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6  right-div" >
        <h2>Offer a LeCiseau gift card!</h2>
        <p>Treat your loved ones with a gift card of the value of your choice!</p>

        <button class="btn btn-default right_div_button">Offer a gift card </button> 

      </div>

    </div>
  </div>

</div>    
</section>


<section class="section5 ">
  <div class="d-none d-lg-block big_screen"> 
    <div class="container">
      <div class="row text-center ">
        <div class="col-lg-6 col-md-12 col-sm-12 text">
          <p class="head">Hairdressing guide</p>
          <p><span class="txts">Cut , Color , Smooth ,</span>  discover our hairstyle guide for women. We will explain what each type of service consists of. Before booking an appointment, this guide will help you make the right choice to get a makeover with your eyes closed.</p>
          <a href="hair-guide.php" class="btn bn text-white">Discover</a>
        </div>
        <div class="col-md-6 col-12">
          <img src="assets/images/hairstyle-guide.webp" class="img-fluid girl_img">
        </div>
      </div>
    </div>
  </div>

  <div class="d-block d-lg-none small_screen ">
   <div class="container">
    <div class="row text-center ">
      <div class="col-12 text">
        <h4 class="text-center">Hairdressing guide</h4>
        <p><span class="txts">Cut , Color , Smooth ,</span>  discover our hairstyle guide for women. We will explain what each type of service consists of. Before booking an appointment, this guide will help you make the right choice to get a makeover with your eyes closed.</p>
        <center>  

          <button class="btn bn text-white">Discover</button>
        </center>
      </div>

    </div>
  </div>
</div>
</section>

<section class="section6_1 d-none d-md-block"> 

  <div class="container-fluid ">
    <div class="row text-center">
      <div class="col-12 col-sm-6">
        <img src="assets/images/application_mockup.png" class="img-fluid" height="auto" width="350" >
      </div>
      <div class=" col-12 col-sm-6 data text-white">
        <p class="head">Download our app</p>
        <h4><i class="fa fa-star txts"></i><i class="fa fa-star txts"></i><i class="fa fa-star txts"></i><i class="fa fa-star-half-o txts"></i><i class="fa fa-star-half-alt txts"></i> <span><b class="txts">4.5</b><b>/5</b></span></h4> 
        <p>Book more easily and take advantage of exclusive features by downloading the mobile application on  <span class="txts">iOs</span> or <span class="txts">Android</span></p>
        <span><img src="assets/images/app-store.png" class="img-fluid" height="auto" width="127px"></span>
        <span><img src="assets/images/google-play.png" class="img-fluid" height="auto" width="127px"></span>
      </div>
    </div>
  </div>
</section>
<section class="section6_2 d-block d-md-none"> 

  <div class="container-fluid ">
    <div class="row text-center">
      <div class="col-12 data text-white">
        <p class="head text-center">Download our app</p>
        <h4 class="text-center"><i class="fa fa-star txts"></i><i class="fa fa-star txts"></i><i class="fa fa-star txts"></i><i class="fa fa-star-half-o txts"></i><i class="fa fa-star-half-alt txts"></i> <span><b class="txts">4.5</b><b>/5</b></span></h4> 

        <center>
          <span><img src="assets/images/app-store.png" class="img-fluid" height="auto" width="127px"></span>
          <span><img src="assets/images/google-play.png" class="img-fluid" height="auto" width="127px"></span>

        </center>
      </div>
      <div class="col-12" style="padding: 25px 0 0 0">
        <img src="assets/images/application_mockup.png" class="img-fluid" height="auto" width="350" >
      </div>

    </div>
  </div>
</section>




<section class="section7_1 d-none d-md-block">
  <div class="container"> 
    <div class="row"> 
      <div class="col-6">
        <iframe width="100%" height="315"
        src="https://www.youtube.com/embed/tgbNymZ7vqY">
      </iframe> 
    </div>
    <div class="col-6"> 
      <div class="newsChannels">
        <h3 class="text-left">They talk about us :</h3>
        <div class="newsChannelsImg">

          <img src="assets/images/scroll1.jpg">
          <img src="assets/images/scroll2.png">
          <img src="assets/images/scroll3.png">
          <img src="assets/images/scroll4.jpg">
        </div>
      </div>

    </div>
  </div>  
</div>  
</section>
<section class="section7_2 d-block d-md-none"> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12"> 
        <h3 class="text-center">They talk about us :</h3>
        <div class="newsChannelsImg1">
          <img src="assets/images/scroll1.jpg">
          <img src="assets/images/scroll2.png">
          <img src="assets/images/scroll3.png">
          <img src="assets/images/scroll4.jpg">
        </div>
      </div>
      <div class="col-12">
        <iframe width="100%" height="315"
        src="https://www.youtube.com/embed/tgbNymZ7vqY">
      </iframe> 
    </div>
  </div>  
</div> 
</section>
@endsection

@section('js')
    <script>
     $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
          0:{
            items:1,
            nav:true
          },
          600:{
            items:3,
            nav:false
          },
          1000:{
            items:4,
            nav:true,
            loop:false
          }
        }
      })
    });
    </script>
@endsection
