<?php
require_once __DIR__."/header.php";
require_once __DIR__."/content-generator.php";

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
            <li class="nav-item"> Home Slider
            </li>

          </ul>

        </div>
        <div class="card-body">

          <a class="btn btn-primary float-right " data-toggle="modal" data-target="#createSliderModal"> Add New Slider</a>

          <table id="dt-manage-am10" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Sl.no</th>
                <th>Image</th>
                <th>Title</th>
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
 
require_once __DIR__."/am10_create_form.php";
require_once __DIR__."/am10_edit_form.php";
require_once __DIR__."/footer.php";

/*productCreteImageCropper*/
imgCropperInit(array
 (
  "croppername"=>"modelCropper",
  "size"=>"{width : 1920, height: 655}",
  "vwidth"=>300,
  "vheight"=>102,
  "vtype"=>"square",
  "bwidth"=> 350,
  "bheight"=>250,
  "ajxtype"=>"SLIDERIMAGE",
  "ajxurl"=>"./_dp_push.php",
  "resize"=>"",
  "orientation"=>"true"


));

imgCropperInit(array
 (
  "croppername"=>"modelCropperEdit",
  "size"=>"{width : 1920, height: 655}",
  "vwidth"=>300,
  "vheight"=>102,
  "vtype"=>"square",
  "bwidth"=> 350,
  "bheight"=>250,
  "ajxtype"=>"SLIDERIMAGE",
  "ajxurl"=>"./_dp_push.php",
  "resize"=>"",
  "orientation"=>"true"


));


?>

<script type="text/javascript">
  $(()=>{

    datatableResponse('dt-manage-am10','am10_response.php',[{ "width": "2%" },{ "width": "5%" },{ "width": "65%" },{ "width": "20%" }]);
    // mbsd_sane_enter_key('#addDevice');

    ajaxFormSendSpl('#createSlider','click','#createSliderInit','./am10_create_init.php','post','#ajaxloader',(res)=>{
      document.querySelector('#createSlider').reset();

    });


     $('#dt-manage-am10').on('click','.xc-viewedit-btn',  (e)=>{
      $('#editSlider [name="xc-editid"]').val(e.target.getAttribute("xc-edit"));

      ajaxJsonTransferAndOutput(
        {'params':{'id':e.target.getAttribute("xc-edit")}
        ,'character': e.target.getAttribute("xc-character") },
        './components_ui.php','post','#ajaxloader',(data)=>{

          $('#editSlider [name="title"]').val(data.title);
          $('#editSlider [name="date"]').val(data.date);
          $('#editSlider [name="place"]').val(data.place);
             
          $('#editSlider img.modelCropperEdit-thumb-preview').attr("src",data.imageurl);
 
        });

    } );


    ajaxFormSendSpl('#editSlider','click','#editSliderInit','./am10_edit_init.php','post','#ajaxloader',(res)=>{

    });



   //  $('#dt-manage-am1').on('keyup','.prioritychanger',xcdelayer( (e)=>{
   //   ajaxJsonTransfer({'priority':e.target.value ,'grabid': e.target.getAttribute("grabid") },'./priority_change.php','post','#ajaxloader');

   // },500));





  });

</script>


