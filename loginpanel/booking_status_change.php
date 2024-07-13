<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';
 

	if(isset($_REQUEST['grabid']) && isset($_REQUEST['value']))
	{

		update_value($_REQUEST['value'],'bookings','check_status','booking_id',$_REQUEST['grabid'] );
		$a=["1","  Status Updated!"];

	}
	else 
	{

		$a=["0","  Update Failed!"];

	}

echo json_encode($a);

?>