<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



if(isset($_REQUEST['name']))

{

  if(
    !empty($_REQUEST['name']) 
 
  )
  {
 
    $user_id = $_REQUEST["xc-editid"];

    

    /* GALLERY TABLE */

    sql_query_raw('
      UPDATE `speaker`
      SET 
      `name`=  "'.hscEncode($_REQUEST['name']).'",      
      `designation`=  "'.hscEncode($_REQUEST['designation']).'"       
      WHERE id= "'.$user_id.'"

    ');


    $media_gallery_unsaved=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery'," AND metatype = 'SPEAKERIMAGE' ");
        // print_r($media_gallery_unsaved);
    if(is_array($media_gallery_unsaved)){
      update_value($media_gallery_unsaved[0]['metacontent'],'speaker','imageurl','id',$user_id );
      update_value(2,'media_gallery','status','status',UNSAVEDSTATUS_PARAM,'s',' AND metatype = "SPEAKERIMAGE" ' );
    }

    $a=["1","UPDATED SPEAKERS SUCCESFULLY!"];


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




 