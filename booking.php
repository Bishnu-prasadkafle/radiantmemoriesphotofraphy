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
     <!-- content start -->
    <div
      class="container-fluid"
      style="background-image:url('./assets/images/studio.jpg'); background-size:cover; background-color: white; padding: 0px 350px"
    >
      <div class="container" style="margin-top: 10px; padding: 40px 10px; rgba(255, 255, 255, 097); border-radius:8px; box-shadow: 0px 4px 8px rgba(255, 70, 560, 09);">
        <form action="" method="post">
          <div class="form-group">
            <label for="name" style="color:rgb(17, 130, 229)"> <strong>Name:</strong></label>
            <input
              type="text"
              class="form-control"
              name="name"
              id="name"
              placeholder="Enter Your name"
            />
          </div>
          <div class="form-group">
            <label for="Address" style="color:rgb(17, 130, 229)"><strong>Address:</strong></label>
            <input
              type="text"
              class="form-control"
              name="address"
              id="address"
              placeholder="Address"
            />
          </div>
          <div class="form-group">
            <label for="phone" style="color:rgb(17, 130, 229)"><strong>Contact Number:</strong>:</label>
            <input
              type="tel"
              class="form-control"
              name="phone"
              id="phone"
              placeholder="Phone"
            />
          </div>
          <div class="form-group">
            <label for="email" style="color:rgb(17, 130, 229)"><strong>Email:</strong></label>
            <input
              type="email"
              class="form-control"
              name="email"
              id="email"
              placeholder="youremail@gmail.com"
            />
          </div>
          <div class="form-group">
            <label for="photographers" style="color:rgb(17, 130, 229)"><strong>Number of Photographers:</strong></label>
            <input
              type="number"
              class="form-control"
              name="photographers"
              id="photographers"
              placeholder="No.of Photographers"
            />
          </div>
         

          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success">
              Book
            </button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
        </form>
        <?php
        include 'admin/connection.php';
        if (isset($_POST['submit'])){
          $a=$_POST['name'];
          $b=$_POST['address'];
          $c=$_POST['phone'];
          $d=$_POST['email'];
          $e=$_POST['photographers'];

          $query= "insert into bookings (name, address, phone, email, photographers) values('$a', '$b', '$c', '$d', '$e') ";
          $run= mysqli_query($conn,$query);
          if($run){
            echo "<script>window.alert('Booking Successful')</script>";
            echo "<script>window.open('Booking.php', '_self')</script>";
          }
          else{
            echo "<script>window.alert('Not successful')</script>";
          }
        } 
        ?>
        </div>
        </div>

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