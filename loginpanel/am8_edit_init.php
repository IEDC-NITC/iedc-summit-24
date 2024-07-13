<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



if(isset($_REQUEST['title']))

{



  if(
    !empty($_REQUEST['title']) 
 
  )
  {
 
    $am_id = $_REQUEST["xc-editid"];

    


    update_value(hscEncode($_REQUEST['title']),'files','title','id',$am_id );
    update_value(hscEncode($_REQUEST['resultCategory']),'files','category','id',$am_id );

 
    if (!empty($_FILES['upload_file'])) {

      $name=makeLowerAlphaNumHypen($_REQUEST['title']);  

      $file_url=file_pdf_upload_custome_name($_FILES['upload_file'],$am_id,1,$name);

      update_value( $file_url,'files','imageurl','id',$am_id );

    }


    $a=["1"," RESULTS UPDATED SUCCESFULLY!"];


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




 