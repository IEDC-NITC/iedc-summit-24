<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



if(isset($_REQUEST['title']))

{



  if(
    !empty($_REQUEST['title']) 
 
  )
  {
 
    $user_id = $_REQUEST["xc-editid"];

    

    /* GALLERY TABLE */

    sql_query_raw('
      UPDATE `gallery`
      SET 
      `title`=  "'.hscEncode($_REQUEST['title']).'",      
      `category`=  "'.hscEncode($_REQUEST['galleryCategory']).'"       
      WHERE id= "'.$user_id.'"

    ');


    $media_gallery_unsaved=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery'," AND metatype = 'GALLERYIMAGE' ");
        // print_r($media_gallery_unsaved);
    if(is_array($media_gallery_unsaved)){
      update_value($media_gallery_unsaved[0]['metacontent'],'gallery','imageurl','id',$user_id );
      update_value(2,'media_gallery','status','status',UNSAVEDSTATUS_PARAM,'s',' AND metatype = "GALLERYIMAGE" ' );
    }






    $a=["1","UPDATED GALLERY SUCCESFULLY!"];


  }

  else{
    $a=["0","  INSUFFICIENT DATA!"];

  }
}

else {
  $a=["0"," UPDATION PROCEDURE FAILED!"];

}

echo json_encode($a);
?>




 