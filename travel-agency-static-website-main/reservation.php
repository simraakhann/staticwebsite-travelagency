
<?php

include 'connection.php';

if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $number = $_POST['number'];
    $guest = $_POST['guest'];
    $date = $_POST['date'];
    $destination = $_POST['destination'];
    
    $sql = "insert into `travelagency`.`reservation` 
    (fullname, number, guest, date, destination)
    values ('$fullname', '$number', '$guest', '$date', '$destination')";

  $result =  mysqli_query($connect, $sql);

  if($result){
      echo "
        <script>
            alert('form has been submitted');
        </script>

      ";
      // header('location: index.php');
  }else{
    die(mysqli_connect_error());
  }

  mysqli_close($connect);

}







?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>WoOx Travel Reservation Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

Inside Developers 580 Woox Travel

https://inside-dev.com/tm-580-woox-travel

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="deals.php">Deals</a></li>
                        <li><a href="reservation.php" class="active">Reservation</a></li>
                        <li><a href="reservation.php">Book Yours</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Book Prefered Deal Here</h4>
          <h2>Make Your Reservation</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uttersi labore et dolore magna aliqua is ipsum suspendisse ultrices gravida</p>
          <div class="main-button"><a href="about.php">Discover More</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info reservation-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>Make a Phone Call</h4>
            <a href="#">+123 456 789 (0)</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Contact Us via Email</h4>
            <a href="#">company@email.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-map-marker"></i>
            <h4>Visit Our Offices</h4>
            <a href="#">24th Street North Avenue London, UK</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ==========Reservation Start============= -->
 

  <div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="450px" frameborder="0" style="border:0; border-top-left-radius: 23px; border-top-right-radius: 23px;" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="reservation-form" name="gs" method="post" role="search">
            <div class="row">
              <div class="col-lg-12">
                <h4>Make Your <em>Reservation</em> Through This <em>Form</em></h4>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="Name" class="form-label">Your Name</label>
                      <input type="text" name="fullname" class="Name" placeholder="Enter Full Name" autocomplete="on" >
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">Your Phone Number</label>
                    <input type="text" name="number" class="Number" placeholder="Ex. 03xx xxxxxxx" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="chooseGuests" class="form-label">Number Of Guests</label>
                      <select name="guest" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                          <option selected>ex. 3 or 4 or 5</option>
                          <option type="checkbox" name="option1" value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4+">4+</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">Check In Date</label>
                    <input type="date" name="date" class="date" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                      <label for="chooseDestination" class="form-label">Choose Your Destination</label>
                      <select name="destination" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                          <option selected>ex. Kashmir</option>
                          <option value="Islamabad">Islamabad</option>
                          <option value="Quetta Ziarat">Quetta Ziarat</option>
                          <option value="Muree">Muree</option>
                          <option value="Naran Kagan">Naran Kagan</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-12">                        
                  <fieldset>
                      <button class="main-button" type="submit" name="submit">Make Your Reservation Now</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- ==========Reservation End============= -->


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">WoOx Travel</a> Company. All rights reserved. 
          <br>Design: <a href="https://inside-dev.com" target="_blank" title="free CSS Designs">Inside Developers</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });



document.getElementById('reservation-form').addEventListener('submit', function(event) {
    // Prevent submission initially
    event.preventDefault();

    // Remove old errors and highlights
    const fields = this.querySelectorAll('input, select');
    fields.forEach(field => {
      field.style.borderColor = '';
      const error = field.nextElementSibling;
      if (error && error.classList.contains('error-message')) {
        error.remove();
      }
    });

    let isValid = true;

    // Validation function
    fields.forEach(field => {
      // Trim value to avoid spaces only
      const value = field.value.trim();

      // Check if empty or default selected option
      if (!value || (field.tagName === 'SELECT' && field.options[field.selectedIndex].text.toLowerCase().startsWith('ex.'))) {
        isValid = false;

        // Highlight the field with red border
        field.style.borderColor = 'red';

        // Create and insert error message if not present
        if (!field.nextElementSibling || !field.nextElementSibling.classList.contains('error-message')) {
          const errorMsg = document.createElement('div');
          errorMsg.classList.add('error-message');
          errorMsg.style.color = 'red';
          errorMsg.style.fontSize = '0.85em';
          errorMsg.textContent = 'This field is required';
          field.parentNode.appendChild(errorMsg);
        }
      }
    });

    if (isValid) {
      // If valid, submit the form (will trigger PHP)
      this.submit();
    }
  });


  </script>

  </body>

</html>
