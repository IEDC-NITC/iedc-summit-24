<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';



if(isset($_REQUEST['title']))

{



  if(
    !empty($_REQUEST['title']) 
 
  )
  {
 
    $gen_id = $_REQUEST["xc-editid"];


    sql_query_raw('
      UPDATE `notifications`
      SET 
      `title` = "'.hscEncode($_REQUEST['title']).'" ,
      `links` = "'.hscEncode($_REQUEST['links']).'" 

      WHERE id= "'.$gen_id.'"


      ');


    $a=["1"," NOTIFICATION UPDATED SUCCESFULLY!"];


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




 