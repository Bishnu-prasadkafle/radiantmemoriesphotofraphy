<?php
session_start();
if(!isset($_SESSION['Username']))
{
  header("location:index.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous" />
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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="main.php"
        ><i
          class="fa fa-tachometer"
          aria-hidden="true"
          style="font-size: 20px"></i>
        Dashboard</a
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
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
        <form class="form-inline my-2 my-lg-0">
          <i
            class="fa fa-user-circle-o"
            aria-hidden="true"
            style="font-size: 20px"
            ><?php echo $_SESSION['Username'] ?></i
          >
          
          &nbsp; &nbsp;
          <a href="logout.php">
            <i
              class="fa fa-power-off"
              aria-hidden="true"
              style="font-size: 20px"
              >Log Out</i
            ></a
          >
        </form>
      </div>
    </nav>
    <!-- navbar end -->
    <!-- content start -->
    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-md-3">
          <a href="add-post.php" class="btn btn-info btn-block"
          style="color:purple;"  ><i class="fa fa-plus-square" aria-hidden="true"
              >&nbsp; Add Post</i
            ></a
          >

          <a href="view-post.php" class="btn btn-info btn-block"
          style="color:purple;"   ><i class="fa fa-newspaper-o" aria-hidden="true"
              >&nbsp; View Post</i
            ></a
          >

          <a href="add-photo.php" class="btn btn-info btn-block"
          style="color:purple;"   ><i class="fa fa-camera" aria-hidden="true">&nbsp; Add Photos</i></a
          >

          <a href="booking.php" class="btn btn-info btn-block"
          style="color:purple;"   ><i class="fa fa-camera" aria-hidden="true">&nbsp; Booking</i></a
          >
          <a href="users.php" class="btn btn-info btn-block"
          style="color:purple;"   ><i class="fa fa-user" aria-hidden="true">&nbsp; Users</i></a
          >
        </div>
        <div class="col-md-8">
            <h2 class="display-4">Update Post</h2>
            <form action="update-post.php" method="get" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="ID">ID:</label>
                  <input type="text" name="id1" id="id1" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['id']; ?>">
                </div>
                <!-- title -->
                <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="text" name="title1" id="title1" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['title']; ?>">
                </div>
                <!-- content -->
                <div class="form-group">
                  <label for="content">Content:</label>
                  <textarea class="form-control" name="content1" id="content1" rows="5">
                    <?php echo $_GET['content']; ?>
                  </textarea>
                </div>
                <!-- image -->
                <div class="form-group">
                  <label for="image">Image:</label>
                  <input type="text" name="image1" id="image1" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['image']; ?>">
                </div>
                <!-- submit button -->
                <button type="submit" class="btn btn-success btn-lg" name="submit">Update Post</button>
            </form>
        </div>
    </div>        
    </div>
          <!-- now row end -->
        </div>
      </div>
    </div>
    <!-- content end -->
  </body>
</html>
<?php
}
?>