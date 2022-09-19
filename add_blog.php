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
                      <h2>Add Blog</h2>
                      <form  method="post" enctype="multipart/form-data">
                      <!-- title -->
                    <p><input type="file" name="image" placeholder="Enter image" style="width:200px"></p>
                    <!-- blog -->
                      <p><input type="text" name="title" placeholder="Enter title" style="width:200px"></p>

                        <p><textarea name="blog" rows="12" cols="100"></textarea></p>
                      <button type="submit" name="add" class="btn btn-success">Add blog</button>
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
   $title=$_POST['title'];
$today=date("Y-m-d");
$blog=$_POST['blog'];
    // echo "$file_store.$title.$blog";
    // exit();
 $query="INSERT INTO blog( image,title,date,blog) VALUES ('$file_store','$title','$today','$blog')";
   $sql=mysqli_query($conn,$query);
   if ($sql) {
     echo ("<script>location.href='blog.php'</script>");
     // header('location:about.php');
   }else {
     echo "Failed";
   }
}
?>
            <!-- Footer -->
            <?php include('./common/footer.php');?>
