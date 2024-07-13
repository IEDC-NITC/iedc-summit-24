<?php
require_once __DIR__."/header.php";
require_once __DIR__."/content-generator.php";

$gallery_type=extractRecordList('*','systemconfig_xc',' WHERE metaname = "GALLERY TYPES" ')
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



      <div class="card  ">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item"> Gallery List <small>( Image will be displayed in descending order of priority )</small>
            </li>

          </ul>

        </div>
        <div class="card-body">

          <a class="btn btn-primary float-right " data-toggle="modal" data-target="#createGalleryModal"> Add New Image</a>

          <table id="dt-manage-am2" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Sl.no</th>
                <th>Image</th>
                <th>Title</th>
                <th>Priority</th>
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
 
require_once __DIR__."/am2_create_form.php";
require_once __DIR__."/am2_edit_form.php";
require_once __DIR__."/footer.php";

/*productCreteImageCropper*/
imgCropperInit(array
 (
  "croppername"=>"modelCropper",
 "size"=>"{width : 480, height: 320}",
  "vwidth"=>150,
  "vheight"=>100,
  "vtype"=>"square",
  "bwidth"=> 200,
  "bheight"=>200,
  "ajxtype"=>"GALLERYIMAGE",
  "ajxurl"=>"./_dp_push.php",
  "resize"=>"",
  "orientation"=>"true"


));

imgCropperInit(array
 (
  "croppername"=>"modelCropperEdit",
  "size"=>"{width : 480, height: 320}",
  "vwidth"=>150,
  "vheight"=>100,
  "vtype"=>"square",
  "bwidth"=> 200,
  "bheight"=>200,
  "ajxtype"=>"GALLERYIMAGE",
  "ajxurl"=>"./_dp_push.php",
  "resize"=>"",
  "orientation"=>"true"


));




?>

<script type="text/javascript">
  $(()=>{

    datatableResponse('dt-manage-am2','am2_response.php',[{ "width": "2%" },{ "width": "5%" },{ "width": "65%" },{ "width": "10%" },{ "width": "20%" }]);
    // mbsd_sane_enter_key('#addDevice');

    ajaxFormSendSpl('#createGallery','click','#createGalleryInit','./am2_create_init.php','post','#ajaxloader',(res)=>{
      document.querySelector('#createGallery').reset();

    });


     $('#dt-manage-am2').on('click','.xc-viewedit-btn',  (e)=>{
      $('#editGallery [name="xc-editid"]').val(e.target.getAttribute("xc-edit"));

      ajaxJsonTransferAndOutput(
        {'params':{'id':e.target.getAttribute("xc-edit")}
        ,'character': e.target.getAttribute("xc-character") },
        './components_ui.php','post','#ajaxloader',(data)=>{

          $('#editGallery [name="title"]').val(data.title);
          $('#editGallery [name="galleryCategory"]').val(data.category);
             
          $('#editGallery img.modelCropperEdit-thumb-preview').attr("src",data.imageurl);
 
        });

    } );


    ajaxFormSendSpl('#editGallery','click','#editGalleryInit','./am2_edit_init.php','post','#ajaxloader',(res)=>{

    });




   $('table').on('keyup','.prioritychanger',xcdelayer( (e)=>{
     ajaxJsonTransfer({'priority':e.target.value ,'grabid': e.target.getAttribute("grabid"),'grabtable': e.target.getAttribute("grabtable") },'./priority_change.php','post','#ajaxloader');

   },500));





  });

</script>


