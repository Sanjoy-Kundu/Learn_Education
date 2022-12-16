<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- course-login40:16  -->
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
<link rel="stylesheet" type="text/css" href="../Frontend/rs-plugin/css/A.settings.css.pagespeed.cf.xeOyGChsgq.css" media="screen"/>


<link rel="stylesheet" type="text/css" href="../Frontend/A.fonts,,_font-awesome-4.3.0,,_css,,_font-awesome.min.css+css,,_bootstrap.css+css,,_animate.css,Mcc.kSNwpaaMDX.css.pagespeed.cf.w2G3xGgFf0.css"/>
<link rel="stylesheet" type="text/css" href="../Frontend/css/A.menu.css.pagespeed.cf.0_hLwXzYkZ.css">

<link rel="stylesheet" type="text/css" href="../Frontend/css/A.carousel.css.pagespeed.cf.VktteGiLwl.css">


<link rel="stylesheet" type="text/css" href="../Frontend/A.style.css+css,,_custom.css,Mcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css"/>
<!-- <link rel="stylesheet" type="text/css" href="../Frontend/A.style.css+css,,_custom.css,Mcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css"/> -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login">
<div id="loader">
<div class="loader-container">
<img src="../Frontend/images/site.gif" alt="" class="loader-site">

</div>
</div>
<div id="wrapper">
<div class="container">
<div class="row login-wrapper">
<div class="col-md-6 col-md-offset-3">
<div class="logo logo-center">
<a href="index-2.html"><img src="../Frontend/images/xlogin-logo.png.pagespeed.ic.rk5LaeLYSz.png" alt=""></a>
</div>
<div class="panel panel-login">
<div class="panel-heading">
<div class="row">

<div class="col-xs-6">
<a href="#" id="register-form-link">Register</a>
</div>
</div>
<hr>
</div>
<div class="panel-body">
<div class="row">
  <?php if(isset($_SESSION["insert_successfully"])):?>
      <div class="alert alert-success"><?=$_SESSION["insert_successfully"] ?></div>
      <?php endif;?>
<div class="col-lg-12">
<!---------Registration form------->
<form id="register-form" action="register_validation.php" method="POST" >
<div class="form-group">
<input type="text" name="user_name" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
    <?php if(isset($_SESSION["name_error"])):?>
      <span class="text-danger"><?=$_SESSION["name_error"]?></span>
      <?php endif;?>
</div>
<div class="form-group">
<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
<?php if(isset($_SESSION["email_error"])):?>
      <span class="text-danger"><?=$_SESSION["email_error"]?></span>
      <?php endif;?>
</div>
<div class="form-group">
<input type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Mobile Number" value="">
<?php if(isset($_SESSION["mobile_error"])):?>
      <span class="text-danger"><?=$_SESSION["mobile_error"]?></span>
      <?php endif;?>
</div>
<div class="form-group">
<input type="text" name="blood_group" id="blood_group" tabindex="1" class="form-control" placeholder="Blood Group" value="">
<?php if(isset($_SESSION["blood_group_error"])):?>
      <span class="text-danger"><?=$_SESSION["blood_group_error"]?></span>
      <?php endif;?>
</div>
<div class="form-group">
<input type="text" name="address" id="address" tabindex="1" class="form-control" placeholder="Your Address" value="">
<?php if(isset($_SESSION["address_error"])):?>
      <span class="text-danger"><?=$_SESSION["address_error"]?></span>
      <?php endif;?>
</div>
<div class="form-group">
  <label for="date">Application Date</label>
  <input type="date" name="application_date" id="date" style="width: 100%;">
  <?php if(isset($_SESSION["application_date_error"])):?>
      <span class="text-danger"><?=$_SESSION["application_date_error"]?></span>
      <?php endif;?>
</div>


<div class="form-group">
<input type="text" name="class" id="class" tabindex="1" class="form-control" placeholder="Your Class" value="">
<?php if(isset($_SESSION["class_error"])):?>
      <span class="text-danger"><?=$_SESSION["class_error"]?></span>
      <?php endif;?>
</div>


<div class="form-group">
  <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
  <?php if(isset($_SESSION["password_error"])):?>
      <span class="text-danger"><?=$_SESSION["password_error"]?></span>
      <?php endif;?>
</div>
<div class="form-group">
<input type="password" name="confirm_password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
<?php if(isset($_SESSION["confirm_password_error"])):?>
      <span class="text-danger"><?=$_SESSION["confirm_password_error"]?></span>
      <?php endif;?>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-12">
<?php session_unset();?>
<button type="submit" class="form-control btn btn-default btn-block">Register an Account</button>
<p>Already Have an Account ? <span class="text-danger"><a href="course-login.php">Log In</a></span></p>
</div>

</div>
</div>
</form>
<!-------Registration end--->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="../Frontend/js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>

<script src="../Frontend/js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script><script>eval(mod_pagespeed_gFRwwUbyVc);</script>
<script>eval(mod_pagespeed_rQwXk4AOUN);</script>
<script>eval(mod_pagespeed_U0OPgGhapl);</script>
<script src="../Frontend/js/carousel.js%2bcustom.js.pagespeed.jc.nVhk-UfDsv.js"></script><script>eval(mod_pagespeed_6Ja02QZq$f);</script>
<script>eval(mod_pagespeed_KxQMf5X6rF);</script>
</body>

<!-- course-login40:17  -->
</html>