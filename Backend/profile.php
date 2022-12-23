<?php 
session_start();
  $student_email = $_SESSION["student_login_email"];
  require_once 'db_connection.php';

  if(!isset($student_email)){
    header("location: error.php");
  }

 $all_information = "SELECT * FROM `registration` WHERE student_email = '$student_email'";
 $all_information_query = mysqli_query($conn, $all_information);
 $all_information_query_array = mysqli_fetch_assoc($all_information_query);
 print_r($all_information_query_array);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<title>LearnPLUS | Learning Management System HTML Template</title>
<link rel="shortcut icon" href="../Frontend/images/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="../Frontend/images/apple-touch-icon.png"/>
<link rel="apple-touch-icon" sizes="57x57" href="../Frontend/images/apple-touch-icon-57x57.png"/>



<link rel="apple-touch-icon" sizes="72x72" href="../Frontend/images/xapple-touch-icon-72x72.png.pagespeed.ic.lf5d8kCpOf.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="../Frontend/images/xapple-touch-icon-76x76.png.pagespeed.ic.ATZZpSeito.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="../Frontend/images/xapple-touch-icon-114x114.png.pagespeed.ic.Fi5O5s2tzL.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="../Frontend/images/xapple-touch-icon-120x120.png.pagespeed.ic.uPQH0sygdV.png"/>
<link rel="apple-touch-icon" sizes="144x144" href="../Frontend/images/xapple-touch-icon-144x144.png.pagespeed.ic.yZ9-_sm5OF.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="../Frontend/images/xapple-touch-icon-152x152.png.pagespeed.ic.gThaVrKtXF.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="../Frontend/images/xapple-touch-icon-180x180.png.pagespeed.ic.Q8Pmsj5fQM.png"/>
<link rel="stylesheet" type="text/css" href="../Frontend/rs-plugin/rs-plugin/css/A.settings.css.pagespeed.cf.xeOyGChsgq.css" media="screen"/>

<!-- <link rel="stylesheet" type="text/css" href="A.fonts%2c%2c_font-awesome-4.3.0%2c%2c_css%2c%2c_font-awesome.min.css%2bcss%2c%2c_bootstrap.css%2bcss%2c%2c_animate.css%2cMcc.kSNwpaaMDX.css.pagespeed.cf.w2G3xGgFf0.css"/> -->

<link rel="stylesheet" type="text/css" href="../Frontend/A.fonts,,_font-awesome-4.3.0,,_css,,_font-awesome.min.css+css,,_bootstrap.css+css,,_animate.css,Mcc.kSNwpaaMDX.css.pagespeed.cf.w2G3xGgFf0.css"/>
<link rel="stylesheet" type="text/css" href="../Frontend/css/A.menu.css.pagespeed.cf.0_hLwXzYkZ.css">
<link rel="stylesheet" type="text/css" href="../Frontend/css/A.carousel.css.pagespeed.cf.VktteGiLwl.css">
<!-- <link rel="stylesheet" type="text/css" href="A.style.css%2bcss%2c%2c_custom.css%2cMcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css"/>
<link rel="stylesheet" type="text/css" href=""/> -->
<!-- <link rel="stylesheet" type="text/css" href="../Frontend/A.style.css+css,,_custom.css,Mcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css"/> -->




</head>
<body>
<div id="wrapper">
<div class="topbar">
<section class="grey page-title mt-5">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Your Profile</h1>
</div>
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li><a href="./logout.php">Logout</a></li>
</ol>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
<div id="course-left-sidebar" class="col-md-3">
<div class="course-image-widget">
<img src="../Frontend/upload/xstudent_06.png.pagespeed.ic.M4STWuf1XS.png" alt="" class="img-responsive"></div>
  <div class="form-group mt-5">
<form role="form" method="post" >
<label>Upload Photo</label>
<input type="file" class="btn btn-primary w-50"></div>
<div class="form-groups">
  <button type="submit" class="btn btn-success">Change Photo</button>
  </form>
  </div>
<div class="course-meta" style="margin-top: 20px;">
  <h3>Name: <span class="text-primary"><?=$all_information_query_array['student_name']?></span></h3>
<hr>
<h4>Email: <span><b>sanjoy@gmail.com</b></span> </h4>
<hr>
</div>
</div>
<div id="course-content" class="col-md-9">
  <div id="course-content">
    <h1>Student Information</h1>
  <div class="edit-profile">
  <form  action="#" method="POST"  class="w-50 m-auto">
<div class="form-group ">
  <input type="text" name="student_id" class="form-control " value="<?=$all_information_query_array['id']?>">
</div>
<div class="form-group">
<label>Your Name</label>
  <input type="text" name="student_name" class="form-control" value="<?=$all_information_query_array['student_name']?>">
</div>
<div class="form-group">
<label>Your Email</label>
  <input type="email" name="student_email" class="form-control" value="<?=$all_information_query_array['student_email']?>">
</div>
<div class="form-group">
<label>Your Mobile No</label>
  <input type="text" name="student_phone" class="form-control" value="<?=$all_information_query_array['student_phone']?>">
</div>
<div class="form-group">
<label>Your Address</label>
  <input type="text" name="student_address" class="form-control" value="<?=$all_information_query_array['student_address']?>">
</div>
<div class="form-group">
<label>Your Date of Birth</label>
  <input type="date" name="student_date" class="form-control" value="<?=$all_information_query_array['student_name']?>">
</div>
<div class="form-group">
<label>Your Blood Group</label>
  <input type="text" name="student_blood_group" class="form-control" value="<?=$all_information_query_array['student_blood_group']?>">
</div>
<div class="form-group">
<label>Your Class</label>
  <input type="text" name="student_class" class="form-control" value="<?=$all_information_query_array['student_class']?>">
</div>

<button type="submit" class="btn btn-primary">Submit Changes</button>
</form>
</div>
  </div> <br> <br>
<div class="course-description">
<h3 class="course-title">Change Your Password</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer <a href="#">took</a>..</p>
<div class="edit-profile">
<form >
<div class="form-group">
<label>Previous Password</label>
<input type="password" class="form-control" placeholder="************">
</div>
<div class="form-group">
<label>New Password</label>
<input type="password" class="form-control" placeholder="************">
</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" class="form-control" placeholder="************">
</div>
<button type="submit" class="btn btn-primary">Submit Changes</button>
</form>
</div>
</div>
</div>



</section>
<section class="copyright">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
</div>
<div class="col-md-6 text-right">
<ul class="list-inline">
<li><a href="#">Terms of Usage</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Sitemap</a></li>
</ul>
</div>
</div>
</div>
</section>
</div>


<script src="../Frontend/js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>
<script src="../Frontend/js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script><script>eval(mod_pagespeed_gFRwwUbyVc);</script>
<script>eval(mod_pagespeed_rQwXk4AOUN);</script>
<script>eval(mod_pagespeed_U0OPgGhapl);</script>
<script src="../Frontend/js/carousel.js%2bcustom.js.pagespeed.jc.nVhk-UfDsv.js"></script><script>eval(mod_pagespeed_6Ja02QZq$f);</script>
<script>eval(mod_pagespeed_KxQMf5X6rF);</script>
</body>

<!-- course-account40:29  -->
</html>