<div class="modal fade" id="createSpeakerModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <form id="createSpeaker" >

  <div class="modal-dialog modal-dialog-scrollable">

    <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Create Speaker Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">  <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Please enter name" name="name">
          </div>

          <div class="form-group">
            <label>Designattion</label>
            <input type="text" class="form-control" placeholder="Enter your Position" name="designation">
          </div>  

          <div class="form-group" >

           <label>Speaker Image:</label>
           <div class="text-center">
             <?php
             $cropBox=array
             (
              "croppername"=>"modelCropper",
              "cropperuploadmsg"=>"Speaker Image"
            );

             echo imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]);
             
             ?>
           </div>
         </div>

           
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal" id="createSpeakerInit" >Save changes</button>
      </div>

  </div>

</div>
      </form>

</div>
