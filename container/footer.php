<div class="footer-main-wrapper footer-main3">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="sb-footer-section">
               <div class="footer-logo">
                  <a href="index"><img src="images/index1-logo.png" alt=""></a>
               </div>
               <p>LMNP is devoted to establishing your authority in the Canadian job market. Contact us today for a
                  smooth integration into the thriving professional landscape.</p>
               <ul>

                  <li><a href="mailto:<?php echo $web_email; ?>"><i class="fas fa-envelope"></i>
                        <?php echo $web_email; ?>
                     </a>
                  </li>
                  <li>
                     <h4>
                        <?php echo $web_num; ?>
                     </h4>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="links">
               <h4>Service</h4>
               <ul>
                  <li><a href="index"><i class="fas fa-angle-right"></i>Home</a></li>
                  <li><a href="employer"><i class="fas fa-angle-right"></i>Employers</a></li>
                  <li><a href="find-jobs"><i class="fas fa-angle-right"></i>Find Jobs</a></li>
                  <li><a href="post-jobs"><i class="fas fa-angle-right"></i>Post a Job</a></li>

               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="links">
               <h4>Our Company</h4>
               <ul>
                  <li><a href="about"><i class="fas fa-angle-right"></i>About Us</a></li>
                  <li><a href="terms-service"><i class="fas fa-angle-right"></i>Terms of Service</a></li>
                  <li><a href="privacy_policy"><i class="fas fa-angle-right"></i>Privacy Policy</a></li>
                  <li><a href="contact-us"><i class="fas fa-angle-right"></i>Contact</a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="links">
               <h4>News Letter</h4>
               <p>Wants to get latest updates! Sign up a for free, get started with store.</p>

               <div class="input-box ps-rel">
                  <form method="POST" action="container/newsletter">
                  <input type="text" id="ipAddress" name="ipAddress" readonly hidden>
                           <input type="text" id="country" name="country" readonly hidden>
                     <input type="email" class="form-control" placeholder="Your email*" name="email" required
                        autocomplete="on">
                        <button class="btn" type="submit" name="form">subcribe</button>
                     <div id="validator-newsletter" class="form-result"></div>
                  </form>

               </div>

            </div>
         </div>
      </div>
   </div>
   <div class="bottom-footer float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <p>© Copyright - 2024 LMNP Recruitment | All Rights Reserved.</p>
            </div>

         </div>
      </div>
   </div>
</div>
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