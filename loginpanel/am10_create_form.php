<div class="modal fade" id="createSliderModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <form id="createSlider" >

  <div class="modal-dialog modal-dialog-scrollable">

    <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Create Slider</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">  <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Enter title" name="title">
          </div>

          <div class="form-group">
            <label>Date</label>
            <input type="datetime-local" class="form-control" placeholder="Please select date" name="date">
          </div>

          <div class="form-group">
            <label>Place</label>
            <input type="text" class="form-control" placeholder="Please enter your place" name="place">
          </div>

    

          <div class="form-group" >

           <label>Slider Image:</label>
           <div class="text-center">
             <?php
             $cropBox=array
             (
              "croppername"=>"modelCropper",
              "cropperuploadmsg"=>"Slider Image"
            );

             echo imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]);
             
             ?>
           </div>
         </div>

           
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal" id="createSliderInit" >Save changes</button>
      </div>

  </div>

</div>
      </form>

</div>
