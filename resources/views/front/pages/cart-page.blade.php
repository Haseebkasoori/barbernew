@extends('layouts.front')


@section('css')

<style>
    body{
        background:#ffffff;
    }
</style>
@endsection

@section('content')
    <section class="cart">
         <div class="container-fluid my-3">
        <div class="row">
            <div class="offset-lg-2 col-lg-5 offset-md-2 col-md-8 col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link rs-txt" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Customers ?</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active rs-txt" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Already Customer ?</a>
                    </li>
                  </ul>
      
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> 
                       <div class="container kj text-center">  
                        <form>
                           <div class="form-group fm pt-3"> 
                               <button class="btn btn-block btn-bg-color btn-lg"><i class="fa fa-facebook-official pr-2" aria-hidden="true"></i> Log in with Facebook</button> 
                               <div class="content text-muted d-flex justify-content-around align-items-center">
                                    <span class="or"><b> or </b></span>
                                </div>
                              <label for="exampleInputEmail1 " class="mt-4 rs-txt1">Email</label>
                              <input  type="email" class="form-control mb-2" id="exampleInputEmail1" placeholder="Email"aria-describedby="emailHelp">
                              <input type="password" class="form-control" id="exampleInputPassword1"placeholder="Password">
                          </div>
      
                           <div>
                              <a href="#" class="pl-3" style="float:left; font-size: 14px;">Forget your password</a>
                           </div>
      
                           <br>
      
                          <div class="form-check  " style="float: left; font-size: 12px;">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
                              <label class="form-check-label" for="defaultCheck2">
                              Remember me
                              </label>
                          </div><br>
      
                         <div class=" my-4 px-5">
                              <button class="btn btn-block btn1 btn-lg ">To log in</button>
                         </div>
                       </form>
                          
                      </div>
                    </div>       
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="container kj">
                          
                        <form>
                           <div class="form-group pt-3 text-center ">
                            <button class="btn btn-block btn-bg-color btn-lg"><i class="fa fa-facebook-official pr-2" aria-hidden="true"></i> Log in with Facebook</button>  
                            <div class="content text-muted d-flex justify-content-center align-items-center">
                                <span class="px-3"><b> or </b></span>
                            </div>
                          <label for="exampleInputEmail1" class="mt-4 rs-txt1">Enter your details</label>
                          <input type="name" class="form-control mt-1" id="exampleInputEmail1" placeholder="Last Name"aria-describedby="emailHelp">
                          <input type="name" class="form-control mt-1" id="exampleInputEmail1" placeholder="First Name"aria-describedby="emailHelp">
                          <input type="email" class="form-control mt-1" id="exampleInputEmail1" placeholder="Email"aria-describedby="emailHelp">
                          <input type="password" class="form-control mt-1" id="exampleInputPassword1"placeholder="Password">
                          <input type="phone" class="form-control mt-1" id="exampleInputEmail1" placeholder="Phone number. Ex:0611223344"aria-describedby="emailHelp">
                          </div>
      
                             <div class="pra">
                             <p class="pl-3"> A mobile phone number is essential to keep track of your reservation.</p>
                             </div>
      
                          
                            <div class="checkbox">
                              <label><input type="checkbox" value=""> 
                              I have read and accept <span class="ii">the</span>  LeCiseau  <span class="ii"> general conditions of use , the </span> LeCiseau <span class="ii">confidentiality</span> charter, as well as the general conditions of use of the payment provider Stripe
                              </label>
                            </div>
                            <div class="form-check mb-4" style="float: left; font-size: 15px;">
                               <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label lab"  for="defaultCheck2">
                                 I have read and accept <span class="ii">the</span>  LeCiseau  <span class="ii"> general conditions of use , the </span> LeCiseau <span class="ii">confidentiality</span> charter, as well as the general conditions of use of the payment provider Stripe
                                </label>
                            </div><br>
      
                            <div class="my-3 pb-3 px-5">
                                <button class="btn btn-block btn1 btn-lg ">To log in</button>
                           </div>
                        </form>
                          
                      </div>
                    </div>
                  </div>
            </div>
            <div class="offset-lg-1 col-lg-3 offset-md-2 col-md-8 col-12">
                <div class="container text-center">
                    <span class="lf-txt"><i class="fa fa-star bg-cus1" aria-hidden="true"></i><span class="pl-2">Trustpilot</span></span> <br>
                    <div class="my-2">
                        <span class=" py-1 px-2 bg-cus text-white"><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span class=" py-1 px-2 bg-cus text-white"><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span class=" py-1 px-2 bg-cus text-white"><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span class=" py-1 px-2 bg-cus text-white"><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span class=" py-1 px-2 bg-cus text-white"><i class="fa fa-star" aria-hidden="true"></i></span>
                    </div>
                    <span class="lf-txt1">TrustScore <b>4.6 | 11197 </b> avis</span>
                </div>
                <div class="border px-3 py-2">
                    <p  class="pt-4 lf-txt2 text-center"> Your reservation</p>
                    <div class="text-center"><span class="lf-txt3">with Tony</span></div>
                    <div class="text-center"><span class="lf-txt4">at the <b>Jean Claude Biguine</b> salon <b>- Vieux Port</b></span></div>
                    <hr>
                    <p class="pt-2 lf-txt5">Haircut and Care Package for Women - Short Hair</p>
                    <div class="d-flex align-items-center justify-content-between pb-1 lf-txt5">
                        <p>On <b>Thursday, August 27</b> at <b>10:00</b></p>
                        <p class="lf-txt6"><b>To cancel</b></p>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center justify-content-between lf-txt7">
                        <p><b>Subtotal:</b></p>
                        <p><del class="text-muted">55 €</del> 27.50 €</p>
                    </div>
                </div>
                <div class="border p-3 pb-1 ">
                    <div class="d-flex align-items-center justify-content-between lf-txt-8">
                        <p><img src="https://www.leciseau.fr/img/front/icn_garantie.svg" height="25px" class="pr-2"><span>Service charge</span></p> 
                        <p>€ 0.99</p>  
                    </div>
                    <span class="lf-txt-9"><i class="fa fa-check pr-1" aria-hidden="true"></i>Successful hairstyle guarantee</span><span class="lf-color"><i class="fa fa-info-circle px-1" aria-hidden="true"></i><span><b>New!</b></span></span><br>
                    <span class="lf-txt-9"><i class="fa fa-check pr-1" aria-hidden="true"></i>Confirmation SMS</span><br>
                    <span class="lf-txt-9"><i class="fa fa-check pr-1" aria-hidden="true"></i>Free modification and cancellation up to 24 hours before the appointment</span><br>
                </div>
                <div class="border p-3 lf-txt-10">
                    <div class="d-flex align-items-center justify-content-between">
                        <p><b>Total</b></p> 
                        <p>€ 28.49</p>  
                    </div> 
                </div>     
            </div>
        </div>    
    </div>
    </section>
   
@endsection