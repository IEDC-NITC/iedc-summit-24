<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';
// require_once __DIR__.'/urlns.php';

function myTruncate($string, $limit, $break=".", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  // is $break present between $limit and the end of the string?
  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  }

  return $string;
}

  // initilize all variable
$params = $columns = $totalRecords = $data = array();

$params = $_REQUEST;

  //define index of column
$columns = array( 
  0 =>'id',
  1 =>'id', 
  2 =>'username' ,
  3 =>'email' 

);

$where = $sqlTot = $sqlRec = "";



  // check search value exist
if( !empty($params['search']['value']) ) {   
  $where .=" AND ";
  $where .=" ( username LIKE '%".$params['search']['value']."%' OR  ";    
    // $where .=" OR pic LIKE '".$params['search']['value']."%' ";

  $where .=" email LIKE '".$params['search']['value']."%' )";
}



  // getting total number records without any search
$sql = "SELECT userid,username,email,user_type,id FROM `members` WHERE user_type <> 'user' ";
$sqlTot .= $sql;
$sqlRec .= $sql;
  //concatenate search sql if value exist
if(isset($where) && $where != '') {

  $sqlTot .= $where;
  $sqlRec .= $where;
}


$sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";

$queryTot = mysqli_query($mysqli, $sqlTot) or die("database error:". mysqli_error($mysqli));


$totalRecords = mysqli_num_rows($queryTot);

$queryRecords = mysqli_query($mysqli, $sqlRec) or die("error to fetch data");
$i=0;

  //iterate on results row and create new index array of data
while( $row = mysqli_fetch_row($queryRecords) ) { 
  $table_data=array();
  array_push($table_data,++$i);
    // array_push($table_data, $row[0]);

// $uimg=extract_cell('customer_dp','customer_id',$row[0],'userdetails_xc');

//   if(!empty($uimg)){
//     $thumbimage_data=
//     '<a href="'.$uimg."?".$row[1].'" data-toggle="lightbox">
//     <img class="img-thumbnail img-fluid"  src="./'.$uimg."?".$row[1].'" alt="" style="width:50px; height:auto;">
//     </a>  ';
//   }else{
//     $thumbimage_data='No Data';
//   }
   
  // array_push($table_data, $thumbimage_data);


  array_push($table_data, $row[1]);
  array_push($table_data, $row[2]);
  array_push($table_data, $row[3]);

  // $user='';

  // if($row[3]=='admin')
  // {
  //   $user='Admin';
  // }
  // else
  // {
  //   $user='Caretaker';
  // }

  // array_push($table_data,$user);

$a='<a class="scselector xc-viewedit-btn" xc-character="userDataLoad" data-toggle="modal" href data-target="#edit-user" xc-edit="'.$row[0].'">View/Edit</a>  | ';

$a.='<a class="xcdelete"  href="./drop.php?id='.$row[4].'&type=members"> Delete</a>';

  // $a.='<a class="xcdelete"  href="./drop.php?id='.$row[0].'&type=systemconfig_xc"> Delete</a>';
  array_push($table_data, $a);
  $data[] = $table_data;
    // unset($table_data);
} 

$json_data = array(
  "draw"            => intval( $params['draw'] ),   
  "recordsTotal"    => intval( $totalRecords ),  
  "recordsFiltered" => intval($totalRecords),
      "data"            => $data   // total data array
    );

  echo json_encode($json_data);  // send data as json format
  ?>
  