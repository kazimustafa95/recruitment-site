<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
   <meta charset="utf-8" />
   <title>Tabula</title>
   <?php include 'container/links.php'; ?>
   <style>
      .index1-listing-slider-wrapper {
         background-image: url(./images/home/Find-job-banner.jpg) !important;
      }


      .pagination {
         /display: inline !important;
         padding-left: 0;
         list-style: none;
      }

      .inner-page-main-wrapper .custom-pegination {
         text-align: center !important;
         padding-top: 30px !important;
      }

      .inner-page-main-wrapper .custom-pegination ul li {
         display: inline-block !important;
      }

      .inner-page-main-wrapper .custom-pegination ul li a {
         display: inline-block !important;
         border: 1px solid #f6f6f6 !important;
         border-radius: 50% !important;
         width: 40px !important;
         height: 40px !important;
         line-height: 26px !important;
         background-color: #fff !important;
         position: relative !important;
         overflow: hidden !important;
      }



      .inner-page-main-wrapper .custom-pegination ul li a:after {
         content: "" !important;
         width: 0 !important;
         height: 100% !important;
         position: absolute !important;
         left: -38% !important;
         top: 0 !important;
         transform: skew(26deg) !important;
         transition-duration: 0.6s !important;
         transform-origin: top left !important;
         background-color: #0060aa !important;
         transition: all 0.3s !important;
      }

      .inner-page-main-wrapper .custom-pegination ul li a:hover {
         border: 1px solid #0060aa !important;
         color: #fff !important;
         background-color: #0060aa !important;
      }

      .inner-page-main-wrapper .custom-pegination ul li a:hover span {
         z-index: 11 !important;
         position: relative !important;
         color: #fff !important;
      }

      .inner-page-main-wrapper .custom-pegination ul li a:hover:after {
         height: 100% !important;
         width: 135% !important;
         transition: all 0.3s !important;
         color: #fff !important;
      }

      .inner-page-main-wrapper .custom-pegination ul li+li {
         margin-left: 10px !important;
      }

      .inner-page-main-wrapper .custom-pegination ul .preious a {
         display: inline-block !important;
         border: 1px solid #0060aa !important;
         color: #0060aa !important;
         background-color: transparent !important;
         border-radius: 30px !important;
         width: 120px !important;
         height: 40px !important;
         line-height: 25px !important;
         overflow: hidden !important;
         position: relative !important;
      }

      .inner-page-main-wrapper .custom-pegination ul .preious a:after {
         content: "" !important;
         width: 0 !important;
         height: 100% !important;
         position: absolute !important;
         left: -38% !important;
         top: 0 !important;
         transform: skew(50deg) !important;
         transition-duration: 0.6s !important;
         transform-origin: top left !important;
         background: #0060aa !important;
         transition: all 0.3s !important;
      }

      .inner-page-main-wrapper .custom-pegination ul .preious a:hover {
         border: 1px solid #0060aa !important;
         color: #fff !important;
      }

      .inner-page-main-wrapper .custom-pegination ul .preious a:hover span {
         z-index: 11 !important;
         position: relative !important;
         color: #fff !important;
      }

      .inner-page-main-wrapper .custom-pegination ul .preious a:hover:after {
         height: 100% !important;
         width: 135% !important;
         transition: all 0.3s !important;
         color: #fff !important;
      }

      .inner-page-main-wrapper .custom-pegination ul .active a {
         background-color: #0060aa !important;
         color: #fff !important;
         /* Add the following line to set position */
         position: relative !important;
         
      }

      .page-item.active .page-link {

         background-color: #0060aa !important;
         border-color: #0060aa !important;
         border-radius: 50% !important;

      }
   </style>
</head>

<body>
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
            <h4>Find Jobs</h4>
            <ul>
               <li>
                  <a href="javascript:;">Home</a>
               </li>
               <li>/ Find Jobs</li>
            </ul>
         </div>
      </div>
   </div>
   <!-- banner section start end-->
   <!-- inner page -->
   <!-- find job page -->
   <?php
   include 'container/database.php';

   // Define the number of records per page
   $records_per_page = 12;

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
               <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="trending-main-box float_left">
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
         <div class="pagination-area mt-5 mb-5 custom-pegination" >
            <ul class="pagination" style=" flex-wrap: wrap; justify-content: center; ">
               <?php if ($current_page > 1): ?>
                  <li class="page-item preious">
                     <a class="page-link" href="?page=<?= $current_page - 1 ?>" aria-label="Previous">
                        <span aria-hidden="true" class="destop">&raquo; Previous</span>
                     </a>
                  </li>
               <?php endif; ?>
               <?php
               $start = max(1, $current_page - 4);
               $end = min($total_pages, $start + 10);

               for ($i = $start; $i <= $end; $i++):
                  ?>
                  <?php if ($i == $current_page): ?>
                     <li class="page-item active">
                        <span class="page-link">
                           <?= $i ?><span class="sr-only">(current)</span>
                        </span>
                     </li>
                  <?php else: ?>
                     <li class="page-item">
                        <a class="page-link" href="?page=<?= $i ?>">
                           <span><?= $i ?></span>
                        </a>
                     </li>
                  <?php endif; ?>
               <?php endfor; ?>
               <?php if ($current_page < $total_pages && $total_recorde > $records_per_page): ?>
                  <li class="page-item preious active">
                     <a class="page-link" href="?page=<?= $current_page + 1 ?>" aria-label="Next">
                        <span aria-hidden="true" class="destop">Next &raquo;</span>
                     </a>
                  </li>
               <?php endif; ?>
            </ul>
         </div>
      </div>
   </div>
   <!-- footer section start -->
   <?php include 'container/footer.php'; ?>
   <!-- footer section end -->
   <!-- scripts -->
   <?php include 'container/scripts.php'; ?>
</body>

</html>