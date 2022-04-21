@extends('layouts.front')

@section('content')
<section class="service">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-12 full">
                <div class="left-side">
                    <div class="left-side-pic">
                        <div class="container py-2 left-side-bg">
                            <button class=" button"><i class="fa fa-angle-left pr-3"></i>Return to results</button>
                            <p class="text-white left-side-head pt-3">Christopher - Excellent :9.5 / 10</p>
                            <div class="container left-side-body">
                                <div class="row text-white">
                                    <div class="col-1 text-center">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-9">
                                        <span> The living room : </span><span class="red-color">RED STUDIO</span>
                                    </div>
                                </div>
                                <div class="row text-white">
                                    <div class="col-1 text-center">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-9">
                                        <span> Address : </span><span class="red-color">3 Rue Neuve 69001 Lyon-1ER-Arrondissement 69001 Lyon-1ER-Arrondissement</span>
                                    </div>
                                </div>
                                <div class="row text-white">
                                    <div class="col-1 text-center">
                                        <i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-9">
                                        <span> 0.16 km from you </span>
                                    </div>
                                </div>
                                <div class="row text-white">
                                    <div class="col-1 text-center">
                                        <i class="fa fa-bus" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-9">
                                        <span> Metro: Hôtel de Ville - Louis Pradel (Lines A and C) </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordion">
                            <div class="card">
                              <div class="card-header headerCard" id="headingOne">
                                <h5 class="mb-0">
                                  <button class="space btn btn-link btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="row">
                                            <div class="col-6 text-left pl-1">
                                                <b class="red-color1">Important Information</b>
                                            </div>
                                            <div class="col-6 text-right pr-4 d-flex align-items-center justify-content-end">
                                                <b><i class="fa fa-angle-right fa-2x red-color1" aria-hidden="true"></i></b>
                                                <!--<b><i class="fa fa-angle-down fa-2x red-color1" aria-hidden="true"></i></b>-->
                                            </div>
                                        </div>
                                  </button>
                                </h5>
                              </div>
                          
                              <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body" style="font-size: 16px;">
                                  <div class="container">
                                    <p>- What is my hair length?</p>
                                    <p>
                                      • Short hair = Above the chin<br>
                                      • Medium length hair = Above the shoulders<br>
                                      • Long hair = Above the shoulder blades<br>
                                      • Very long hair = Below the shoulder blades<br>
                                    </p>
                                    <p>
                                      If you have very curly or thick hair , please choose a hair length longer than yours or very long hair (if this length is available in your package).<br>
                                      Indeed, the fixed prices are calculated according to the quantity of product as well as according to the time spent in the realization of your request.<br>
                                      If, during your appointment, you selected the wrong length or if your thickness is too great for the chosen package, a supplement may be applied directly in the salon, at the cost of the latter.<br>
                                    </p>
                                    <p>
                                      - Without specific details, the “coloring” price corresponds to the coloring of the roots (1 to 2 cm maximum regrowth).
                                    </p>
                                    <p>
                                      - Should I take a patina? A patina is strongly recommended after a highlight / sweep / tie & dye service, as soon as a discolored hair is lightened.
                                    </p>
                                    <p>
                                      Do you have doubts? <span class="red-color">Contact us</span> or consult our <span class="red-color">hairdressing dictionary</span> with definitions of services.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header headerCard" id="headingTwo">
                                <h5 class="mb-0">
                                  <button class="space btn btn-link btn-block collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row">
                                        <div class="col-6 text-left pl-1">
                                            <b class="red-color1">Notice</b>
                                        </div>
                                        <div class="col-6 text-right pr-4 d-flex align-items-center justify-content-end">
                                            <b><i class="fa fa-angle-right fa-2x red-color1" aria-hidden="true"></i></b>
                                            <!--<b><i class="fa fa-angle-down fa-2x red-color1" aria-hidden="true"></i></b>-->
                                        </div>
                                    </div>
                                  </button>
                                </h5>
                              </div>
                              <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body" style="font-size: 16px;">
                                    <div class="container">
                                        <div class="container pl-lg-5">
                                            <div class="row border-bottom">
                                                <div class="col-lg-2 col-md-2 col-4 part1 text-right d-flex align-items-center">
                                                    <p class="display-4 red-color1"><b>9.4</b></p>
                                                </div>
                                                <div class="col-lg-4 col-md-3 col-7 part2 text-left d-flex align-items-center">
                                                    <div>
                                                        <span class="red-color1"><b>/ 10: Excellent</b></span><br>
                                                        <span> 1489 reviews</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pl-lg-5 pt-5 section-text center">
                                                <div class="border-bottom pt-4 center">
                                                    <span><b>ILIÈS</b></span>
                                                    <p><span>7/10</span> - 2 weeks</p>
                                                    <p class="pb-4 section-text-1">Iliès did not leave a comment yet</p>
                                                </div>
                                                <div class="border-bottom pt-4 center">
                                                    <span><b>ILIÈS</b></span>
                                                    <p><span>7/10</span> - 2 weeks</p>
                                                    <p class="pb-4 section-text-1">Iliès did not leave a comment yet</p>
                                                </div>
                                                <div class="border-bottom pt-4 center">
                                                    <span><b>ILIÈS</b></span>
                                                    <p><span>7/10</span> - 2 weeks</p>
                                                    <p class="pb-4 section-text-1">Iliès did not leave a comment yet</p>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="text-center my-4">
                                            <button class="btn button-comments">See all comments</button>
                                        </div>     
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>   
            </div>
            <div class="col-lg-6 col-12">
                <div class="right-side">
                    <div class="container">
                        <div class="red-color right-side-text1 mb-4 pl-lg-3">
                            <i class="fa fa-scissors pr-4" aria-hidden="true"></i><span><b>Choose a service:</b></span>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-12 text-center">
                                <img src="https://www.leciseau.fr/img/front/icn_promo@1,5x.svg?v=220" height="25px">
                                <span class="pl-2"> Services with promotions only </span>  
                            </div>
                            <div class="col-lg-2 col-md-2 col-12 text-center">
                                <label class="switch text-center">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                  </label>  
                            </div>
                        </div>
                        
                    </div>
                    <div id="accordion mt-5">
                        <div class="card">
                          <div class="card-header headerCard" id="headingOne1">
                            <h5 class="mb-0">
                              <button class="space1 btn btn-link btn-block" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                    <div class="row">
                                        <div class="col-6 text-left pl-1">
                                            <b class="card-text1 red-color1">Men's cut</b><br>
                                            <span class="card-text2">2 service (s)</span>
                                        </div>
                                        <div class="col-6 text-right pr-4 d-flex align-items-center justify-content-end">
                                            <b><i class="fa fa-angle-right red-color2" aria-hidden="true"></i></b>
                                        </div>
                                    </div>
                              </button>
                            </h5>
                          </div>
                      
                          <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion">
                            <div class="card-body" style="font-size: 16px;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <span class="body-txt">Men's Haircut and Deep Care Package -</span><br>
                                            <span class="body-txt1">Shampoo / Care / Cut / Brushing</span>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-4 padding-extra d-flex align-items-center">
                                                        <img src="https://www.leciseau.fr/img/front/icn_promo@1,5x.svg?v=220" height="25px" class="img-fluid">
                                                        <span class="body-txt2"><del>31 € </del></span>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                     <div>
                                                        <span class="body-txt3"><b>From</b></span><br>
                                                        <span class="body-txt4">€ 21.7</span>
                                                     </div>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                        <a href="select-date" class="btn body-btn"><b>To Choose</b></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="mt-2 mb-4 ml-5 d-flex justify-content-center align-items-center">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i><span>&nbsp; 00:30</span>
                                    </div> 
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header headerCard" id="headingTwo2">
                            <h5 class="mb-0">
                              <button class="space1 btn btn-link btn-block collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                <div class="row">
                                    <div class="col-6 text-left pl-1">
                                        <b class="card-text1 red-color1">Notice</b><br>
                                        <span class="card-text2">2 service (s)</span>
                                    </div>
                                    <div class="col-6 text-right pr-4 d-flex align-items-center justify-content-end">
                                        <b><i class="fa fa-angle-right   red-color2" aria-hidden="true"></i></b>
                                    </div>
                                </div>
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo2" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body" style="font-size: 16px;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <span class="body-txt">Men's Haircut and Deep Care Package -</span><br>
                                            <span class="body-txt1">Shampoo / Care / Cut / Brushing</span>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-4 padding-extra d-flex align-items-center">
                                                        <img src="https://www.leciseau.fr/img/front/icn_promo@1,5x.svg?v=220" height="25px" class="img-fluid">
                                                        <span class="body-txt2"><del>31 € </del></span>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                     <div>
                                                        <span class="body-txt3"><b>From</b></span><br>
                                                        <span class="body-txt4">€ 21.7</span>
                                                     </div>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                        <a href="select-date" class="btn body-btn"><b>To Choose</b></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="mt-2 mb-4 ml-5 d-flex justify-content-center align-items-center">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i><span>&nbsp; 00:30</span>
                                    </div> 
                                </div>
                                <hr class="hr">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <span class="body-txt">Men's Haircut and Deep Care Package -</span><br>
                                            <span class="body-txt1">Shampoo / Care / Cut / Brushing</span>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-4 padding-extra d-flex align-items-center">
                                                        <img src="https://www.leciseau.fr/img/front/icn_promo@1,5x.svg?v=220" height="25px" class="img-fluid">
                                                        <span class="body-txt2"><del>31 € </del></span>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                     <div>
                                                        <span class="body-txt3"><b>From</b></span><br>
                                                        <span class="body-txt4">€ 21.7</span>
                                                     </div>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                        <a href="select-date" class="btn body-btn"><b>To Choose</b></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="mt-2 mb-4 ml-5 d-flex justify-content-center align-items-center">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i><span>&nbsp; 00:30</span>
                                    </div> 
                                </div>
                                <hr class="hr">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <span class="body-txt">Men's Haircut and Deep Care Package -</span><br>
                                            <span class="body-txt1">Shampoo / Care / Cut / Brushing</span>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-4 padding-extra d-flex align-items-center">
                                                        <img src="https://www.leciseau.fr/img/front/icn_promo@1,5x.svg?v=220" height="25px" class="img-fluid">
                                                        <span class="body-txt2"><del>31 € </del></span>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                     <div>
                                                        <span class="body-txt3"><b>From</b></span><br>
                                                        <span class="body-txt4">€ 21.7</span>
                                                     </div>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                        <a href="select-date" class="btn body-btn"><b>To Choose</b></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="mt-2 mb-4 ml-5 d-flex justify-content-center align-items-center">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i><span>&nbsp; 00:30</span>
                                    </div> 
                                </div>
                                <hr class="hr">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <span class="body-txt">Men's Haircut and Deep Care Package -</span><br>
                                            <span class="body-txt1">Shampoo / Care / Cut / Brushing</span>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-4 padding-extra d-flex align-items-center">
                                                        <img src="https://www.leciseau.fr/img/front/icn_promo@1,5x.svg?v=220" height="25px" class="img-fluid">
                                                        <span class="body-txt2"><del>31 € </del></span>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                     <div>
                                                        <span class="body-txt3"><b>From</b></span><br>
                                                        <span class="body-txt4">€ 21.7</span>
                                                     </div>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                        <a href="select-date" class="btn body-btn"><b>To Choose</b></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="mt-2 mb-4 ml-5 d-flex justify-content-center align-items-center">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i><span>&nbsp; 00:30</span>
                                    </div> 
                                </div>
                                <hr class="hr">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <span class="body-txt">Men's Haircut and Deep Care Package -</span><br>
                                            <span class="body-txt1">Shampoo / Care / Cut / Brushing</span>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-4 padding-extra d-flex align-items-center">
                                                        <img src="https://www.leciseau.fr/img/front/icn_promo@1,5x.svg?v=220" height="25px" class="img-fluid">
                                                        <span class="body-txt2"><del>31 € </del></span>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                     <div>
                                                        <span class="body-txt3"><b>From</b></span><br>
                                                        <span class="body-txt4">€ 21.7</span>
                                                     </div>   
                                                    </div>
                                                    <div class="col-4 padding-extra text-center d-flex align-items-center">
                                                        <a href="select-date" class="btn body-btn"><b>To Choose</b></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="mt-2 mb-4 ml-5 d-flex justify-content-center align-items-center">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i><span>&nbsp; 00:30</span>
                                    </div> 
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

</section>

@section('js')
<script>
$(document).ready(function(){
  $(".left-side #accordion .show").click(function(){
    $(".left-side #accordion .card-header .fa-angle-right").hide();
    $(".left-side #accordion .card-header .fa-angle-down").show();
  });
  
});
</script>

@endsection

@endsection