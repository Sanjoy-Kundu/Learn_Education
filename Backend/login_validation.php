<?php
session_start();
require_once 'db_connection.php';
$login_email = $_POST["login_email"];
$login_password = md5($_POST["login_password"]);

 $user_login_check = "SELECT COUNT(*)AS status FROM `registration` WHERE student_email = '$login_email' AND student_password = '$login_password'";
 $user_login_check_query = mysqli_query($conn, $user_login_check);
 $user_login_check_query_array = mysqli_fetch_assoc($user_login_check_query);
 print_r($user_login_check_query_array);

if($user_login_check_query_array['status'] == 1){
		 $_SESSION["student_login_email"] = $login_email;
		 header('location: profile.php');
}else{
	$_SESSION["user_login_error"] = "Your email and password does't match";
	header('location: course-login.php');
}

?>