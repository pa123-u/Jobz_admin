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
                        <?php
                        $id=$_GET['id'];
                      include('dbcon.php');
                      $sql="select * from blog where id=$id";
                      $query=mysqli_query($conn,$sql);

                      while($row=mysqli_fetch_assoc($query)){
                        $image=$row['image'];
                      $name=$row['title'];
                      $designation=$row['blog'];
                      }
                      ?>
                    </div>
                      <h2>Add Blog</h2>
                      <form  method="post" enctype="multipart/form-data">
                      <!-- title -->
                    <p><input type="file" name="image" placeholder="Enter image" style="width:200px"></p>
                    <!-- blog -->
                      <p><input type="text" name="title" placeholder="Enter title" style="width:200px" value="<?php echo $title; ?>"</p>

                        <p><textarea name="blog" rows="12" cols="100" value="<?php echo $blog; ?>"></textarea></p>
                      <button type="submit" name="add" class="btn btn-success">Add blog</button>
                    </form>
                  </div>
 <?php
 if (isset($_POST['add'])) {
     $image=$_POST['image'];
   $title=$_POST['title'];
   $blog=$_POST['blog'];

  $query="update blog set image='$image',title='$title',blog='$blog' where id='$id'";
  $sql=mysqli_query($conn,$query);
  if ($sql) {
     echo "<script>alert('successfully updated')</script>";
    echo ("<script>location.href='blog.php'</script>");
  }else {
  echo "Insert invalid";
}
}

?>
            <!-- Footer -->
            <?php include('./common/footer.php');?>
