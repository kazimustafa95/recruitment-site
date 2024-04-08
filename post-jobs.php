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
                     <h4>Post Job</h4>
                     <ul>
                        <li>
                           <a href="javascript:;">Home</a>
                        </li>
                        <li>/ Post Job</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- banner section start end-->
            <!-- inner page -->

            <div class="inner-page-main-wrapper float_left">
               <div class="container">
                  <div class="home1-section-heading1">
                     <h6>Post Job</h6>
                     <h4>New Job Offer</h4>
                  </div>
                  <div class="post-project-main-wrapper float_left">
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="post-form-wrapper float_left">
                           <form action="process-job.php" method="post">
   <div class="form-group row">
      <div class="col-md-6 col-12">
         <label>Job title</label>
         <input type="text" name="job_title" placeholder="Add title" required>
      </div>
      <div class="col-md-6 col-12">
         <label>Location</label>
         <input type="text" name="location" placeholder="E.g. San Francisco, CA" required>
      </div>
   </div>

   <div class="form-group row">
      <div class="col-md-6 col-12">
         <label>Date Posted</label>
         <input type="date" name="date_posted" required>
      </div>
      <div class="col-md-6 col-12">
         <label>Expiration date</label>
         <input type="date" name="expiration_date" required>
      </div>
   </div>

   <div class="form-group row">
      <div class="col-md-6 col-12">
         <label>Experience</label>
         <input class="require" name="experience" placeholder="E.g. Minimum 3 years" type="text" required>
      </div>
      <div class="col-md-6 col-12">
         <label>Career level</label>
         <div class="select-field">
            <select name="career_level" required>
               <option selected="selected" value="">No Experience</option>
               <option value="Entry-Level">Entry-Level</option>
               <option value="Mid-Level">Mid-Level </option>
               <option value="Senior-Level">Senior-Level </option>
               <option value="Manager / Executive">Manager / Executive</option>
            </select>
         </div>
      </div>
   </div>

   <div class="form-group row">
      <div class="col-md-6 col-12">
         <label>Category</label>
         <div class="select-field">
            <select name="category" required>
               <option selected="selected" value="">Select Category</option>
               <option value="Marketing & Communication">Marketing & Communication</option>
               <option value="Software Engineering">Software Engineering</option>
               <option value="Project Management">Project Management </option>
               <option value="Finance">Finance </option>
            </select>
         </div>
      </div> 
      <div class="col-md-6 col-12">
         <label>Gender</label>
         <div class="select-field">
            <select name="gender" required>
               <option selected="selected" value="">Gender</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Both">Both</option>
            </select>
         </div>
      </div> 
   </div> 
   
   <div class="form-group row">
      <div class="col-md-6 col-12">
         <label>Employment type</label>
         <div class="select-field">
            <select name="employment_type" required>
               <option selected="selected" value="">Full Time</option>
               <option value="Entry-Level">Entry-Level</option>
               <option value="Mid-Level">Mid-Level </option>
               <option value="Senior-Level">Senior-Level </option>
               <option value="Manager / Executive">Manager / Executive</option>
            </select>
         </div>
      </div> 
      <div class="col-md-6 col-12">
         <label>Salary range</label>
         <div class="select-field">
            <select name="salary_range" required>
               <option selected="selected" value="">Select Range</option>
               <option value="1000 - $1200 ">$1000 - $1200 </option>
               <option value="$1200 - $1400">$1200 - $1400 </option>
               <option value="$1500 - $1800">$1500 - $1800</option>
               <option value="$2000 - $3000">$2000 - $3000</option>
            </select>
         </div>
      </div> 
   </div> 
   <div class="form-group row">
      <div class="col-md-12 col-12">
         <label>Job description</label>
         <textarea rows="4" cols="50" name="job_description" placeholder="Describe your project here..." required></textarea>
      </div>
   </div>

   <button type="submit" class="custom-btn"> <span>Publish Job</span> </button>
</form>

                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
       



            <!-- footer section start -->
            <?php include 'container/footer.php';?>
            <!-- footer section end -->
            <!-- js files-->
            <?php include 'container/scripts.php';?>


            
            
         </body>
      
</html>