<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';
require_once __DIR__.'/../bpcore/htmlentitygenerator.php';

if(isset($_REQUEST['character'])){
	call_user_func_array($_REQUEST['character'],$_REQUEST['params']);
}

if(isset($_REQUEST['characters'])){
	foreach ($_REQUEST['characters'] as $key => $value) {
		call_user_func_array($value["trigger"],$value["params"]);
	}
}

$outputs=[];

function subCategoryLoadData($p){

	$categories_data=extractRecordList('*','course_categories',' WHERE `parent` = "'.$p.'" ');

	$output='<label>Sub Category:</label>'.mapArraytoSelectValueName($categories_data,'uid','category_name',' name="csubparent" class="form-control" id="cSubCategorySelect"','Categories','NO-DEFAULT',"Sub Category");

	$a=["1","success!",$output];

	echo json_encode($a);


}


function subscribeCourse($studentId,$courseId,$payeetype){
	$coursedata=extractRecord('*','id',$courseId,'courses');
	$studentdata=extractRecord('*','id',$studentId,'students');

 		 
    $subscribe_sql = sql_query_raw("insert into student_subscribed_courses (
        student_id,
        course_id,
        course_expiry_date,
        fee_paid,
        payeetype
    )values(
        '".$studentdata[0]['student_id']."',
        '$courseId',
         NOW() + INTERVAL 365 DAY,
        '".$coursedata[0]['course_fee']."',
        '$payeetype'

    )
    
    ON DUPLICATE KEY UPDATE course_expiry_date =NOW() + INTERVAL 365 DAY
    ");

 

	$a=["1","success!"];

	echo json_encode($a);


}

function sendCertPasscode($studentid,$courseid){
	require_once __DIR__.'/../bpcore/mailer.php';
	
	$studentdata=extractRecord('*','id',$studentid,'students');
	$coursedata=extractRecord('*','id',$courseid,'courses');
	$ssc=extractRecord('*','course_id',$courseid,'student_subscribed_courses',' AND student_id="'.$studentdata[0]["student_id"].'"');
	if(empty($ssc[0]["certificate_file_url"])){
		$otp = rand(100000, 999999);
		$certid=uniqid();
		update_value($otp,'student_subscribed_courses','certificate_unlock_password','student_id',$studentdata[0]["student_id"],'s',' AND course_id = "'.$courseid.'"');

		update_value($certid,'student_subscribed_courses','certificate_file_url','student_id',$studentdata[0]["student_id"],'s',' AND course_id = "'.$courseid.'"');
	}else{
		$otp = $ssc[0]["certificate_unlock_password"];
		$certid=$ssc[0]["certificate_file_url"];

	}
	

	ob_start();
	require_once __DIR__.'/../certls/certcontent.php';
	$mailcontent = ob_get_clean();

	$output=sendCertMail(
		$studentdata[0]["email_id"],
		'support@xctllp.com',
		'Lifescool',
		$mailcontent,
		"LIFESCOOL.APP | ".date('Y')." | CERTIFICATE OF COMPLETION |".$coursedata[0]['course_name_mal']." | ".$certid,
		$certid);

	$a=["1","success!",$output];

	echo json_encode($a);


}

// sendCertPasscode('ss','ss');



function updateVideoUrl($p1,$p2,$p3,$p4)
{
	update_value($p2,'course_chapters','video_url','uid',$p1);
	update_value($p3,'course_chapters','thumbnail_url','uid',$p1);
	if( is_numeric($p4)){
		$minutes=$p4/60;


	}
	update_value(ceil($minutes),'course_chapters','video_duration','uid',$p1);
	$output="";
	$a=["1","success!",$output];

	echo json_encode($a);

}


function categoryDataLoad($p1)
{

	$data=extractRecord('*','id',$p1,'course_categories');
	$output="";
	$a=["1","success!",$data[0]];

	echo json_encode($a);


}

function facultyDataLoad($p1)
{

	$data=extractRecord('*','id',$p1,'authors');
	$output="";
	$a=["1","success!",$data[0]];

	echo json_encode($a);


}

function courseDataLoad($p1)
{

	$data=extractRecord('*','id',$p1,'courses');
	$data[0]["course_contents"]=hscDecode($data[0]["course_contents"]);
	$data[0]["course_requirements"]=hscDecode($data[0]["course_requirements"]);
	$data[0]["live_projects"]=hscDecode($data[0]["live_projects"]);
	$data[0]["course_features"]=hscDecode($data[0]["course_features"]);
	$output="";
	$a=["1","success!",$data[0]];

	echo json_encode($a);


}


function workshopDataLoad($p1)
{

	$data=extractRecord('*','id',$p1,'workshops');
	$data[0]["workshop_features"]=hscDecode($data[0]["workshop_features"]);
	$data[0]["workshop_requirements"]=hscDecode($data[0]["workshop_requirements"]);

	$output="";
	$a=["1","success!",$data[0]];

	echo json_encode($a);


}


function chapterDataLoad($p1)
{

	$data=extractRecord('*','id',$p1,'course_chapters');
	$data[0]["chapter_synopsis"]=hscDecode($data[0]["chapter_synopsis"]);

	$output="";
 	// $a=["1","success!",$data[0]];
	global $outputs;

	$outputs[0]=$data[0];
	// echo json_encode($a);


}


function chapterFilesCreateModalDataLoad($p1)
{

	
	$data=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery','AND metatype="'.$p1.'"');

	if(is_array($data)){
		$datalength= count($data);
	}else{
		$datalength=0;
	}
	$output='

	<span>Unsaved '.(( !is_array($data) )? "No files" :(( $datalength>1)? $datalength." files":" 1 file")) .' attached </span>

	<ul class="list-group  ">

	';


	if(is_array($data)) {              

		foreach ($data as $key => $value) {

			$fname= (strlen($value["metaname"]) >30)? substr($value["metaname"], 0,30)."..." : $value["metaname"];
			$output.='
			<li class="list-group-item">
			<span>'.($key+1).'. </span>
			<span>'.$fname.'</span>
			<span style="float:right"><a class="xcdelete" href="./drop.php?id='.$value["id"].'&type=media_gallery"> Delete</a></span>
			</li>
			';


		}
	}
	$output.='

	</ul>
	';


	$a=["1","success!",$output];

	echo json_encode($a);



}


function chapterFilesEditModalDataLoad($p1,$p2,$p3="COMPLEX")
{

	
	$data=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery','AND metatype="'.$p1.'"');
	$data2=extractRecord('*','chapter_id',$p2,'chapter_files');

	if(is_array($data)){
		$datalength= count($data);
	}else{
		$datalength=0;
	}

	if(is_array($data2)){
		$datalength2= count($data2);
	}else{
		$datalength2=0;
	}



	$output='

	<span>Unsaved '.(( !is_array($data) )? "No files" :(( $datalength>1)? $datalength." files":" 1 file")) .' attached </span>


	';






	$output.='	<ul class="list-group  ">
	';
	if(is_array($data)) {              

		foreach ($data as $key => $value) {

			$fname= (strlen($value["metaname"]) >30)? substr($value["metaname"], 0,30)."..." : $value["metaname"];
			$output.='
			<li class="list-group-item">
			<span>'.($key+1).'. </span>
			<span>'.$fname.'</span>
			<span style="float:right"><a class="xcdelete" href="./drop.php?id='.$value["id"].'&type=media_gallery"> Delete</a></span>
			</li>
			';


		}
	}
	$output.='

	</ul>
	';

	$output.='

	<hr>
	
	<span> '.(( !is_array($data2) )? "No files" :(( $datalength2>1)? $datalength2." files":" 1 file")) .' attached   </span>


	';


	$output.='	<ul class="list-group  ">
	';
	if(is_array($data2)) {              

		foreach ($data2 as $key => $value) {

			$fname= (strlen($value["file_name"]) >30)? substr($value["file_name"], 0,30)."..." : $value["file_name"];
			$output.='
			<li class="list-group-item">
			<span>'.($key+1).'. </span>
			<span>'.$fname.'</span>
			<span style="float:right"><a class="xcdelete" href="./drop.php?id='.$value["id"].'&type=chapter_files"> Delete</a></span>
			</li>
			';


		}
	}
	$output.='

	</ul>
	';


	if($p3 !="COMPLEX"){

		$a=["1","success!", $output];

	}else{

		global $outputs;
		$outputs[1] =$output;
		$a=["1","success!", $outputs];

	}
	echo json_encode($a);



}


function featureDataLoad($p1="",$p2="WFEATURES")
{

	
	$data=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery','AND metatype="'.$p2.'"');


	if(is_array($data)){
		$datalength= count($data);
	}else{
		$datalength=0;
	}
	$output='

	<span>Unsaved '.(( !is_array($data) )? "No items" :(( $datalength>1)? $datalength." items":" 1 item")) .' attached </span>

	<ul class="list-group  ">

	';


	if(is_array($data)) {              

		foreach ($data as $key => $value) {
			$kf=json_decode($value["metacontent"]);
			$output.='
			<li class="list-group-item">
			<span>'.($key+1).'. </span>
			<span><img width="20px" src="'.existOrEmpty($kf->{"icon"}).'" />'.existOrEmpty($kf->{"text"}).'</span>
			<span style="float:right"><a class="xcdelete" href="./drop.php?id='.$value["id"].'&type=media_gallery"> Delete</a></span>
			</li>
			';


		}
	}
	$output.='

	</ul>
	';

	if($p1 != 1){


		$data=extractRecord('*','referkeyid',$p1,'media_gallery','AND metatype="'.$p2.'"');


		if(is_array($data)){
			$datalength= count($data);
		}else{
			$datalength=0;
		}
		$output.='

		<span>Saved '.(( !is_array($data) )? "No items" :(( $datalength>1)? $datalength." items":" 1 item")) .' attached </span>

		<ul class="list-group  ">

		';


		if(is_array($data)) {              

			foreach ($data as $key => $value) {
				$kf=json_decode($value["metacontent"]);

				$output.='
				<li class="list-group-item">
				<span>'.($key+1).'. </span>
				<span><img width="20px" src="'.$kf->{"icon"}.'" />'.$kf->{"text"}.'</span>
				<span style="float:right"><a class="xcdelete" href="./drop.php?id='.$value["id"].'&type=media_gallery"> Delete</a></span>
				</li>
				';


			}
		}
		$output.='

		</ul>
		';



	}


	$a=["1","success!",$output];

	echo json_encode($a);



}


function liveProjectDataLoad($p1="",$p2="CLIVEPROJECT")
{

	
	$data=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery','AND metatype="'.$p2.'"');


	if(is_array($data)){
		$datalength= count($data);
	}else{
		$datalength=0;
	}
	$output='

	<span>Unsaved '.(( !is_array($data) )? "No items" :(( $datalength>1)? $datalength." items":" 1 item")) .' attached </span>

	<ul class="list-group  ">

	';


	if(is_array($data)) {              

		foreach ($data as $key => $value) {
			$kf=json_decode($value["metacontent"]);
			$output.='
			<li class="list-group-item">
			<span>'.($key+1).'. </span>
			<span><img width="20px" src="'.existOrEmpty($kf->{"icon"}).'" />'.existOrEmpty($kf->{"text"}).'</span>
			<span style="float:right"><a class="xcdelete" href="./drop.php?id='.$value["id"].'&type=media_gallery"> Delete</a></span>
			</li>
			';


		}
	}
	$output.='

	</ul>
	';

	if($p1 != 1){


		$data=extractRecord('*','referkeyid',$p1,'media_gallery','AND metatype="'.$p2.'"');


		if(is_array($data)){
			$datalength= count($data);
		}else{
			$datalength=0;
		}
		$output.='

		<span>Saved '.(( !is_array($data) )? "No items" :(( $datalength>1)? $datalength." items":" 1 item")) .' attached </span>

		<ul class="list-group  ">

		';


		if(is_array($data)) {              

			foreach ($data as $key => $value) {
				$kf=json_decode($value["metacontent"]);

				$output.='
				<li class="list-group-item">
				<span>'.($key+1).'. </span>
				<span><img width="20px" src="'.$kf->{"icon"}.'" />'.$kf->{"text"}.'</span>
				<span style="float:right"><a class="xcdelete" href="./drop.php?id='.$value["id"].'&type=media_gallery"> Delete</a></span>
				</li>
				';


			}
		}
		$output.='

		</ul>
		';



	}


	$a=["1","success!",$output];

	echo json_encode($a);



}

function requireDataLoad($p1="",$p2="WREQUIRE")
{

	
	$data=extractRecord('*','status',UNSAVEDSTATUS_PARAM,'media_gallery','AND metatype="'.$p2.'"');

	if(is_array($data)){
		$datalength= count($data);
	}else{
		$datalength=0;
	}
	$output='

	<span>Unsaved '.(( !is_array($data) )? "No items" :(( $datalength>1)? $datalength." items":" 1 item")) .' attached </span>

	<ul class="list-group  ">

	';


	if(is_array($data)) {              

		foreach ($data as $key => $value) {
			$output.='
			<li class="list-group-item">
			<span>'.($key+1).'. </span>
			<span> '.$value["metacontent"].'</span>
			<span style="float:right"><a class="xcdelete" href="./drop.php?id='.$value["id"].'&type=media_gallery"> Delete</a></span>
			</li>
			';


		}
	}
	$output.='

	</ul>
	';


	if($p1 != 1){


		$data=extractRecord('*','referkeyid',$p1,'media_gallery','AND metatype="'.$p2.'"');


		if(is_array($data)){
			$datalength= count($data);
		}else{
			$datalength=0;
		}
		$output.='

		<span>Saved '.(( !is_array($data) )? "No items" :(( $datalength>1)? $datalength." items":" 1 item")) .' attached </span>

		<ul class="list-group  ">

		';


		if(is_array($data)) {              

			foreach ($data as $key => $value) {
				$kf=json_decode($value["metacontent"]);

				$output.='
				<li class="list-group-item">
				<span>'.($key+1).'. </span>
				<span> '.$value["metacontent"].'</span>
				<span style="float:right"><a class="xcdelete" href="./drop.php?id='.$value["id"].'&type=media_gallery"> Delete</a></span>
				</li>
				';


			}
		}
		$output.='

		</ul>
		';



	}




	$a=["1","success!",$output];

	echo json_encode($a);



}




//Deepanjali

function bookingDataLoad($p1)
{

	$data=extractRecord('*','booking_id',$p1,'bookings');
	$output="";
	$a=["1","success!",$data[0]];

	echo json_encode($a);


}



function userDataLoad($p1)
{

	$data=extractRecord('*','userid',$p1,'members');
	$output="";
	$a=["1","success!",$data[0]];

	echo json_encode($a);


}



function systemconfigDataLoad($p1)
{

	$data=extractRecord('*','sc_id',$p1,'systemconfig_xc');
	$output="";
	$a=["1","success!",$data[0]];

	echo json_encode($a);


}

function testimonialDataLoad($p1)
{

	$data=extractRecord('*','uid',$p1,'content_xc');
	$output="";
	$a=["1","success!",$data[0]];

	echo json_encode($a);


}

function promoDataLoad($p1)
{

	$data=extractRecord('*','uid',$p1,'coupons');
	$output="";
	$a=["1","success!",$data[0]];

	echo json_encode($a);


}


function updatePrice($p1)
{
			
		$data=extractRecord('*','combination_key','PRICE','content_xc');

		if(is_array($data)){

			update_value(hscEncode($p1),'content_xc','price','combination_key','PRICE' );

		}
		else{

			$gen_id = gen_uuid();

			sql_query_raw('

		      INSERT INTO `content_xc`
		      ( 
		      `uid`,
		      `price`,
		      `combination_key`

		      ) 
		      VALUES 
		      (
		      "'.$gen_id.'" ,
		      "'.hscEncode($p1).'" ,
		      "PRICE" 


		    )');

		}


	 
 	 
	$output="";
	$a=["1","success!",$output];

	echo json_encode($a);

}


function summitDataLoad($p1)
{

	$data=extractRecord('*','id',$p1,'summit');
	$data[0]["year"]=hscDecode($data[0]["year"]);
	$data[0]["location"]=hscDecode($data[0]["location"]);
	$data[0]["slug"]=hscDecode($data[0]["slug"]);
	$data[0]["start_date"]=hscDecode($data[0]["start_date"]);
	$data[0]["end_date"]=hscDecode($data[0]["end_date"]);
	 

	$output="";

	$a=["1","success!",$data[0]];

	echo json_encode($a);

}


function galleryDataLoad($p1){

	$data=extractRecord('*','id',$p1,'gallery');

	$data[0]["title"]=hscDecode($data[0]["title"]);
	$data[0]["category"]=hscDecode($data[0]["category"]);

	$output="";
	$a=["1","success!",$data[0]];

	echo json_encode($a);
}

function speakerDataLoad($p1){

	$data=extractRecord('*','id',$p1,'speaker');

	$data[0]["name"]=hscDecode($data[0]["name"]);
	$data[0]["designation"]=hscDecode($data[0]["designation"]);

	$output="";
	$a=["1","success!",$data[0]];

	echo json_encode($a);
}

function resourceDataLoad($p1){

	$data=extractRecord('*','id',$p1,'files');

	$data[0]["title"]=hscDecode($data[0]["title"]);

	$output="";

	$a=["1","success!",$data[0]];

	echo json_encode($a);
}


function filesDataLoad($p1){

	$data=extractRecord('*','id',$p1,'files');

	$data[0]["title"]=hscDecode($data[0]["title"]);
	$data[0]["category"]=hscDecode($data[0]["category"]);

	$output="";

	$a=["1","success!",$data[0]];

	echo json_encode($a);
}


function notificationsDataLoad($p1){

	$data=extractRecord('*','id',$p1,'notifications');

	$data[0]["title"]=hscDecode($data[0]["title"]);
	$data[0]["links"]=hscDecode($data[0]["links"]);

	$output="";

	$a=["1","success!",$data[0]];

	echo json_encode($a);
}

function enquiryDataLoad($p1){

	$data=extractRecord('*','id',$p1,'enquiry');

	$data[0]["name"]=hscDecode($data[0]["name"]);
	$data[0]["phone"]=hscDecode($data[0]["phone"]);
	$data[0]["email"]=hscDecode($data[0]["email"]);
	$data[0]["subject"]=hscDecode($data[0]["subject"]);
	$data[0]["message"]=hscDecode($data[0]["message"]);

	$output="";

	$a=["1","success!",$data[0]];

	echo json_encode($a);
}

function sliderDataLoad($p1){

	$data=extractRecord('*','id',$p1,'sliders');

	$data[0]["title"]=hscDecode($data[0]["title"]);
	$data[0]["date"]=hscDecode($data[0]["date"]);
	$data[0]["place"]=hscDecode($data[0]["place"]);
 
	$output="";

	$a=["1","success!",$data[0]];

	echo json_encode($a);
}



?>