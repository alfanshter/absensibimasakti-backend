
@extends('layout.master')

@section('konten')

    
        <!-- jumbotron ------------------------------------------ -->
        <div class="bgcontact">
          
        </div>

        <div class="contactcap">
          <div class="p-5 mb-4 mt-5 rounded-3 text-light">
            <div class="container-fluid py-5 text-center">
              <h1 class="display-5 fw-bold">Contact Us</h1>
              <!-- <p class="fs-4">Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of construction, with a focus on dependability and construction and trade.</p> -->
             
            </div>
          </div>
        </div>

        <!-- get intouct COntent ------------------------------------------------------------ -->
        <div class="container mt-5">
          <h1>Get In touch</h1>

            <div class="row gx-5">
              
              <!-- Contact US FOrm -->
              <div class="col-md-7 mb-5">
                <form action="https://formsubmit.co/sales@bimasaktiluhur.com" method="POST">
                  
                  
                  <input type="hidden" name="_subject" value="New Email!">
                  <input type="hidden" name="_next" value="http://www.bimasaktiluhur.com/contact.html">
                  
                  <label for="subject">Enter Subject</label>
                  <select class="form-select" id="subject" aria-label="Default select example" name="subject">
                    <option selected class="text-muted">-------- select subject --------</option>
                    <option value="Service">Service</option>
                    <option value="Product">Product</option>
                    <option value="Maintenance">Maintenance</option>
                  </select>
                  <br>

                  <label for="company" class="form-label">Your company</label>
                  <input type="text" class="form-control" id="company" name="company" placeholder="Your Company....">
                  <br>
                  
                  <label for="namebox" class="form-label">Name</label>
                  <input type="text" class="form-control" id="namebox" name="name"  required placeholder="Your name....">
                  <br>
                  
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" name="email" required placeholder="Your Email....">
                  <br>

                  <label for="message" class="form-label">Your Message</label>
                  <textarea class="form-control" id="message" name="message" rows="3" required placeholder="Write Your Message..."></textarea>
                  <br>
                  <button type="submit" class="btn btn-primary">Send</button>
                
                </form>
              </div>

              
              <!-- MAPS And contact -->
              <div class="col-md-4">
                  <div class="bgmap">
                    <h3><i class="bi bi-house-door"></i> Head Office</h3>
                    <p>Krukah Timur Street. I No.3, Baratajaya, Kec. Gubeng, Surabaya,
                      East Java, Indonesia
                      60284</p>
                      
                      <div class="mapouter">
                        <div class="gmap_canvas">
                          <iframe width="500" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=001,%20Jl.%20Krukah%20Tim.%20I%20No.3,%20RW.09,%20Baratajaya,%20Gubeng,%20Surabaya%20City,%20East%20Java%2060284,%20Indonesia&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a>
                          <br>
                          <style>.mapouter{position:relative;text-align:right;height:200px;width:500px;}</style>
                          <style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:500px;}</style>
                        </div>
                      </div>
                      <br>
                    <h3>Phone Number</h3>
                      <p style="font-size: large;"> 
                          <i class="bi bi-telephone"></i>
                          <b>+62-31-504-1616</b>
                        <br> 
                          <i class="bi bi-whatsapp"></i>
                          <b>+62-12-377-8844</b>
                        <br>
                          <i class="bi bi-printer"></i>
                          <b>+62-31-501-7822</b>
                      </p>

                    <h3>Social Media</h3>
                      <p style="font-size: large;">
                        <i class="bi bi-envelope-fill"></i>
                        sales@bimasaktiluhur.com
                        <br>
                        <i class="bi bi-linkedin"></i></i>
                PT Bima Sakti Luhur
                      </p>
                  </div>
              </div>
            </div>

          
        </div>

        <!-- get in touch ------------------------------------------------------ -->

        
  @endsection