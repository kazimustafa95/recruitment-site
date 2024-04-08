<!DOCTYPE html>

      <html lang="zxx" dir="ltr">
         
<head>
            <meta charset="utf-8" />
            <title>Tabula</title>
            <?php include 'container/links.php'; ?>
         </head>
         <body class="page-bg">
           <!-- preloader Start -->
           <?php include 'container/loader.php';?>
            <!-- preloader End -->
 <!-- header start -->

 <?php include 'container/header.php';?>
            <!-- header end -->
            <!-- banner section start start-->
            <div class="index1-listing-slider-wrapper float_left">
               <div class="container">
                  <div class="slider-text text-center">
                     <h4>Post Project</h4>
                     <ul>
                        <li>
                           <a href="javascript:;">Home</a>
                        </li>
                        <li>/ Post Project</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- banner section start end-->
            <!-- inner page -->

            <div class="inner-page-main-wrapper float_left">
               <div class="container">
                  <div class="home1-section-heading1">
                     <h6>Post Project</h6>
                     <h4>Tell Us What You Need Done</h4>
                  </div>
                  <div class="post-project-main-wrapper float_left">
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="post-form-wrapper float_left">
                              <form>
                                 <h4>Choose a name for your project</h4>
                                 <div class="form-group row">
                                    <div class="col-md-12 col-12">
                                       <label>Project Name</label>
                                       <input type="text" placeholder="Enter here project title...">
                                    </div>
                                 </div>
                                 <h4>Tell us more about your project</h4>
                                 <div class="form-group row">
                                    <div class="col-md-12 col-12">
                                       <label>Start With A Bit About Yourself Or Your Business, And Include An Overview Of What You Need Done.</label>
                                       <textarea rows="4" cols="50" placeholder="Describe your project here..."></textarea>
                                    </div> 
                                 </div> 
                                 <h4>Enter your budget of project</h4> 
                                 <div class="form-group budget_input_wrap">
                                     <div class="budget_input">
                                         <label>Min. price for Bid</label>
                                         <input name="min_price" class="require" placeholder="$ 8.00" type="text">
                                     </div>
                                     <div class="budget_input">
                                         <label>Max. price for Bid</label>
                                         <input name="max_price" class="require" placeholder="$ 40.00 " type="text">
                                     </div>
                                 </div>
                                 <h4>Attached File</h4>
                                 <div class="form-group row">
                                    <div class="col-md-12 col-12">
                                       <label>Upload any images or document that might be helpful in explaning your project brief here.</label>
                                       <input class="file-doc" type="file">
                                    </div> 
                                 </div> 
                              </form>
                              <a class="custom-btn" href="javascript:;"> <span>Post Project</span> </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
     


            <!-- footer section start -->
            <?php include 'container/footer.php';?>
            <!-- footer section end -->
            
            <?php include 'container/scripts.php';?>
            
         </body>
      
</html>