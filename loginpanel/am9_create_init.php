<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



if(isset($_REQUEST['title'] ))

{



  if( !empty($_REQUEST['title']) )
  {

    $user_id = gen_uuid();


     

    

    /* FILES TABLE */

    sql_query_raw('
      INSERT INTO `notifications`
      ( 
      `uid`,
      `title`,
      `combination_key`,
      `links`
        ) 
      VALUES 
      (
      "'.$user_id.'" ,
      "'.hscEncode($_REQUEST['title']).'",
      "NOTIFICATIONS",
      "'.hscEncode($_REQUEST['links']).'"
      
      )');



 

 

    $a=["1","ADDED NEW NOTIFICATION SUCCESFULLY!"];


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