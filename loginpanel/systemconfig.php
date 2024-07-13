<?php
require_once __DIR__."/header.php";
require_once __DIR__."/content-generator.php";


$sc_variables=Array(
  0 => '--SELECT ONE--',
  1 => 'USERTYPES',
  2 => 'GALLERY TYPES',
  3 => 'RESOURCE TYPES',
  4 => 'RESULT TYPES',
  5 => 'TEAM TYPES'

  
);


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
-->





<style type="text/css">
  .xc-card-1 {
    max-width: 800px;
    width: 100%;
    margin: 0 auto;

  }
  .modal label {
    font-weight: 800;
    font-family: 'Nunito';
    color: #404040;
  }


</style>



<!--page-wrapper-->
<div class="page-wrapper">
  <!--page-content-wrapper-->
  <div class="page-content-wrapper">
    <div class="page-content">

      

     <div class="row">
      <div class="col-sm-12">
        <!-- <a class="btn btn-success   " href=" "> Goto Checkin Requests</a> -->

        

      </div>
    </div>
    <hr>
    <div class="row">

      <div class="col-sm-12">

       <div class="card   xc-card-1">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">  System Configuration

       </li>


     </ul>

   </div>
   <div class="card-body">


    <a class="btn btn-primary float-right createCourse " data-toggle="modal" data-target="#new-sc"> Add New System Variable</a>

    <table id="dt-manage-systemconfig" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Sl.no</th>
          <th>Config Name</th>
          <th>Config Value</th>
          <th>Config Type</th>
          <th>Action</th>
        </tr>
      </thead>

    </table> 



  </div>
</div>

</div>

</div>
</div>
</div>
<!--end page-content-wrapper-->



</div>
<!--end page-wrapper-->


<?php

require_once __DIR__."/systemconfig_create_form.php";
require_once __DIR__."/systemconfig_edit_form.php";
require_once __DIR__."/footer.php";




?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js" integrity="sha512-ZESy0bnJYbtgTNGlAD+C2hIZCt4jKGF41T5jZnIXy4oP8CQqcrBGWyxNP16z70z/5Xy6TS/nUZ026WmvOcjNIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script type="text/javascript">
  


  let configtype=$('#configtype');
  let configvalue_insert=$('.configvalueinput');
  let datatable_element=$('#dt-manage-systemconfig');
  let edit_element=document.querySelector('#dt-manage-systemconfig a.scselector');


  configtype.change(()=>{

  let valuetype=configtype.val();

  switch(valuetype){


    case 'TEST1':
    configvalue_insert.html(`<input type="file" id="fileup" name="fileup[]" value="Choose a file" accept="image/*,application/pdf" />`);
    break;


    case 'TEST2':
    configvalue_insert.html(`



      <input  required="required" placeholder=" Labitem Name  "  class="form-control" name="labitem" type="text" />
      <input  required="required" placeholder="Rate"  class="form-control" name="labrate" type="text" />
      `);

    break;

    default:
    configvalue_insert.html(`<input id="configvalue" required="required"   class="form-control" name="configvalue" type="text" />`);


  }



});



</script>




<script type="text/javascript">

  function reloadCourseList(action="featureDataLoad",params={"none":"1"},filler="#createWorkshopModal .featureFillerCreateWorkshopModal"){
   ajaxJsonTransferAndOutput(
    {'characters': 
    {
      "0":{"trigger": action ,"params":params}
    }
  },
  './components_ui.php','post','#ajaxloader',(data)=>{

    $(filler).html(data);


  });
 }

 $(()=>{




  datatableResponse('dt-manage-systemconfig','systemconfig_response.php',[{ "width": "2%" },{ "width": "20%" },{ "width": "20%" },{ "width": "20%" },{ "width": "20%" }]);
  
    // mbsd_sane_enter_key('#addDevice');

  ajaxFormSendSpl('#systemconfigCreate','click','#createSystemconfigInit','./systemconfig_create_variable.php','post','#ajaxloader',(res)=>{
      document.querySelector('#systemconfigCreate').reset();

  });
 


    $('#dt-manage-systemconfig').on('click','.xc-viewedit-btn',  (e)=>{

      $('#systemconfigEdit [name="xc-editid"]').val(e.target.getAttribute("xc-edit"));

      ajaxJsonTransferAndOutput(
        {'params':{'id':e.target.getAttribute("xc-edit")}
        ,'character': e.target.getAttribute("xc-character") },
        './components_ui.php','post','#ajaxloader',(data)=>{


          $('#systemconfigEdit [name="configname"]').val(data.configname);
          $('#systemconfigEdit [name="configvalue"]').val(data.configvalue);
          $('#systemconfigEdit [name="xc-editid"]').val(data.sc_id);
          $('#systemconfigEdit [name="configtype"]').val((data.metaname=="none")? "": data.metaname).change();

        });

      

    });


    ajaxFormSendSpl('#systemconfigEdit','click','#editSystemconfigInit','./systemconfig_edit_init.php','post','#ajaxloader',(res)=>{

  });












   //  $('#dt-manage-am1').on('keyup','.prioritychanger',xcdelayer( (e)=>{
   //   ajaxJsonTransfer({'priority':e.target.value ,'grabid': e.target.getAttribute("grabid") },'./priority_change.php','post','#ajaxloader');

   // },500));








 });

</script>



