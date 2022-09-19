<?php


include('dbcon.php');
$id=$_GET['id'];
$sql="delete from blog where id='$id'";
$query=mysqli_query($conn,$sql);
if($query){
  header('location:blog.php');

}else {
  echo "Failed";
}

 ?>
