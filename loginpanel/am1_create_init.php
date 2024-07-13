<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



if(isset($_REQUEST['year']))

{

  if(
    !empty($_REQUEST['year']) 
   )
  {

    $user_id = gen_uuid();

    /* Gallery TABLE */

    sql_query_raw("
      INSERT INTO `summit`
      ( 
      `uid`,
      `year`,
      `location`,
      `start_date`,
      `end_date`,
      `youtube`) 
      VALUES 
      (
      '".$user_id."' ,
      '".hscEncode($_REQUEST['year'])."',
      '".hscEncode($_REQUEST['location'])."',
      '".hscEncode($_REQUEST['start_date'])."',
      '".hscEncode($_REQUEST['end_date'])."',
      '".$_REQUEST['youtube']."'
    )");
 

    $a=["1","ADDED SUMMIT SUCCESFULLY!"];


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