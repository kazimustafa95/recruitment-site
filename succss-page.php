<!DOCTYPE html>

<html lang="zxx" dir="ltr">

<head>
   <meta charset="utf-8" />
   <title>success</title>
   

   <style>
  .contact-success {
    text-align: center;
    padding: 40px 0;
    background: #EBF0F5;
  }

  .contact-success h1 {
    color: #88B04B;
    font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
    font-weight: 900;
    font-size: 40px;
    margin-bottom: 10px;
  }

  .contact-success p {
    color: #404F5E;
    font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
    font-size: 20px;
    margin: 0;
  }

  .contact-success i {
    color: #9ABC66;
    font-size: 100px;
    line-height: 200px;
    margin-left: -15px;
  }

  .contact-success .card {
    background: white;
    padding: 60px;
    border-radius: 4px;
    box-shadow: 0 2px 3px #C8D0D8;
    display: inline-block;
    margin: 0 auto;
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

  
   <div class="contact-success">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="
    margin: 12em 0em;
">
  <div class="card">
    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
      <i class="checkmark">✓</i>
    </div>
    <h1>Success</h1>
    <p>We received your information<br /> we'll be in touch shortly!</p>
    <a href="./">Redirecting in <span id="countdown">10</span> seconds...</a>
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
        // Set the initial time in seconds
        let timeLeft = 5;

        // Function to update the countdown and redirect when it reaches 0
        function updateCountdown() {
            const countdownElement = document.getElementById('countdown');

            // Update the countdown element
            countdownElement.textContent = timeLeft;

            // Decrease the time left
            timeLeft--;

            // Check if the countdown has reached 0
            if (timeLeft < 0) {
                // Redirect when the countdown reaches 0
                redirectToGoogle();
            } else {
                // Set a timeout to call the updateCountdown function after 1 second
                setTimeout(updateCountdown, 1000);
            }
        }

        // Function to redirect to Google
        function redirectToGoogle() {
            window.location.href = './';
        }

        // Start the countdown
        updateCountdown();
    </script>


</body>

</html>