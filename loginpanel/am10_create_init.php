<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



if(isset($_REQUEST['title']))

{



  if(
    !empty($_REQUEST['title']) 
   )
  {

    $user_id = gen_uuid();


    

    /* Gallery TABLE */

    sql_query_raw('
      INSERT INTO `sliders`
      ( 
      `uid`,
      `title`,
      `date`,
      `place`,
      `combination_key`,
      `status`) 
      VALUES 
      (
      "'.$user_id.'" ,
      "'.hscEncode($_REQUEST['title']).'",
      "'.hscEncode($_REQUEST['date']).'",
      "'.hscEncode($_REQUEST['place']).'", 
      "SLIDER",
      "1"
    )');


    $media_gallery_unsaved=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery'," AND metatype = 'SLIDERIMAGE' ");

    if(is_array($media_gallery_unsaved)){
      update_value($media_gallery_unsaved[0]['metacontent'],'sliders','imageurl','uid',$user_id );
      update_value(2,'media_gallery','status','status',UNSAVEDSTATUS_PARAM,'s',' AND metatype = "SLIDERIMAGE" ' );
    }

    $a=["1","ADDED NEW SLIDER SUCCESFULLY!"];


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