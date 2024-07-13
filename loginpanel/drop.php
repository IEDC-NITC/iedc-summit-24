<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';


if (isset( $_REQUEST['id'],$_REQUEST['type'] )) {
	$am_id = $_REQUEST['id'];

	droprecord($_REQUEST['type'],'id',$am_id);

	if(isset($_REQUEST["child"])){
		switch($_REQUEST["child"]){
			case "chapterrelatives": 
				droprecord("student_watch_activity_log",'chapter_id',$am_id);
				break;

		}
	}

	$a=["1","Deleted Succesfully!"];
}

else {
	$a=["0"," Deleting Procedure Failed!"];

}

echo json_encode($a);
?>