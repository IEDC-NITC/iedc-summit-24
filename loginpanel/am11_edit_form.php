<div class="modal fade" id="editGalleryModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <form id="editGallery" >

  <div class="modal-dialog modal-dialog-scrollable">

    <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Edit Gallery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">  <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          

          <input type="hidden" name="xc-editid">
            
          <div class="form-group">
            <label>Result Text</label>
            <textarea class="form-control" placeholder="Result Text" name="title"></textarea>
          </div>


          <div class="form-group">
            <label>Link</label>
            <input type="text" class="form-control" placeholder="Button Link" name="link">
          </div>

    

          <div class="form-group" >

            <label>Slider Image:</label>
            <div class="text-center">
              <?php
              $cropBox=array
              (
                "croppername"=>"modelCropperEdit",
                "cropperuploadmsg"=>"Slider Image"
              );

              echo imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]);

              ?>
            </div>

        </div>


           
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal" id="editGalleryInit" >Save changes</button>
      </div>

  </div>

</div>
      </form>

</div>
