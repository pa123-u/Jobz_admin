<?php


include('dbcon.php');
$id=$_GET['id'];
$sql="delete from team where id='$id'";
$query=mysqli_query($conn,$sql);
if($query){
  header('location:about.php');

}else {
  echo "Failed";
}

 ?>
