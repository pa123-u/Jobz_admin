<?php session_start();
ob_start();
 ?>
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
                <?php

                if (!isset($_SESSION['aemail'])) {
                header('location:index.php');
                ob_end_flush();
                }
                 ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                    </div>
                    <h1>welcome to Admin Dashboard</h1>

                       </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('./common/footer.php');?>

<?php

echo "Log in successful";
 ?>
