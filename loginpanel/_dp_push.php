<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';

$transaction_id=gen_uuid();

switch ($_REQUEST['imgtype']) {
	case 'ckeditor':
	$ckimg=raw_img_upload($_FILES['upload'],$transaction_id,1,100,280);
	$ckimg=SITE_URL.substr($ckimg,3);
	echo json_encode(array('fileName' => $transaction_id,'uploaded' => true,'url' => $ckimg ));
	
	break;

	case 'EDITORIMAGE':
	$Editorimage=compressed_img_upload($_FILES['img'],$transaction_id,1,100,280);
	break;

	case 'FACULTYPROFILE':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,128);
	break;
		case 'FACULTYSIGN':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,0);
	break;
	
	
	case 'CATEGORYICON':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,128);
	break;

	case 'COURSEIMAGE':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,200);
	break;

	case 'CHAPTERIMAGE':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,200);
	break;
	
	
	case 'CHAPTERFILE':
	$imgpath=file_pdf_upload($_FILES['pdf'],$transaction_id,1,"ls");

	break;

	case 'CHAPTERFILEEDIT':
	$imgpath=file_pdf_upload($_FILES['pdf'],$transaction_id,1,"ls");

	break;
	
	case 'WORKSHOPFEATURE':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,200);
	break;

	case 'WFEATURES':
	$imgpart=compressed_img_upload($_FILES['img'],$transaction_id,1,100,200);
	$datacollection=json_encode(array(
		'icon'=>SITE_URL.substr($imgpart,3),
		'text'=>$_REQUEST["featuretxt"]
	));
	break;

	case 'CFEATURES':
	$imgpart=compressed_img_upload($_FILES['img'],$transaction_id,1,100,200);
	$datacollection=json_encode(array(
		'icon'=>SITE_URL.substr($imgpart,3),
		'text'=>$_REQUEST["featuretxt"]
	));
	break;


	case 'CLIVEPROJECT':
	$imgpart=compressed_img_upload($_FILES['img'],$transaction_id,1,100,200);
	$datacollection=json_encode(array(
		'icon'=>SITE_URL.substr($imgpart,3),
		'text'=>$_REQUEST["liveprojecttxt"]
	));
	break;

	case 'TESTIMONIAL':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,0);
	break;

	case 'GALLERYIMAGE':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,0);
	break;

	case 'TEAMIMAGE':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,0);
	break;

	case 'RESULTSLIDERIMAGE':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,0);
	break;

	case 'SLIDERIMAGE':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,0);
	break;
	
	case 'BLOG':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,0);
	break;

	case 'SPEAKERIMAGE':
	$imgpath=compressed_img_upload($_FILES['img'],$transaction_id,1,100,0);
	break;


	case 'WREQUIRE':
	$datacollection=$_REQUEST["requiretxt"];

	break;

	case 'CREQUIRE':
	$datacollection=$_REQUEST["requiretxt"];

	break;
	

}




if(isset($imgpath)){

	$imgpath=SITE_URL.substr($imgpath,3);

	if(checkExistence('id','status',UNSAVEDSTATUS_PARAM,'media_gallery',' AND metatype="'.$_REQUEST['imgtype'].'" ' )=='Record already exists.'  && ($_REQUEST['imgtype'] !="CHAPTERFILE" && $_REQUEST['imgtype'] !="CHAPTERFILEEDIT" )){
		update_value($transaction_id,'media_gallery','media_id','status',UNSAVEDSTATUS_PARAM,'s', ' AND metatype="'.$_REQUEST['imgtype'].'" ' );
		update_value($imgpath,'media_gallery','metacontent','status',UNSAVEDSTATUS_PARAM,'s', ' AND metatype="'.$_REQUEST['imgtype'].'" '  );
		update_value($_REQUEST['imgtype'],'media_gallery','metatype','status',UNSAVEDSTATUS_PARAM,'s', ' AND metatype="'.$_REQUEST['imgtype'].'" '  );

	}else{
		insert_value('media_gallery','media_id',$transaction_id );
		update_value(UNSAVEDSTATUS_PARAM,'media_gallery','status','media_id',$transaction_id );
		update_value($imgpath,'media_gallery','metacontent', 'media_id',$transaction_id );
		update_value($_REQUEST['imgtype'],'media_gallery','metatype','media_id',$transaction_id );
		if(isset($_REQUEST["filename"])){
			update_value($_REQUEST["filename"],'media_gallery','metaname', 'media_id',$transaction_id );
		}

	}



	echo $imgpath;

}else{
	if(isset($datacollection)){


		insert_value('media_gallery','media_id',$transaction_id );
		update_value(UNSAVEDSTATUS_PARAM,'media_gallery','status','media_id',$transaction_id );
		update_value($datacollection,'media_gallery','metacontent', 'media_id',$transaction_id );
		update_value($_REQUEST['imgtype'],'media_gallery','metatype','media_id',$transaction_id );
		if(isset($_REQUEST["filename"])){
			update_value($_REQUEST["filename"],'media_gallery','metaname', 'media_id',$transaction_id );
		}else{
			update_value("DATACOLLECTION",'media_gallery','metaname', 'media_id',$transaction_id );


		}




		echo $datacollection;

	}

	if(isset($Editorimage)){
		$Editorimage=SITE_URL.substr($Editorimage,3);


		insert_value('media_gallery','media_id',$transaction_id );
		update_value(UNSAVEDSTATUS_PARAM,'media_gallery','status','media_id',$transaction_id );
		update_value($Editorimage,'media_gallery','metacontent', 'media_id',$transaction_id );
		update_value($_REQUEST['imgtype'],'media_gallery','metatype','media_id',$transaction_id );
		if(isset($_REQUEST["filename"])){
			update_value($_REQUEST["filename"],'media_gallery','metaname', 'media_id',$transaction_id );
		}else{
			update_value("EDITORIMAGE",'media_gallery','metaname', 'media_id',$transaction_id );


		}




		echo $Editorimage;

	}
}

?>
