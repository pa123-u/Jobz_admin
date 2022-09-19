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




                <h1> Dashboard | About page</h1>


                <div class="container">

                <!-- <a href="add.php" class="btn btn-primary"> Add</a> -->

                          <?php
                          $id=$_GET['id'];
                     include('dbcon.php');
                     $sql="select * from team where id=$id";
                     $query=mysqli_query($conn,$sql);

                      while($row=mysqli_fetch_assoc($query)){
                          $image=$row['image'];
                        $name=$row['name'];
                        $designation=$row['designation'];
                        }


  ?>
  <form  method="post" enctype="multipart/form-data">
  <!-- title -->
<p><input type="file" name="image" placeholder="Enter image" style="width:200px"></p>
<!-- blog -->
  <p><input type="text" name="name" placeholder="Enter name" value="<?php echo $name; ?>"></p>

    <p><input type="text" name="designation" placeholder="Enter designation" value="<?php echo $designation; ?>" > </p>
  <button type="submit" name="add" class="btn btn-success">update</button>
</form>

                </div>
                <?php
                if (isset($_POST['add'])) {
                  $image=$_POST['image'];
                  $name=$_POST['name'];
                  $designation=$_POST['designation'];
                 $query="update team set image='$image',name='$name',designation='$designation' where id='$id'";
                 $sql=mysqli_query($conn,$query);
                 if ($sql) {
                    echo "<script>alert('successfully updated')</script>";
                   echo ("<script>location.href='about.php'</script>");
                 }else {
                 echo "Insert invalid";
               }
             }

                 ?>






                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('./common/footer.php');?>
