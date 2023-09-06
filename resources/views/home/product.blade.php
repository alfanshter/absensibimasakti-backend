@extends('layout.master')

@section('konten')

  

    <!-- jumbotron ------------------------------------------ -->
    <div class="bgourprod mb-4">
      </div>
      <div class="iklan">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <!-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            
          </div> -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/iklan/IK1.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/iklan/IK2.png" class="d-block" alt="...">
            </div>
           
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>






    <!-- our Product Content ------------------------------------------------- -->
    <div class="bgproduct" style="background-color: rgb(40, 19, 116);">
      <div class="container mb-4">
        <div class="p-5 mb-3  text-light rounded-3">
          <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold">Our Product</h1>
            <!-- <p class="fs-4">Lorem, ipsum dolor sit amet consectetur </p> -->
          
          </div>
        </div>
          
          <div class="row">
              <!-- zenith welder ------------------------------------------------- -->
              <div class="col-md-4 mb-4 mt-4">
                  <a href="#engine" style="text-decoration: none;">
                  <div class="card">
                      <img src="/assets/img/ourproduct/cover.jpg" width="200" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Welding Electrode</h5>
                        
                      </div>
                    </div>
                  </a> 
              </div>
              <!-- overlay --------------------------- -->
              <div class="overlay" id="engine">
                  <a href="#!" class="close">x close</a>
                  
                  <!-- slide overlayy -->
                  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                      
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/weld1.jpg"  class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>ZENITH TYPE 939</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/zenithwel2.jpg" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>ZENITH TYPE 930</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                        </div>
                        
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  
              </div>

              <!-- pump ------------------------------------------------------------------- -->
              <div class="col-md-4 mb-4 mt-4">
                  <a href="#pump" style="text-decoration: none;">
                  <div class="card">
                      <img src="/assets/img/ourproduct/Horizontalcentrifugalpumpswithmagnetic.jpg" width="200" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Pump</h5>
                        
                      </div>
                    </div>
                  </a> 
              </div>
              <!-- overlay --------------------------- -->
              <div class="overlay" id="pump">
                  <a href="#!" class="close">x close</a>
                  
                  <!-- slide overlayy -->
                  <div id="carouselExampleCaptions-pump" class="carousel slide" data-bs-ride="carousel">
                      
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/Horizontalcentrifugalpumpswithmagnetic.jpg"  class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>CENTRIFUGAL PUMPS WITH MAGNETIC DRIVE</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/Centrifugalsumppumps.jpg" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>Vertical Centrifugal sump pumps</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                        </div>


                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/Horizontalcentrifugalpumpwithmechanicalseal.jpg" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>Horizontal centrifugal pumps with mechanical seal</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                        </div>


                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/Volumetricselfprimingpumps.jpg" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>Volumetric self-priming pumps</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                        </div>
                        
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions-pump" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions-pump" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  
              </div>

              <!-- seal ---------------------------------------------------------------------- -->
              <div class="col-md-4 mb-4 mt-4">
                  <a href="#seal" style="text-decoration: none;">
                  <div class="card">
                      <img src="/assets/img/ourproduct/ring joints.jpg" width="200" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Seal And Gasket</h5>
                        
                      </div>
                    </div>
                  </a> 
              </div>
              <!-- overlay --------------------------- -->
              <div class="overlay" id="seal">
                  <a href="#!" class="close">x close</a>
                  
                  <!-- slide overlayy -->
                  <div id="carouselExampleCaptions-seal" class="carousel slide" data-bs-ride="carousel">
                      
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/corrugated metal gaskets.jpg"  class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>metallic & semi-metallic gaskets</h5>
                              <p>corrugated metal gaskets</p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/metal jacketed gaskets.jpg" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>metallic & semi-metallic gaskets</h5>
                              <p>metal jacketed gaskets</p>
                            </div>
                          </div>
                        </div>


                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/camprofile (grooved) gaskets.png" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>metallic & semi-metallic gaskets</h5>
                              <p>camprofile (grooved) gaskets</p>
                            </div>
                          </div>
                        </div>


                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/ring joints.jpg" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>metallic & semi-metallic gaskets</h5>
                              <p>ring joints</p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/spiral wound gaskets.jpg" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>metallic & semi-metallic gaskets</h5>
                              <p>spiral wound gaskets</p>
                            </div>
                          </div>
                        </div>
                          
                        
                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/fibre reinforced gaskets.jpg" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>non metallic gaskets</h5>
                              <p>fibre reinforced gaskets</p>
                            </div>
                          </div>
                        </div>

                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/graphite gaskets.jpg" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>non metallic gaskets</h5>
                              <p>graphite gaskets</p>
                            </div>
                          </div>
                        </div>

                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/PTFE gaskets.jpg" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>non metallic gaskets</h5>
                              <p>PTFE gaskets</p>
                            </div>
                          </div>
                        </div>

                        <div class="carousel-item">
                          <!-- gambar -->
                          <img src="/assets/img/ourproduct/rubber gaskets.jpg" class="d-block" alt="...">
                          <!-- captionnn -->
                          <div class="container mt-2">
                            <div class="caption-corsel text-light">
                              <h5>non metallic gaskets</h5>
                              <p>rubber gaskets</p>
                            </div>
                          </div>
                        </div>
                        
                      
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions-seal" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions-seal" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  
              </div>

              
          </div>
      </div>
    </div>







@endsection