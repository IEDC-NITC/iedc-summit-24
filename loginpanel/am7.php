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
            <li class="nav-item"> Enquiry List
            </li>

          </ul>

        </div>
        <div class="card-body">

 
          <table id="dt-manage-am7" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Sl.no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
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
 
// require_once __DIR__."/am1_create_form.php";
require_once __DIR__."/am7_edit_form.php";
require_once __DIR__."/footer.php";

 



?>

<script type="text/javascript">
  $(()=>{

    datatableResponse('dt-manage-am7','am7_response.php',[{ "width": "2%" },{ "width": "20%" },{ "width": "25%" },{ "width": "25%" },{ "width": "20%" }]);
    


     $('#dt-manage-am7').on('click','.xc-viewedit-btn',  (e)=>{
      $('#editCourse [name="xc-editid"]').val(e.target.getAttribute("xc-edit"));

      ajaxJsonTransferAndOutput(
        {'params':{'id':e.target.getAttribute("xc-edit")}
        ,'character': e.target.getAttribute("xc-character") },
        './components_ui.php','post','#ajaxloader',(data)=>{

          $('#editCourse [name="name"]').val(data.name);
          $('#editCourse [name="phone"]').val(data.phone);
          $('#editCourse [name="email"]').val(data.email);
          $('#editCourse [name="subject"]').val(data.subject);
          $('#editCourse [name="message"]').val(data.message);
            
 
        });

    } );

 



 



  });

</script>


