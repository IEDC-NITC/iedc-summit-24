<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



if(isset( $_REQUEST['year'],$_REQUEST['youtube']))
{


  if( !empty($_REQUEST['year']))
  {

    $gen_id = $_REQUEST['xc-editid'];

   

    /* summit TABLE */
    
   
    sql_query_raw("
      UPDATE `summit`
      SET 
      `year` = '".hscEncode($_REQUEST['year'])."' ,
      `location` = '".hscEncode($_REQUEST['location'])."', 
      `start_date` = '".hscEncode($_REQUEST['start_date'])."',
      `end_date` = '".hscEncode($_REQUEST['end_date'])."',
      `youtube` = '".$_REQUEST['youtube']."'
      WHERE id= '".$gen_id."'");
    

    $a=["1","Edited   SUCCESFULLY!"];


  }

  else{
    $a=["0","  INSUFFICIENT DATA!"];

  }
}

else {
  $a=["0","  PROCEDURE FAILED!"];

}

echo json_encode($a);
?>