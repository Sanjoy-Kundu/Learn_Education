<?php
session_start();
//print_r($_FILES['profile_photo']);

if($_FILES["profile_photo"]['name']){
	//echo "photo ace";
	$imageName = $_FILES["profile_photo"]["name"];
	$imageNameExplode = explode('.', $imageName);
	$imageNameExtension = end($imageNameExplode);
	//print_r($imageNameExtension);

	if($imageNameExtension == "jpg" || $imageNameExtension == "png" || $imageNameExtension == "svg"){
			if($_FILES["profile_photo"]['size'] < 2000000){
				//echo "size milse";
				if($_FILES['profile_photo']['error'] == 0){
					//echo "good image";
					$source = $_FILES["profile_photo"]["tmp_name"];
					$destination = "uploads/profile/random.jpg";
					move_uploaded_file($source, $destination);
					echo "Photo uploaded successfully";
				}else{
					$_SESSION["photo_error"] = "This file is corupted file";
					header('location: profile.php');
				}
			}else{
				$_SESSION["photo_error"] = "Photo size must be 2mb or less";
					header('location: profile.php');
			}
	}else{
		$_SESSION["photo_error"] = "Image extension must be jgp svg png";
		header('location: profile.php');
	}

}else{
	$_SESSION["photo_error"] = "Please select an image";
	header('location: profile.php');
}





























/* 
if($_FILES["profile_photo"]['name']){
	$photo_name = $_FILES["profile_photo"]["name"];
	$photo_name_explode = explode('.', $photo_name);
	//print_r($photo_name_explode);
	$photo_extension = end($photo_name_explode);
	print_r($photo_extension);

	if($photo_extension == 'jpg' || $photo_extension == 'png' || $photo_extension == 'svg'){
			if($_FILES["profile_photo"]['size'] <= 500000){
					if($_FILES['profile_photo']['error'] == 0){
							$source = $_FILES["profile_photo"]["tmp_name"];
							$destination = "uploads/profile/1.jpg";
							move_uploaded_file($source, $destination);
					}else{
						$_SESSION["photo_error"] = "Corupted file";
						header('location: profile.php');
					}
			}else{
				$_SESSION["photo_error"] = "Image size must be 2000mb";
				header('location: profile.php');
			}
	}else{
		$_SESSION["photo_error"] = "Image extesnsion must be svg jpg and png";
		header('location: profile.php');
	}
}else{
	$_SESSION["photo_error"] = "Please select an image";
	header('location: profile.php');
} */

?>