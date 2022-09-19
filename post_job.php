<?php session_start(); ?>
<!doctype html>
<html lang="zxx">
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard post job</h1>

                    </div>


<section id="post_job">
<div class="vertical-space-100"></div>
<div class="vertical-space-101"></div>
<div class="container">
<div class="list-box">
<a href="#" class="font-color-black margin-right">Job </a> > <a href="#" class="font-color-orange margin-left"> Post job</a>
</div>
<a href="job.php" class="Save" name="add">Save</a>
<div class="vertical-space-60"></div>
<div class="job-post-box">
<form>
<div class="form-group">
<label for="exampleInputJobtitle">Job title</label>
<input type="text" class="form-control" id="exampleInputJobtitle" placeholder="Enter your job title" required name="job_title" />
</div>

<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label for="exampleInputCompany">Company</label>
<input type="text" class="form-control" id="exampleInputCompany" placeholder="Full name of company" required name="company" />
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label for="exampleInputLoction">Location</label>
<input type="text" class="form-control" id="exampleInputLoction" placeholder="Company Address" required name="location"/>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-group ">
<label>Company Logo</label>
<div class="box text-center">
<input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple
name="logo" />
<label for="file-5">
<i>
<img src="imags/job-post.png" class="imtges" alt="">
</i>
<span>Drop your file here, or <i class="font-color-orange">Browse</i></span>
</label>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Document</label>
<div class="box text-center">
<input type="file" name="file-7[]" id="file-7" class="inputfile1 inputfile-4" data-multiple-caption="{count} files selected" multiple name="document"/>
<label for="file-7">
<i>
<img src="imags/job-post.png" class="imtges" alt="">
</i>
<span>Drop your file here, or <i class="font-color-orange">Browse</i></span>
</label>
</div>
</div>
</div>
</div>
<div class="form-group">
<label for="exampleInputShortDescription">Short Description</label>
<textarea class="form-control small" id="exampleInputShortDescription" placeholder="Write short description" rows="3" required name="s_description"></textarea>
</div>
<div class="form-group">
<label for="exampleInputLongDescription">Write full description</label>
<textarea class="form-control large" id="exampleInputLongDescription" placeholder="Write short description" rows="3" required name="l_description"></textarea>
 </div>
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="form-group mybtn" id="Job-Nature" name="job_nature">
<label>Job Nature</label>
<select name="job" id="job">
    <option value="part_time">Part time</option>
    <option value="full_time">Full time</option>
    <option value="freelance">Freelance</option>

  </select>

</div>
<div class="col-lg-6 col-md-12">
<div class="form-group" name="salary">
<label for="sel1">Salary Range:</label>
<select class="form-control" id="sel1" name="salary">
<option>5,000 - 10,000</option>
<option>3,000 - 5,000</option>
<option>2,000 - 1,000</option>
<option>7,000 - 10,000</option>
</select>
</div>
</div>
</div>

</body>

</html>
<?php
include('dbcon.php');
if (isset($_POST['add'])) {
  $title=$_POST['job_title'];
  $company=$_POST['company'];
  $location=$_POST['location'];
  $file_name=$_FILES['image']['name'];
    $file_type=$_FILES['image']['type'];
    $file_size=$_FILES['image']['size'];
    $file_temp_loc=$_FILES['image']['tmp_name'];
    $file_store="img/".$file_name;
    move_uploaded_file($file_temp_loc, $file_store);
  $file_name=$_FILES['text']['name'];
    $file_type=$_FILES['text']['type'];
    $file_size=$_FILES['text']['size'];
    $file_temp_loc=$_FILES['text']['tmp_name'];
    $file_store1="pdf_file/".$file_name;
    move_uploaded_file($file_temp_loc, $file_store1);
$sdescription=$_POST['s_description'];
  $ldescription=$_POST['l_description'];
  $jobnature=$_POST['job_nature'];
  $salary=$_POST['salary'];
     echo "$title,$company,$location,$file_store,$file_store1,$sdescription,$ldescription,$jobnature,$salary";
     exit();
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
