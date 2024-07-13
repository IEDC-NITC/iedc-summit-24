<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';
 


if(isset($_REQUEST['priority'],$_REQUEST['grabid'],$_REQUEST['grabtable'])){
 
 	update_value($_REQUEST['priority'],$_REQUEST['grabtable'],'priority','id',$_REQUEST['grabid'] );

 		$a=["1","  update success!"];

}else {
		$a=["0","  Update Failed!"];

	}






echo json_encode($a);
?>