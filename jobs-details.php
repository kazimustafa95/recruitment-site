<?php 


$id = $_GET['id'];
include("container/database.php");
$sql = "SELECT * FROM `data` WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);{


}

?>


<!DOCTYPE html>

      <html lang="zxx" dir="ltr">
         
<head>
            <?php include 'container/links.php'; ?>
         </head>
         <body class="page-bg">
             <!-- #region -->
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
                     <h4><?php echo $row['title']; ?></h4>
                     <ul>
                        <li>
                           <a href="javascript:;">Home</a>
                        </li>
                        <li>/ <?php echo $row['title']; ?></li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- banner section start end-->
            <!-- inner page -->
                  
            <div class="inner-page-main-wrapper float_left">
               <div class="container">
               <div class="home1-section-heading1">
                     <h6>Jobs Details</h6>
                     <h4>Fill Your Information</h4>
                  </div>
                  <div class="row">
                     <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                     <div class="inner-page-main-wrapper float_left">
               <div class="container">

                  
                  <div class="post-project-main-wrapper float_left">
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="post-form-wrapper float_left">
                              <form action="apply-job" method="POST" enctype='multipart/form-data'>

                                 <h4>Candidate Information</h4>
                                 <div class="form-group row">
                                 <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                 <input type="hidden" name="salary" value="<?php echo $row['salary'] ?>">
                                 <input type="hidden" name="location" value="<?php echo $row['location'] ?>">
                                 <input type="hidden" name="title" value="<?php echo $row['title'] ?>">
                                  <input type="hidden" name="category" value="<?php echo $row['category'] ?>">
                                    <div class="col-md-12 col-12" >
                                       <label>First Name</label>
                                       <input type="text" placeholder="Enter here First Name... " name="f_name" required>
                                    </div>
                                    <div class="col-md-12 col-12" >
                                       <label>Last Name</label>
                                       <input type="text" placeholder="Enter here Last Name..." name="l_name" required>
                                    </div>
                                 </div>
                                 <div class="form-group budget_input_wrap">
                                     <div class="budget_input">
                                         <label>Phone Number</label>
                                         <input class="require" placeholder="Enter here Phone Number" type="text" name="p_number" required>
                                     </div>
                                     <div class="budget_input">
                                         <label>Email</label>
                                         <input  class="require" placeholder="Enter here Email " type="email" name="email" required>
                                     </div>
                                 </div>
                                 <h4>Cover Letter</h4>
                                 <div class="form-group row">
                                    <div class="col-md-12 col-12">
                                       <label>Start With A Bit About Yourself Or Your Position, And Include An Overview Of your Experience for this job.</label>
                                       <textarea rows="4" cols="50" placeholder="Cover Letter..." name="cover" required></textarea>
                                    </div> 
                                 </div> 

                                 <h4>Attached Resume</h4>
                                 <div class="form-group row">
                                    <div class="col-md-12 col-12">
                                       <label>Upload your updated Resume or CV that will be helpful in explaning your Experience  here.</label>
                                       <input class="file-doc" type="file" name="resume" required accept=".pdf" required>
                                    </div> 
                                 </div> 
                                 <Button class="custom-btn"  type="submit" name="submit"> <span>Apply</span> </Button>
                              </form>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
                        
                       
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        

                       
                        <div class="descript_main_wrapper pb-0" style="margin-top: 8em;">
                           <h4>Job Overview</h4>
                           <ul class="job-overview">
                              <li>
                                 <div class="job-icon">
                                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Date Posted</p>
                                    <span><?php echo $row['date']; ?></span>
                                 </div>
                              </li>
                              <li>
                                 <div class="job-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Location</p>
                                    <span><?php echo $row['location']; ?></span>
                                 </div>
                              </li>
                              <li>
                                 <div class="job-icon">
                                   <i class="fa fa-money" aria-hidden="true"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Offered Salary:</p>
                                    <span><?php echo $row['salary']; ?></span>
                                 </div>
                              </li>
                             
                             
                              <li>
                                 <div class="job-icon">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Gender</p>
                                    <span>Both</span>
                                 </div>
                              </li>

                              <li>
                                 <div class="job-icon">
                                    <i class="fa fa-address-book" aria-hidden="true"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Description</p>
                                    <span><?php echo $row['description']; ?></span>
                                 </div>
                              </li>

                           </ul>
                        </div>
                     
                     </div>
                  </div>
               </div>
            </div>
         


            <!-- footer section start -->
            <?php include 'container/footer.php';?>
            <!-- footer section end -->
            <?php include 'container/scripts.php';?>
            
            <script>
               $(function() {
                  $( "#slider-range" ).slider({
                    range: true,
                    min: 130,
                    max: 500,
                    values: [ 130, 250 ],
                    slide: function( event, ui ) {
                     $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                    }
                  });
                  $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
               });
           </script>
         </body>
      
</html>