<?php
require_once __DIR__."/header.php";
require_once __DIR__."/content-generator.php";

$users=extractRecordList('*','systemconfig_xc',' WHERE metaname = "USERTYPES" ')

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
            <li class="nav-item">  Users
       </li>


     </ul>

   </div>
   <div class="card-body">


    <a class="btn btn-primary float-right createCourse " data-toggle="modal" data-target="#new-user"> Add User</a>

    <table id="dt-manage-user" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Sl.no</th>
          <th>Username</th>
          <th>Email</th>
          <th>User Type</th>
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

require_once __DIR__."/user_create_form.php";
require_once __DIR__."/user_edit_form.php";
require_once __DIR__."/footer.php";




?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js" integrity="sha512-ZESy0bnJYbtgTNGlAD+C2hIZCt4jKGF41T5jZnIXy4oP8CQqcrBGWyxNP16z70z/5Xy6TS/nUZ026WmvOcjNIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript">


  




  

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




  datatableResponse('dt-manage-user','user_response.php',[{ "width": "2%" },{ "width": "20%" },{ "width": "20%" },{ "width": "20%" },{ "width": "20%" }]);
  
    // mbsd_sane_enter_key('#addDevice');


  // ajaxFormSendSpl('#userCreate','click','.submit','./user_create.php','post','#ajaxloader',()=>{
  //   document.querySelector('#new-user form').reset();
  // });
     
 


    $('#dt-manage-user').on('click','.xc-viewedit-btn',  (e)=>{

      // $('#editBookingModal [name="xc-editid"]').val(e.target.getAttribute("xc-edit"));

      ajaxJsonTransferAndOutput(
        {'params':{'id':e.target.getAttribute("xc-edit")}
        ,'character': e.target.getAttribute("xc-character") },
        './components_ui.php','post','#ajaxloader',(data)=>{


          $('#userEdit [name="name"]').val(data.username);
          $('#userEdit [name="xc_editid"]').val(data.userid);
          $('#userEdit [name="useremail"]').val(data.email);
          $('#userEdit [name="phone"]').val(data.phone_number);

          $('#userEdit [name="usertype"]').val((data.user_type=="none")? "": data.user_type).change();

        });

      

    });




    // ajaxFormSend('#editCourse','click','#editCourseInit','./am7_edit_init.php','post','#ajaxloader',(res)=>{









   //  $('#dt-manage-am7').on('keyup','.prioritychanger',xcdelayer( (e)=>{
   //   ajaxJsonTransfer({'priority':e.target.value ,'grabid': e.target.getAttribute("grabid") },'./priority_change.php','post','#ajaxloader');

   // },500));








 });

</script>



