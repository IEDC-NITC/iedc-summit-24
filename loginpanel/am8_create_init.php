<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



if(isset($_REQUEST['title'],$_FILES['upload_file']))

{



  if( !empty($_REQUEST['title']) && !empty($_FILES['upload_file']))
  {

    $user_id = gen_uuid();


    if(isset($_FILES['upload_file'])){

     $name=makeLowerAlphaNumHypen($_REQUEST['title']);  

     $file_url=file_pdf_upload_custome_name($_FILES['upload_file'],$user_id,1,$name);

       
    }

    

    /* FILES TABLE */

    sql_query_raw('
      INSERT INTO `files`
      ( 
      `uid`,
      `title`,
      `combination_key`,
      `category`,
      `imageurl` ) 
      VALUES 
      (
      "'.$user_id.'" ,
      "'.hscEncode($_REQUEST['title']).'",
      "RESULTS",
      "'.hscEncode($_REQUEST['resultCategory']).'",
      "'.$file_url.'"
      )');



 

 

    $a=["1","ADDED NEW FILE SUCCESFULLY!"];


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