<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



// (isset($_FILES['fileup']) && $_FILES['fileup']['error'] == 0 )

if (isset($_REQUEST['configtype'],$_REQUEST['configname']) && !empty($_REQUEST['configname'])) {

	if( ( isset($_REQUEST['configvalue']) && $_REQUEST['configvalue'] !='') ||  (isset($_FILES['fileup']) && $_FILES['fileup']['error'] > 0 ) ){

		$am_id=$_REQUEST['xc-editid'];

		update_value($_REQUEST['configtype'],'systemconfig_xc','metaname','sc_id',$am_id );
		update_value($_REQUEST['configname'],'systemconfig_xc','configname','sc_id',$am_id );

		if(isset($_FILES['fileup'])){
			$ext = pathinfo($_FILES['fileup']['name'][0], PATHINFO_EXTENSION);
			if($ext=='pdf'){
				$thumb_url=file_pdf_upload($_FILES['fileup'],$am_id,1,"SC");

			}else{

				$thumb_url=compressed_img_upload($_FILES['fileup'],$am_id,1,60,0,"SC");
			}
			update_value($thumb_url,'systemconfig_xc','configvalue','sc_id',$am_id );

		}
		

		else if(isset($_REQUEST['configvalue'])){

			update_value($_REQUEST['configvalue'],'systemconfig_xc','configvalue','sc_id',$am_id );

		}

		else{

			update_value($_REQUEST['configvalue'],'systemconfig_xc','configvalue','sc_id',$am_id );

		}
		


		$a=["1","New System Variable Updated Succesfully!"];

	}else{

		$a=["0","No proper System Variable data!"];

	}
}

else {
	$a=["0"," Procedure Failed!"];

}

echo json_encode($a);
?>