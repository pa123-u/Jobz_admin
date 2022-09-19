<!DOCTYPE html>
<html lang="en">

<?php include('./common/head.php');?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('./common/sidebar.php');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('./common/navbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                    </div>
                      <h2>Add Member</h2>
                      <form  method="post" enctype="multipart/form-data">
                      <!-- title -->
                    <p><input type="file" name="image" placeholder="Enter image" style="width:200px"></p>
                    <!-- blog -->
                      <p><input type="text" name="name" placeholder="Enter name" ></p>

                        <p><input type="text" name="designation" placeholder="Enter designation"> </p>
                      <button type="submit" name="add" class="btn btn-success">Add member</button>
                    </form>
                  </div>
<?php
include('dbcon.php');
if (isset($_POST['add'])) {
  $file_name=$_FILES['image']['name'];
    $file_type=$_FILES['image']['type'];
    $file_size=$_FILES['image']['size'];
    $file_temp_loc=$_FILES['image']['tmp_name'];
    $file_store="img/".$file_name;
    move_uploaded_file($file_temp_loc, $file_store);
   $name=$_POST['name'];
$designation=$_POST['designation'];
   // echo "$file_store.$name.$designation";
   // exit();
 $query="INSERT INTO team( image,name,designation) VALUES ('$file_store','$name','$designation')";
   $sql=mysqli_query($conn,$query);
   if ($sql) {
     echo ("<script>location.href='about.php'</script>");
     // header('location:about.php');
   }else {
     echo "Failed";
   }
}
?>
            <!-- Footer -->
            <?php include('./common/footer.php');?>
