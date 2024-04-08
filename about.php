<!DOCTYPE html>

<html lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Tabula</title>
    <?php include 'container/links.php'; ?>
    <style>
        .how-it-work-wrapper{
            background-color: #eaf2f7 !important;
        }
        
        .index1-listing-slider-wrapper {
            background-image: url(./images/home/About-banner.jpg) !important;
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
                <h4>About Us</h4>
                <ul>
                    <li>
                        <a href="index">Home</a>
                    </li>
                    <li>/ About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- banner section start end-->

    <!-- aboutus start  -->


    <?php include 'container/aboutus.php'; ?>
    <!-- aboutus end  -->

    <!-- ready-to-start start  -->

    <?php include 'container/ready-to-start.php'; ?>

    <!-- ready-to-start end  -->

    <!-- how-it-work start  -->

    <div style="background-color: #eaf2f7 !important;">
        <?php include 'container/how-works.php'; ?>
    </div>

    <!-- how-it-work end  -->








    <!-- millions-of-jobs start  -->
    <?php include 'container/millions-of-jobs.php'; ?>
    <!-- millions-of-jobs end  -->


    <!-- client testimonial  -->
    <?php include 'container/testimonial.php'; ?>
    <!-- client testimonial  -->





    <!-- footer section start -->
    <?php include('container/footer.php'); ?>
    <!-- footer section end -->


    <!-- js files-->
    <?php include('container/scripts.php'); ?>
    <!-- #region -->


</body>

</html>