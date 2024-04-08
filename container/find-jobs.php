<?php
   include 'container/database.php';

   // Define the number of records per page
   $records_per_page = 3;

   // Get the current page number from the URL
   $current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;

   // Calculate the starting record for the current page
   $start = ($current_page - 1) * $records_per_page;

   // Fetch data from the database
   $sql = "SELECT * FROM `data` LIMIT $start, $records_per_page ";
   $result = $conn->query($sql);

   // Fetch data from the database for pagination links
   $sql_total = "SELECT COUNT(*) as total FROM `data`";
   $result_total = $conn->query($sql_total);
   $row_total = $result_total->fetch_assoc();
   $total_recorde = $row_total['total'];
   $total_pages = ceil($total_recorde / $records_per_page);
   ?>



 <!-- find job page end -->
 <div class="inner-page-main-wrapper float_left">
      <div class="container">
         <div class="home1-section-heading1 mb-4">
            <h6>Jobs Listing</h6>
            <h4>Find Jobs</h4>
         </div>
         <div class="row" id="job-listings-container">
            <?php
            while ($row = mysqli_fetch_array($result)) {
               ?>
               <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="trending-main-box float_left" style="height: 455px;">
                     <div class="trending-upper-text ps-rel">
                        <div class="heart">
                           <a href="javascript:;"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="icon-img">
                           <img src="images/fav-icon.png" alt="img">
                           <!-- Update with your database column name for image URL -->
                        </div>
                        <a href="javascript:;">
                           <h5>
                              <?php echo $row['title']; ?>
                           </h5>
                        </a>
                        <!-- Update with your database column name for job title -->
                        <p>
                           <?php echo $row['date']; ?>
                        </p>
                        <!-- Update with your database column name for experience -->
                     </div>
                     <div class="trending-lower-text">
                        <span>
                           <?php echo $row['category']; ?>
                        </span> <!-- Update with your database column name for company -->
                        <a href="javascript:;"> <i class="far fa-money-bill-alt"></i>
                           <?php echo $row['salary']; ?>
                        </a> <!-- Update with your database column name for salary -->
                        <p> <span><i class="fas fa-map-marker-alt"></i></span>
                           <?php echo $row['location']; ?>
                        </p>
                        <!-- Update with your database column name for location -->
                        <a class="custom-btn" href="jobs-details?id=<?php echo $row['id']; ?>"> <span>Apply</span> </a>
                     </div>
                  </div>
               </div>
            <?php } ?>
         </div>
         <div class="btn-from" style=" width: 100%; display: flex; justify-content: center; align-items: center; text-align: center; ">
          <a href="find-jobs" style=" padding: 0.5em 2em;  border-radius: 27px; border: 1px solid #0060aa;">View More</a>
         </div>
      </div>
   </div>
   <!-- footer section start -->