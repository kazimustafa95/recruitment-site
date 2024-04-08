   <!DOCTYPE html>

   <html lang="zxx" dir="ltr">

   <head>
      <meta charset="utf-8" />
      <title>Tabula</title>
      

      <style>
         .index1-listing-slider-wrapper {
            background-image: url(./images/home/contact-banner.jpg) !important;
         }

      

         @media only screen and (min-width: 600px) {
            .contact-icon{
            left: 135px !important;
         }




   }

   @media only screen and (max-width: 600px) {
      .contact-input{
            padding-bottom: 2em !important;
         }
   }

      </style>

<?php include 'container/links.php'; ?>

   </head>

   <body class="page-bg">
      <!-- preloader Start -->
      <?php include 'container/loader.php'; ?>
      <!-- preloader End -->
      <!-- header start -->

      <?php include 'container/header.php'; ?>
      <!-- header end -->

      <!-- banner section start start-->
      <div class="index1-listing-slider-wrapper float_left">
         <div class="container">
            <div class="slider-text text-center">
               <h4>Contact Us</h4>
               <ul>
                  <li>
                     <a href="./">Home</a>
                  </li>
                  <li>/ Contact Us</li>
               </ul>
            </div>
         </div>
      </div>
      <!-- banner section start end-->
      <!-- inner page -->

      <div class="inner-page-main-wrapper float_left">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="contact-main-wrapper float_left">
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                           <div class="contact-box float_left" style="height: 260px;">
                              <div class="contact-icon">
                                 <a href="javascript:;"> <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                 </a>
                              </div>
                              <h4>Address</h4>
                              <p>
                                 <?php echo $web_add ?>
                              </p>

                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                           <div class="contact-box float_left" style="height: 260px;">
                              <div class="contact-icon">
                                 <a href="javascript:;"> <span><i class="fa fa-phone" aria-hidden="true"></i></span> </a>
                              </div>
                              <h4>Phone</h4>
                              <p>
                                 <?php echo $web_num ?>
                              </p>

                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                           <div class="contact-box float_left" style="height: 260px;">
                              <div class="contact-icon">
                                 <a href="javascript:;"> <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                 </a>
                              </div>
                              <h4>Email</h4>
                              <p>
                                 <?php echo $web_email ?>
                              </p>

                           </div>
                        </div>

                     </div>
                  </div>
                  <!--  -->
                  <div class="locate-main-wrapper float_left">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                           <img src="images/home/contact-2.jpg" alt="img" class="img-responsive">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                           <div class="leave-form float_left">
                              <h4>Leave A Message</h4>
                              <form action="contact-us-form" method="post">   
                                 <div class="form-group row">
                                  <input type="text" id="ipAddress" name="ipAddress" readonly hidden>
                                  <input type="text" id="country" name="country" readonly hidden>
                                    <div class="col-md-12 col-lg-6 contact-input">
                                       <input type="text" id="name" class="form-control require" name="first_name" required=""
                                          placeholder="Full Name">
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                       <input type="email" id="email" class="form-control require" name="email" required=""
                                          data-valid="email" data-error="Email should be valid."
                                          placeholder="Email Address">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <div class="col-md-12 col-lg-6 contact-input" >
                                       <input type="text" id="phone_number" class="form-control require" name="phone" 
                                          placeholder="Mobile no.">
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                       <input type="text"  id="msg_subject" class="form-control require" name="subject"
                                          placeholder="Subject">
                                    </div>
                                 </div>
                              
                                 <div class="form-group row">
                                    <div class="col-md-12 col-12">
                                    <textarea name="message" placeholder="Write your message..."   class="form-control require" id="message" cols="30" rows="8" required data-error="Write your message" style="background: #fff;
      border: 1px solid #fff;
      padding: 30px 30px;
      border-radius: 30px;
      ackground: #fff;
      border: 1px solid #fff;
      padding: 0px 30px;
      border-radius: 30px;
   }
   }"></textarea>
                                    </div>
                                 </div>
                                 <button type= "submit" class="submitForm custom-btn"> <span>Send Now</span> </button>
                                
                                 <div class="clearfix"></div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>





      <!-- footer section start -->
      <?php include 'container/footer.php'; ?>
      <!-- footer section end -->
      <!-- Side script -->
      <?php include 'container/scripts.php'; ?>
      <!-- Side script End -->

      
      <script>
            window.addEventListener('load', function () {
              // Get user's location based on IP address using ipinfo.io API
              fetch('https://ipinfo.io?token=885c0059793c07')
                .then(response => response.json())
                .then(data => {
                  // Populate form fields with location information
                  document.getElementById('ipAddress').value = data.ip || 'N/A';
                  document.getElementById('country').value = data.country || 'N/A';
                })
                .catch(error => console.error('Error fetching location:', error));
            });
    </script>

   </body>

   </html>