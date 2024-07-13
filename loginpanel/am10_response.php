<?php
require_once __DIR__.'/../auth/authcore_check.php';
 
require_once __DIR__.'/../bpcore/sqltransaction.php';
// require_once __DIR__.'/urlns.php';



$params = $columns = $totalRecords = $data = array();
$params = $_REQUEST;

$columns = array( 
  0 =>'id',
  1 =>'metaname', 
  2 =>'metaname' ,
  3 =>'metaname' ,
  4 =>'metaname' ,
  5 =>'metaname' ,
  6 =>'metaname' 

);


$where = $sqlTot = $sqlRec = "";
$where .=" WHERE combination_key='SLIDER' ";

  // check search value exist
if( !empty($params['search']['value']) ) { 
  $where .=" WHERE ";

  $where .=" ( title LIKE '%".$params['search']['value']."%'  )  ";    

  // $where .=" metauniqueno LIKE '".$params['search']['value']."%' )";
}else
{
  $where .="    ";

}


  // getting total number records without any search
$sql = "SELECT `id`, `title` , `imageurl`, `date`, `place` FROM `sliders` ";

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


  if(!empty($row[1])){
     $thumbimage_data= 
    '<a href="'.$row[2].'" data-toggle="lightbox">
    <img class="img-thumbnail img-fluid"  src="'.$row[2].'" alt="'.$row[1].'" style="width:50px; padding:0; height:auto;">
    </a>  ';
  }else{
    $thumbimage_data='No Data';
  }

  array_push($table_data, $thumbimage_data);
    
 
 
  array_push($table_data, $row[1]);

  $a='<a  data-toggle="modal" class="xc-viewedit-btn " xc-character="sliderDataLoad" data-target="#editSliderModal" xc-edit="'.$row[0].'">View/Edit</a>  |';
  $a.='<a class="xcdelete"  href="./drop.php?id='.$row[0].'&type=sliders"> Delete</a>';

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
  