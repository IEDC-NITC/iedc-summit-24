<?php
require_once __DIR__."/header.php";
require_once __DIR__."/content-generator.php";

$resource_type=extractRecordList('*','systemconfig_xc',' WHERE metaname = "RESOURCE TYPES" ')
?>

<style type="text/css">
  .xc-card-1 {
    max-width: 800px;
    width: 100%;
    margin: 0 auto;
}
.xc-file-select{
  padding-bottom: 2.25em;
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
            <li class="nav-item"> Resources
            </li>

          </ul>

        </div>
        <div class="card-body">

          <a class="btn btn-primary float-right " data-toggle="modal" data-target="#createResourceModal"> Add New</a>

          <table id="dt-manage-am3" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Sl.no</th>
                <th>Attachment</th>
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
 
require_once __DIR__."/am3_create_form.php";
require_once __DIR__."/am3_edit_form.php";
require_once __DIR__."/footer.php";



?>

<script type="text/javascript">
  $(()=>{

    datatableResponse('dt-manage-am3','am3_response.php',[{ "width": "2%" },{ "width": "20%" },{ "width": "40%" },{ "width": "20%" }]);
    // mbsd_sane_enter_key('#addDevice');

    ajaxFormSendSpl('#createResource','click','#createResourceInit','./am3_create_init.php','post','#ajaxloader',(res)=>{
      document.querySelector('#createResource').reset();

    });


     $('#dt-manage-am3').on('click','.xc-viewedit-btn',  (e)=>{
      $('#editResource [name="xc-editid"]').val(e.target.getAttribute("xc-edit"));

      ajaxJsonTransferAndOutput(
        {'params':{'id':e.target.getAttribute("xc-edit")}
        ,'character': e.target.getAttribute("xc-character") },
        './components_ui.php','post','#ajaxloader',(data)=>{

          $('#editResource [name="title"]').val(data.title);
           $('#editResource [name="resourceCategory"]').val(data.category);
             
       
 
        });

    } );


    ajaxFormSendSpl('#editResource','click','#editResourceInit','./am3_edit_init.php','post','#ajaxloader',(res)=>{

    });



   //  $('#dt-manage-am1').on('keyup','.prioritychanger',xcdelayer( (e)=>{
   //   ajaxJsonTransfer({'priority':e.target.value ,'grabid': e.target.getAttribute("grabid") },'./priority_change.php','post','#ajaxloader');

   // },500));





  });

</script>


