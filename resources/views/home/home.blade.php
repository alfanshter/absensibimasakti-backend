@extends('layout.master')

@section('konten')
 <!-- coursel -------------------------------------------------------------------------- -->
 <div class="cor" style="margin-top: 94px; background-color: rgb(187, 187, 187);">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('assets/img/coursel/cor1.jpg')}}" class="d-block" style="width: 100%" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/coursel/cov1.jpg')}}" class="d-block" style="width: 100%;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/coursel/damm.png')}}" class="d-block" style="width: 100%;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/coursel/cov2.jpg')}}" class="d-block" style="width: 100%;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/coursel/war1.jpg')}}" class="d-block" style="width: 100%;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/coursel/HAS.png')}}" class="d-block" style="width: 100%;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/coursel/HAS2.png')}}" class="d-block" style="width: 100%;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/coursel/HAS3.png')}}" class="d-block" style="width: 100%;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/coursel/HAS4.png')}}" class="d-block" style="width: 100%;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/coursel/HAS5.png')}}" class="d-block" style="width: 100%;" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Endcoursel -------------------------------------------------------------------------- -->
    
    
      


    <!-- content -->
    <div class="bg mt-4" style="background-color: rgb(40, 19, 116); color: white;">
      <div class="container">
        
        <!-- START THE FEATURETTES -->

          <!-- <hr class="featurette-divider"> -->

          <div class="row align-items-center">
            <div class="col-md-7 mt-5">
              <h2 class="fw-bold">PT. BIMA SAKTI LUHUR</h2>
                <p class="lead">PT. BIMA SAKTI LUHUR is a contractor which focusing on civil construction, housing, hotel and resort, factory and other commercial building.
                  As newcomer in this business, <br> BIMA SAKTI has a vision become nationalwide contractor and always considering quality, human
                  resources development and also HSE (Health, Safety, and Environment) by applying an integrated standard of ISO 9001:2000 and OSHAS 19001.
                </p>
            </div>
            <div class="col-md-5 mt-5">
              <img src="{{asset('assets/maintance.jpg')}}"  class="rounded" style="width: 100%;" alt="">

            </div>
          </div>

          <hr class="featurette-divider">

          <!-- <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading">Oh yeah, its that good. <span class="text-muted">See for yourself.</span></h2>
              <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

            </div>
          </div>

          <hr class="featurette-divider"> -->

        <!-- /END THE FEATURETTES -->
           
      </div>
    </div>

    <div class="container">
        <h2 class="text-center mb-4">Our Customer</h2> <br>
            <img src="{{asset('assets/ourcustomer2.png')}}" width="100%" alt="">
    </div>
  
    <!-- end content ---------------------------------------->

@endsection