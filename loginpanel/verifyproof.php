<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';
 


if(isset($_REQUEST['grabid']) && isset($_REQUEST['verify_status']))

	{

		if ($_REQUEST['verify_status']==0) {

			update_value("1",'bookings','verify','booking_id',$_REQUEST['grabid'] );
			$a=["1","  ID Proof Verified!"];

		}else{

			update_value("0",'bookings','verify','booking_id',$_REQUEST['grabid'] );

			$a=["1","  ID Proof Unverified!"];

		}	
	
	}
	else 
	{
	$a=["0","  Update Failed!"];
	}

echo json_encode($a);

?>