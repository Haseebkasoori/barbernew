@extends('layouts.front')

@section('content')

<div class="container-fluid searchbox ">

    <h1>You need help ?</h1>

    <div class="input-group mb-3 offset-md-3 col-12 col-md-6">
      <input type="text" class="form-control form-control-lg" placeholder="Find the answers to your questions ...">
      <div class="input-group-append">
          <button type="submit" class="btn btn-info" aria-labelledby="Rechercher"><span>Search</span></button>     

      </div>
  </div> 

</form>

</div>


<section class="faqs">
            <div class="container" >
    <div class="row" >

        <div class="col-lg-4  col-sm-12">

            <a class="" href="#">
                <div class="borders"> 
                    <h3>Billing</h3>
                    <p class="catagory" >Accounting, Bill histories etc.</p>
                    <p class="Articles"> 9 Articles</p>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-sm-12  "> 
            <a class="" href="#">
                <div class="borders"> 
                    <h3>Billing</h3>
                    <p class="catagory" >Accounting, Bill histories etc.</p>
                    <p class="Articles"> 9 Articles</p>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-sm-12  ">
            <a href="#">
                <div class="borders"> 
                    <h3>Space management</h3>
                    <p class="catagory">"Explanation of the headings of the management platform (mobile application and site)"</p>
                    <p class="Articles"> 7 Articles</p>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-sm-12  ">            <a href="#">
                <div class="borders"> 
                    <h3>Gestion des réservations</h3>
                    <p class="catagory" >Accounting, Bill histories etc.</p>
                    <p class="Articles"> 10 Articles</p>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-sm-12  ">
            <a href="#">
                <div class="borders"> 
                    <h3>Billing</h3>
                    <p class="catagory" >Accounting, Bill histories etc.</p>
                    <p class="Articles"> 9 Articles</p>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-sm-12  ">
            <a href="#"> 
                <div class="borders"> 
                    <h3>Billing</h3>
                    <p class="catagory" >Accounting, Bill histories etc.</p>
                    <p class="Articles"> 9 Articles</p>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-sm-12  ">
            <a href="#">
                <div class="borders"> 
                    <h3>Billing</h3>
                    <p class="catagory" >Accounting, Bill histories etc.</p>
                    <p class="Articles"> 9 Articles</p>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-sm-12  ">
            <a href="#">
                <div class="borders"> 
                    <h3>Billing</h3>
                    <p class="catagory">Accounting, Bill histories etc.</p>
                    <p class="Articles"> 9 Articles</p>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-sm-12  ">
            <a href="#"> 
                <div class="borders"> 
                    <h3>Billing</h3>
                    <p class="catagory ">Accounting, Bill histories etc.</p>
                    <p class="Articles"> 9 Articles</p>
                </div>
            </a>
        </div>

    </div>

    <div class="row">
        <div class="col">
            <p class="text-center pt-5 pb-3 copyright" ><font color="#9b9b9b">&copy; LeCiseau <?php  echo date('Y') ?>. Powered by <a href="#"><font color="#9b9b9b">Help Scout</font></a></font></p>
        </div>  
    </div>    
</div>

</section>

@endsection