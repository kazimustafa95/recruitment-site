<!-- Side Panel -->
<script src="js/jquery-3.6.0.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/wow.js"></script>
            <script src="js/jquery.magnific-popup.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/contact_form.js"></script>
            <script src="js/custom.js"></script>
            <!-- custom js-->
            <!-- heart icon -->
            <script>
               $('.heart a').click( function(){
                if ( $(this).hasClass('current') ) {
                    $(this).removeClass('current');
                } else {
                    $('.top_icon span.current').removeClass('current');
                    $(this).addClass('current');    
                }
               });
            </script>
            <script>
                 $('#search_button').on("click", function(e) {
                  $('#search_open').slideToggle();
                  e.stopPropagation(); 
               });
               
               $(document).on("click", function(e){
                  if(!(e.target.closest('#search_open'))){  
                     $("#search_open").slideUp();        
                  }
                 });
            </script>
            <script>
                 $('#search_button1').on("click", function(e) {
                  $('#search_open1').slideToggle();
                  e.stopPropagation(); 
               });
               
               $(document).on("click", function(e){
                  if(!(e.target.closest('#search_open1'))){  
                     $("#search_open1").slideUp();        
                  }
                 });
            </script>