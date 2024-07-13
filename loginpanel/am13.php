<?php
require_once __DIR__."/header.php";
require_once __DIR__."/content-generator.php";

$gallery_type=extractRecordList('*','systemconfig_xc',' WHERE metaname = "SPEAKER TYPES" ')
?>

<style type="text/css">
  .xc-card-1 {
    max-width: 800px;
    width: 100%;
    margin: 0 auto;
}
</style>

<!--page-wrapper-->
<div class="page-wrapper">
  <!--page-content-wrapper-->
  <div class="page-content-wrapper">
    <div class="page-content">

      <div class="card   xc-card-1">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item"> Speakers List
            </li>
          </ul>
        </div>
        <div class="card-body">
          <a class="btn btn-primary float-right " data-toggle="modal" data-target="#createSpeakerModal"> Add Speaker</a>
          <table id="dt-manage-am13" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Sl.no</th>
                <th>Image</th>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>

          </table> 

        </div>
      </div>
      
    </div>
  </div>
  <!--end page-content-wrapper-->

</div>
<!--end page-wrapper-->
 

<?php
 
require_once __DIR__."/am13_create_form.php";
require_once __DIR__."/am13_edit_form.php";
require_once __DIR__."/footer.php";

/*productCreteImageCropper*/
imgCropperInit(array
 (
  "croppername"=>"modelCropper",
 "size"=>"{width : 270, height: 330}",
  "vwidth"=>150,
  "vheight"=>183,
  "vtype"=>"square",
  "bwidth"=> 200,
  "bheight"=>250,
  "ajxtype"=>"SPEAKERIMAGE",
  "ajxurl"=>"./_dp_push.php",
  "resize"=>"",
  "orientation"=>"true"


));

imgCropperInit(array
 (
  "croppername"=>"modelCropperEdit",
  "size"=>"{width : 270, height: 330}",
  "vwidth"=>150,
  "vheight"=>183,
  "vtype"=>"square",
  "bwidth"=> 200,
  "bheight"=>250,
  "ajxtype"=>"SPEAKERIMAGE",
  "ajxurl"=>"./_dp_push.php",
  "resize"=>"",
  "orientation"=>"true"


));




?>

<script type="text/javascript">
  $(()=>{

    datatableResponse('dt-manage-am13','am13_response.php',[{ "width": "2%" },{ "width": "13%" },{ "width": "65%" },{ "width": "20%" }]);
    // mbsd_sane_enter_key('#addDevice');

    ajaxFormSendSpl('#createSpeaker','click','#createSpeakerInit','./am13_create_init.php','post','#ajaxloader',(res)=>{
      document.querySelector('#createSpeaker').reset();

    });


     $('#dt-manage-am13').on('click','.xc-viewedit-btn',  (e)=>{
      $('#editSpeaker [name="xc-editid"]').val(e.target.getAttribute("xc-edit"));

      ajaxJsonTransferAndOutput(
        {'params':{'id':e.target.getAttribute("xc-edit")}
        ,'character': e.target.getAttribute("xc-character") },
        './components_ui.php','post','#ajaxloader',(data)=>{

          $('#editSpeaker [name="name"]').val(data.name);
          $('#editSpeaker [name="designation"]').val(data.designation);
             
          $('#editSpeaker img.modelCropperEdit-thumb-preview').attr("src",data.imageurl);
 
        });

    } );


    ajaxFormSendSpl('#editSpeaker','click','#editSpeakerInit','./am13_edit_init.php','post','#ajaxloader',(res)=>{

    });


   //  $('#dt-manage-am1').on('keyup','.prioritychanger',xcdelayer( (e)=>{
   //   ajaxJsonTransfer({'priority':e.target.value ,'grabid': e.target.getAttribute("grabid") },'./priority_change.php','post','#ajaxloader');

   // },500));
  });

</script>


