<?php
session_start();
require_once 'db_connection.php';

	//print_r($_POST);
	$userName = $_POST["user_name"];
	$userEmail = $_POST["email"];
	$userMobile = $_POST["mobile"];
	$bloodGroup = $_POST["blood_group"];
	$userAddress = $_POST["address"];
	$userApplication_date = $_POST["application_date"];
	$userClass = $_POST["class"];
	$userPassword = $_POST["password"];
	$userConfirmPassword = $_POST["confirm_password"];
	$error_status = false;


		if(empty($_POST["user_name"])){
			$_SESSION["name_error"] = "Name field is required";
			$error_status = true;
		}else{
			 $_SESSION["name"] = $userName;
		}
	

		if(empty($_POST["email"])){
			$_SESSION["email_error"] = "Email is required";
			$error_status = true;
		}else{
			$_SESSION["email"] = $userEmail;
		}

		if(empty($_POST["mobile"])){
			$_SESSION["mobile_error"] = "Mobile field is requird";
			$error_status = true;
		}else{
			$_SESSION["mobile"] = $userMobile;
		}

		
		if(empty($_POST["blood_group"])){
			$_SESSION["blood_group_error"] = "Blood group field is requird";
			$error_status = true;
		}else{
			$_SESSION["blood_group"] = $bloodGroup;
		}
		
		
		if(empty($_POST["address"])){
			$_SESSION["address_error"] = "Address field is requird";
			$error_status = true;
		}else{
			$_SESSION["your_address"] = $userAddress;
		}


		if(empty($_POST["application_date"])){
			$_SESSION["application_date_error"] = "please select your application date";
			$error_status = true;
		}else{
			$_SESSION["application_date"] = $userApplication_date;
		}

		if(empty($_POST["class"])){
			$_SESSION["class_error"] = "please write your class Name";
			$error_status = true;
		}else{
			$_SESSION["user_class"] = $userClass;
		}



		if(empty($_POST["password"])){
			$_SESSION["password_error"] = "Password field is required";
			$error_status = true;
		}else{
				if(strlen($_POST["password"]) < 8) {
					$_SESSION["password_error"] = "Password must be  8 charaters or more";
					$error_status = true;
				}
		}

		if(empty($_POST["confirm_password"])){
			$_SESSION["confirm_password_error"] = "Confirm Password field is required";
			$error_status = true;
		}



		if($_POST["password"] !== $_POST["confirm_password"]){
			$_SESSION["confirm_password_error"] = "Your password and confirm password dosen't match";
			$error_status = true;
		}else{
			$_SESSION["your_password"] = $userConfirmPassword;
		}
		



		


 if($error_status){
		header("location: course_register.php");
	}else{
	
	//second check insert email
		$user_email_check = "SELECT COUNT(*)AS STATUS FROM `registration` WHERE student_email = '$userEmail'";
		$user_email_check_query = mysqli_query($conn, $user_email_check);
		$user_email_check_query_array = mysqli_fetch_assoc($user_email_check_query);
		//print_r($user_email_check_query_array);

		if($user_email_check_query_array['STATUS'] == 0){
			$encrypted_password = md5($userPassword);
				//first check insert
				 $information_insert = "INSERT INTO `registration`(`student_name`, `student_email`, `student_phone`, `student_address`, `student_blood_group`, `student_class`, `student_password`) VALUES ('$userName','$userEmail','$userMobile','$userAddress','$bloodGroup','$userClass','$encrypted_password')";
		
				$information_connection = mysqli_query($conn, $information_insert);

				if($information_connection){
						$_SESSION["insert_successfully"] = "Your Registration Successfully. Please Login Your Account";
						/* header('location: course_register.php');  */
						header('location: course-login.php');  
					}
			}else{
				$_SESSION["email_error"] = "User Email alreay exist";
				header('location: course_register.php');
			}

	

	/* 	//first check insert
		$information_insert = "INSERT INTO `registration`(`student_name`, `student_email`, `student_phone`, `student_address`, `student_blood_group`, `student_class`, `student_password`) VALUES ('$userName','$userEmail','$userMobile','$userAddress','$bloodGroup','$userClass','$userPassword')";
		$information_connection = mysqli_query($conn, $information_insert);
		$information_connection_array = mysqli_fetch_assoc($information_connection);

		if($information_connection){
			$_SESSION["insert_successfully"] = "Your Registration Successfully. Please Login Your Account";
 		 header('location: course_register.php');  
 			 header('location: course-login.php');  
		} */
	
	} 


?>