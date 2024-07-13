<?php
require_once __DIR__."/header.php";
require_once __DIR__."/content-generator.php";

$gallery_type=extractRecordList('*','systemconfig_xc',' WHERE metaname = "SUMMIT TYPES" ')
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
            <li class="nav-item"> Summit List
            </li>
          </ul>
        </div>
        <div class="card-body">
          <a class="btn btn-primary float-right " data-toggle="modal" data-target="#createSummitModal"> Add Summit</a>
          <table id="dt-manage-am1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Sl.no</th>
                <th>Location</th>
                <th>Start Date</th>
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
 
require_once __DIR__."/am1_create_form.php";
require_once __DIR__."/am1_edit_form.php";
require_once __DIR__."/footer.php";

/*productCreteImageCropper*/

?>

<script type="text/javascript">
  $(()=>{

    datatableResponse('dt-manage-am1','am1_response.php',[{ "width": "2%" },{ "width": "13%" },{ "width": "65%" },{ "width": "20%" }]);
    // mbsd_sane_enter_key('#addDevice');

    ajaxFormSend('#createSummit','click','#createSummitInit','./am1_create_init.php','post','#ajaxloader',(res)=>{
      document.querySelector('#createSpeaker').reset();

    });


     $('#dt-manage-am1').on('click','.xc-viewedit-btn',  (e)=>{
      $('#editSummit [name="xc-editid"]').val(e.target.getAttribute("xc-edit"));

      ajaxJsonTransferAndOutput(
        {'params':{'id':e.target.getAttribute("xc-edit")}
        ,'character': e.target.getAttribute("xc-character") },
        './components_ui.php','post','#ajaxloader',(data)=>{

          $('#editSummit [name="year"]').val(data.year);
          $('#editSummit [name="location"]').val(data.location);
          $('#editSummit [name="start_date"]').val(data.start_date);
          $('#editSummit [name="end_date"]').val(data.end_date);
          $('#editSummit [name="youtube"]').val(data.youtube);   
 
        });

    } );


    ajaxFormSend('#editSummit','click','#editSummitInit','./am1_edit_init.php','post','#ajaxloader',(res)=>{

    });


   //  $('#dt-manage-am1').on('keyup','.prioritychanger',xcdelayer( (e)=>{
   //   ajaxJsonTransfer({'priority':e.target.value ,'grabid': e.target.getAttribute("grabid") },'./priority_change.php','post','#ajaxloader');

   // },500));
  });

</script>


