<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome to Radiant Memories Photography</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta
      name="description"
      content="Radiant Memories Photography captures timeless moments with creativity, passion, and professional finesse." />
    <meta
      name="keywords"
      content="Radiant Memories Photography captures timeless moments with creativity, passion, and professional finesse. Wedding, Events and Ceromony" />
    <meta name="author" content="Bipin kafle" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      rel="shortcut icon"
      href="./assets/images/logo.png"
      type="image/x-icon" />
    <link
      rel="shortcut icon"
      href="assets/images/icon.png"
      type="image/x-icon" />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand navbar- bg-dark">
      <a class="navbar-brand" href="#">
        <img src="assets/images/logo.jpg" alt="radiant logo" height="75" width="85"/>
      Radiant Memories Photography</a
      >
      <button
        class="navbar-toggler d-lg-none"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId"
        aria-expanded="false"
        aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">News and Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.php">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="admin/index.php" class="btn btn-outline-danger">Log in</a>
        </form>
      </div>
    </nav>

    <!-- navbar end -->
      <!-- news start -->
    <div class="container-fluid">
      <h2 class="display-3 text-center" style="padding: 30px; color: purple ">
        News and Events
      </h2>
  

      <div class="row">
        <div class="col-md-8">
          <h3 style="color: rgb(17, 130, 229)">Radiant Meomories Photograpy ranked at top one in 2024.</h3>
          <p>
          
          Radiant Memories Photography has achieved the top rank, celebrated for its exceptional artistry and unparalleled creativity. Specializing in capturing heartfelt moments, it delivers stunningly detailed and vibrant images that evoke emotions and preserve timeless memories. Renowned for pre-wedding, wedding, and event photography, the team combines professionalism with a personalized approach, ensuring each shoot is unique. Their dedication to quality and client satisfaction sets them apart as the industry leader.
          </p>
        </div>
        <div class="col-md-4">
          <img
            src="./assets/images/award.jpg"
            alt="award"
            class="img-thumbnail" />
        </div>
      </div>
    </div>
    <!-- news end -->
    <?php
     include 'admin/connection.php';
     $query='select * from post order by rand()';
     $run=mysqli_query($conn,$query);
     while($row=mysqli_fetch_array($run)){
                     $a=$row['id'];
                    $b=$row['title'];
                    $c=$row['content'];
                    $d=$row['image'];  
                    ?> 

      <div class="row">
        <div class="col-md-8">
          <h3>
            <?php echo $b ?>
          </h3>
          <p>
          <?php echo $c ?>
          </p>
        </div>
        <div class="col-md-4">
        <img src="assets/images/<?php echo $d; ?>" class= "img-thumbnail">
        </div>
      </div>
      <?php
     }
      ?>

    <!-- footer start -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div
      class="container-fluid bg-info"
      style="padding: 20px 0px; margin-top: 5px">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Contact Details</h3>
            <i class="fa fa-camera" aria-hidden="true"></i>Radiant Memories Photography(RMP)
            <br />
            <i class="fa fa-map-marker" aria-hidden="true"></i>Chitwan, Naryanghat
         
            <br />
            <i class="fa fa-phone" aria-hidden="true"></i>9805868705 <br />Pro.
            BP kafle
            <br />
            <i class="fa fa-envelope" aria-hidden="true"></i>Radiant Memories Photography(RMP)
          </div>

          <div class="col-md-4">
            <h3>Social Media</h3>
            <i
              class="fa fa-facebook"
              aria-hidden="true"
              style="font-size: 30px"></i
            >Radiant Memories Photography <br />
            <hr />
            <a
             
            
                class="fa fa-instagram"
                aria-hidden="true"
                style="font-size: 30px"></i>
            </a>
              Radiant Memories Photography(RMP) 
            <br />

            <i
              class="fa fa-twitter"
              aria-hidden="true"
              style="font-size: 30px"></i
            >RMP <br />
            <i
              class="fa fa-whatsapp"
              aria-hidden="true"
              style="font-size: 30px"></i
            >9805868705 <br />
            <i
              class="fa fa-youtube"
              aria-hidden="true"
              style="font-size: 30px"></i>
            Radiant Memories Photography
          </div>

          <div class="col-md-4">
            <h3>Google Map</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28261.337854443762!2d84.40674638638683!3d27.696678076043444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb47f0356407%3A0xd1bcbf06baa5866a!2sNarayangarh%2C%20Bharatpur%2044200!5e0!3m2!1sen!2snp!4v1732610863512!5m2!1sen!2snp" width="300" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <p>All content copyright: &copy; Radiant Memories Photography 2025 </p>
        </div>
      </div>
    </div>
    

    <!-- footer end -->
  </body>
</html>
