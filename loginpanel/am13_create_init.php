<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



if(isset($_REQUEST['name']))

{

  if(
    !empty($_REQUEST['name']) 
   )
  {

    $user_id = gen_uuid();

    /* Gallery TABLE */

    sql_query_raw('
      INSERT INTO `speaker`
      ( 
      `uid`,
      `name`,
      `designation` ) 
      VALUES 
      (
      "'.$user_id.'" ,
      "'.hscEncode($_REQUEST['name']).'",
      "'.hscEncode($_REQUEST['designation']).'" 
    )');


    $media_gallery_unsaved=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery'," AND metatype = 'SPEAKERIMAGE' ");

    if(is_array($media_gallery_unsaved)){
      update_value($media_gallery_unsaved[0]['metacontent'],'speaker','imageurl','uid',$user_id );
      update_value(2,'media_gallery','status','status',UNSAVEDSTATUS_PARAM,'s',' AND metatype = "SPEAKERIMAGE" ' );
    }

 

    $a=["1","ADDED NEW SPEAKER SUCCESFULLY!"];


  }

  else{
    $a=["0","  INSUFFICIENT DATA!"];

  }
}

else {
  $a=["0"," CREATION PROCEDURE FAILED!"];

}

echo json_encode($a);
?>