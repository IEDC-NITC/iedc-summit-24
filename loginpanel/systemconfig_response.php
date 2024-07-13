<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';
// require_once __DIR__.'/urlns.php';


 

	// initilize all variable
$params = $columns = $totalRecords = $data = array();

$params = $_REQUEST;

	//define index of column
$columns = array( 
	0 =>'metaname',
	1 =>'metaname', 
	2 =>'metaname' ,
	3 =>'metaname' 

);

$where = $sqlTot = $sqlRec = "";

	// check search value exist
if( !empty($params['search']['value']) ) {   
	$where .=" WHERE  ";
	$where .=" ( metaname LIKE '%".$params['search']['value']."%' OR  ";    
		// $where .=" OR pic LIKE '".$params['search']['value']."%' ";

	$where .=" configname LIKE '".$params['search']['value']."%' )";
}else
{
		$where .="    ";

}


	// getting total number records without any search
$sql = "SELECT id,configname,configvalue,metaname,sc_id FROM `systemconfig_xc` ";
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
	 
	array_push($table_data, $row[1]);
	array_push($table_data, $row[2]);
	array_push($table_data, $row[3]);

	// $a='<a class="scselector btn-link" href scid='.$row[0].'">Delete</a></td>';
	$a='<a class="scselector xc-viewedit-btn" xc-character="systemconfigDataLoad" data-toggle="modal" href data-target="#edit-sc" xc-edit="'.$row[4].'">View/Edit</a> | ';

	$a.='<a class="xcdelete"  href="./drop.php?id='.$row[0].'&type=systemconfig_xc"> Delete</a>';

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
	