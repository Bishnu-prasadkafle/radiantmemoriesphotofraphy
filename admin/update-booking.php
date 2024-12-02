<?php
include 'connection.php';
if(isset($_GET['submit']))
{
    echo $a=$_GET['id1'];
    echo $b=$_GET['name1'];
    echo $c=$_GET['address1'];
    echo $d=$_GET['phone1'];
    echo $e=$_GET['email1'];
    echo $f=$_GET['photographers1'];
    $query="update bookings set Name='$b', address='$c', phone='$d', email='$e', photographers='$f' where id='$a'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        echo "<script>window.alert('updated sucessfully')</script>";
        header("location:reservation.php");
    }
    else
    {
        echo "<script>window.alert('Not updated')</script>";
    }

}
?>