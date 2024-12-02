<?php
include 'connection.php';
if(isset($_GET['submit'])){
echo $a=$_GET['id1'];
echo $b=$_GET['fname1'];
echo $c=$_GET['lname1'];
echo $d=$_GET['uname1'];
echo $e=$_GET['pw1'];
$query = "update users set First_Name = '$b', Last_Name = '$c', username ='$d', password ='$e'
where id = '$a'";
$run =mysqli_query($conn, $query);
if($run){
  header("location:users.php");
}
else {
  echo "<script>window.alert('Not updated')</script>";
}
}
?>