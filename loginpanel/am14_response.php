<?php
require_once __DIR__.'/../auth/authcore_check.php';

require_once __DIR__.'/../bpcore/sqltransaction.php';
// require_once __DIR__.'/urlns.php';



$params = $columns = $totalRecords = $data = array();
$params = $_REQUEST;

$columns = array( 
  0 =>'id',
  1 =>'full_name', 
  2 =>'full_name' ,
  3 =>'full_name' ,
  4 =>'full_name' ,
  5 =>'full_name' ,
  6 =>'full_name' 

);


$where = $sqlTot = $sqlRec = "";
$where .=" WHERE combinationkey='REGISTER'";

  // check search value exist
if( !empty($params['search']['value']) ) { 
  $where .=" WHERE   ";

  $where .=" ( `name` LIKE '%".$params['search']['value']."%'  )  ";    

  // $where .=" metauniqueno LIKE '".$params['search']['value']."%' )";
}else
{
  $where .="    ";

}

 
  // getting total number records without any search
$sql = "SELECT `id`, `name` , `phone` ,`email`,`combinationkey` FROM `enquiry` ";

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
if($params['order'][0]['dir'] == 'desc'){
  $i=$totalRecords-intval($params['start']-1);
}else{
  $i=intval($params['start']);
}
  //iterate on results row and create new index array of data
while( $row = mysqli_fetch_row($queryRecords) ) { 
  $table_data=array();
  if($params['order'][0]['dir'] == 'desc'){
    array_push($table_data,--$i);
  }else{
    array_push($table_data,++$i);
  }


  // if(!empty($row[1])){
  //    $thumbimage_data= 
  //   '<a href="'.$row[2].'" data-toggle="lightbox">
  //   <img class="img-thumbnail img-fluid"  src="'.$row[2].'" alt="'.$row[1].'" style="width:50px; padding:0; height:auto;">
  //   </a>  ';
  // }else{
  //   $thumbimage_data='No Data';
  // }

  // array_push($table_data, $thumbimage_data);
  
  $a='<a   href="./am3s1.php?id='.$row[0].'">'.$row[1].'</a>';


  array_push($table_data, $a);
  array_push($table_data, $row[3]);
  array_push($table_data, $row[2]);

  $a='<a   data-toggle="modal" class="xc-viewedit-btn" xc-character="enquiryDataLoad" data-target="#editCourseModal" xc-edit="'.$row[0].'" >View</a> |';
  $a.='<a class="xcdelete"  href="./drop.php?id='.$row[0].'&type=enquiry"> Delete</a>';

  array_push($table_data, $a);




  $data[] = $table_data;
} 

$json_data = array(
  "draw"            => intval( $params['draw'] ),   
  "recordsTotal"    => intval( $totalRecords ),  
  "recordsFiltered" => intval($totalRecords),
      "data"            => $data   // total data array
    );

  echo json_encode($json_data);  // send data as json format
  ?>
  