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

                <a href="add.php" class="btn btn-primary"> Add</a>
                    <table class="table table-striped">
                        <thead>
                        <tr>

                                <th>image</th>
                            <th>name</th>
                            <th>Designation</th>

                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                     include('dbcon.php');
                     $sql="select * from team";
                     $query=mysqli_query($conn,$sql);

                      while($row=mysqli_fetch_assoc($query)){?>

                        <td>  <img src="<?php echo $row['image'] ?>" alt="" height="80px" width="80px"></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['designation']; ?></td>

                            <td><a href="adminupdate.php?id=<?php echo $row['id'];?>" class="btn btn-success">update</a></td>
                            <td><a href="admindelete.php?id=<?php echo $row['id'];?>" class="btn btn-danger"> delete</a></td>
                        </tr>
<?php } ?>

                        </tbody>
                    </table>
                </div>







                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('./common/footer.php');?>
