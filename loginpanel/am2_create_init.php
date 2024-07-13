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
      INSERT INTO `gallery`
      ( 
      `uid`,
      `title`,
      `category`,
      `priority`,
      `status`
       ) 
      VALUES 
      (
      "'.$user_id.'" ,
      "'.hscEncode($_REQUEST['title']).'",
      "'.hscEncode($_REQUEST['galleryCategory']).'",
      ( SELECT COALESCE(MAX(`priority`),0) +1 as prio FROM `gallery` as cat WHERE category="'.hscEncode($_REQUEST['galleryCategory']).'" ),
      "1"
      
    )');


    $media_gallery_unsaved=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery'," AND metatype = 'GALLERYIMAGE' ");

    if(is_array($media_gallery_unsaved)){
      update_value($media_gallery_unsaved[0]['metacontent'],'gallery','imageurl','uid',$user_id );
      update_value(2,'media_gallery','status','status',UNSAVEDSTATUS_PARAM,'s',' AND metatype = "GALLERYIMAGE" ' );
    }

 

    $a=["1","ADDED NEW GALLERY IMAGE SUCCESFULLY!"];


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