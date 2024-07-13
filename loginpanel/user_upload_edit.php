<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';

$error_msg = "";
if($_SESSION['user_type']!='admin'){
	header('Location: index.php');
}

$error_msg="";

if (isset($_POST['username'], $_POST['email'], $_POST['phone_number'],$_POST['category'] )) {
    // Sanitize and validate the data passed in
	$cusid = filter_input(INPUT_POST, 'cusid', FILTER_SANITIZE_STRING);
	$name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$phone = filter_input(INPUT_POST, 'phone_number', FILTER_SANITIZE_NUMBER_INT);
	$password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
	$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);


	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Not a valid email
		$error_msg .= 'email not valid';
	}

	if (strlen($password) != 0 ) {
		if (strlen($password) != 128 ) {
			$error_msg .= ' Invalid password configuration.';
		}
	}


 
	if ($error_msg=="") {
		$memid=$cusid;
 
		if (strlen($password) != 0 ) {

			$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
			$password = hash('sha512', $password . $random_salt);

			update_value($password,'members','password','userid',$memid );
			update_value($random_salt,'members','salt','userid',$memid );
 		}


		update_value($name,'members','username','userid',$memid );
 		update_value($phone,'members','phone_number','userid',$memid );
		update_value($category,'members','user_type','userid',$memid );

 
	
				// $media_gallery_unsaved=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery'," AND metatype = 'PROFILEPICTURE' ");
				// if(is_array($media_gallery_unsaved)){
				// 	update_value($media_gallery_unsaved[0]['metacontent'],'userdetails_xc','customer_dp','customer_id',$memid );
				// 	update_value(2,'media_gallery','status','status',UNSAVEDSTATUS_PARAM,'s',' AND metatype = "PROFILEPICTURE" ' );

				// }

		echo "success";


	}
	else
	{
		echo $error_msg;
	}
}
else {
	echo "please try again";
}


?>