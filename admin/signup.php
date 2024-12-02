<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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
    <div
      class="container"
      style="
        width: 600px;
        padding: 30px;
        background-color:rgba(255, 255, 255,255); border-radius:8px; box-shadow: 0px 4px 8px rgba(255, 70, 560, 09);;
        margin-top: 20px;
      ">
      <h3 style= "color:purple;">Create a new account</h3>
      <form action="" method="post">
        <div class="form-group">
          <label for="">First Name</label>
          <input type="text" class="form-control" name="fname" id="fname" placeholder="Firstname" required>
        </div>

        <div class="form-group">
          <label for="">Last Name</label>
          <input type="text" class="form-control" name="lname" id="lname" placeholder="Lastname" required >
        </div>

        



        <div class="form-group">
          <label for="">Username</label>
          <input
            type="name"
            class="form-control"
            name="Username"
            id="Username"
            placeholder="Username" required/>
        </div>

        <div class="form-group">
          <label for="">Password</label>
          <input
            type="Password"
            class="form-control"
            name="Password"
            id="Password"
            placeholder="Password" required />
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-success">Sign Up</button>
          <button type="Reset"  class="btn btn-danger">Cancel</button>
          <br /><br />
          <a href="index.php" class="btn btn-primary">Login</a>
        </div>
      </form>
      <?php
      include 'connection.php';
      if(isset($_POST['submit'])){

      $a=$_POST['fname'];
      $b=$_POST['lname'];
      $c=$_POST['Username'];
      $d=$_POST['Password'];
        $query="insert into users(First_Name,Last_Name,username,password)values
        ('$a','$b','$c','$d')";
        $run=mysqli_query($conn,$query);
        if($run){
          echo "<script>window.alert('Success!')</script>";
        }
        else{
          echo "<script>window.alert('Not success! something wrong')</script>";
        }
      }
      ?>
    </div>
  </body>
</html>
