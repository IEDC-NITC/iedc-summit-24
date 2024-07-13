<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



// (isset($_FILES['fileup']) && $_FILES['fileup']['error'] == 0 )

if (isset($_REQUEST['username'],$_REQUEST['email'],$_REQUEST['p'],$_REQUEST['phone_number']) && !empty($_REQUEST['username']) && !empty($_REQUEST['email']) && !empty($_REQUEST['p']) && !empty($_REQUEST['phone_number']) ) {

	// $a=["1"," Success!"];
	$error_msg="";

	$name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$phone = filter_input(INPUT_POST, 'phone_number', FILTER_SANITIZE_NUMBER_INT);
	$password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
	$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);


	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Not a valid email 
		$error_msg .= 'email not valid ';
	}

	// if (strlen($password) != 128) {
 //            // The hashed pwd should be 128 characters long.
 //            // If it's not, something really odd has happened
	// 	$error_msg .= 'Invalid password configuration.';
	// }



	$error_msg=checkExistence('id','email',$email,'members');


	if ($error_msg=="") {

		$memid="MEM_".uniqid();


		$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
		$password = hash('sha512', $password . $random_salt);

            // Insert the new user into the database
		if ($insert_stmt = $mysqli->prepare("INSERT INTO members (username, userid, email, phone_number, password, salt, user_type) VALUES (?, ?, ?, ?, ? , ?,?)")) {
			$insert_stmt->bind_param('sssssss', $name, $memid, $email, $phone, $password, $random_salt, $category);
                // Execute the prepared query.
			if (! $insert_stmt->execute()) {

				echo "error occurred";

			}
			else{
				insert_value('userdetails_xc','customer_id',$memid );

				 

				// $media_gallery_unsaved=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery'," AND metatype = 'PROFILEPICTURE' ");
				// if(is_array($media_gallery_unsaved))
				// 	{
				// 		update_value($media_gallery_unsaved[0]['metacontent'],'userdetails_xc','customer_dp','customer_id',$memid );
				// 		update_value(2,'media_gallery','status','status',UNSAVEDSTATUS_PARAM,'s',' AND metatype = "PROFILEPICTURE" ' );
				// 	}

			

				echo "success";
			}

		}
		 
	}
	else{
		
		echo $error_msg;
	}

}
else {

	echo "please try again";
}


?>