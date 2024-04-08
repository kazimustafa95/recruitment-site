<!DOCTYPE html>
<html lang="zxx" class="theme-dark">
   <head>
      <?php include 'container/links.php'; ?>
      <title>Thank You </title>
      <!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
   </head>
   <style type="text/css">
      .company-item.h-100 {
    height: 490px !important;
}
   </style>
   <body>
   <?php include 'container/header.php'; ?>
            

<div>
<div class="container">
<div class="error-area">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="error-content" style="
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 11em 0em;
">
                                <h1>Hurry!</h1>
                                <h2>Thank you for subscribing to our newsletter! 🎉</h2>
                                <p> <br>We're thrilled to have you on board. Get ready for exclusive updates, insider content, and special offers.</p>
                                <a href="./">Redirecting in <span id="countdown">10</span> seconds...</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
</div>
</div>
           
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

    <?php include 'container/footer.php'; ?>
      
   </body>
</html>