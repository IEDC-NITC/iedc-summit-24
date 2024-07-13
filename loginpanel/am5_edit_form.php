<div class="modal fade" id="editResourceModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <form id="editResource" >

  <div class="modal-dialog modal-dialog-scrollable">

    <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Edit Monthly Roundups</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">  <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">

          <input type="hidden" name="xc-editid">

          <div class="form-group">

            <label>Title</label>

            <input type="text" class="form-control" placeholder="Title" name="title">

          </div>


          <div class="form-group">

            <label>Attachments</label>
             
            <input type="file" name="upload_file[]" class="form-control xc-file-select" accept="application/pdf">

          </div>


           
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal" id="editResourceInit" >Save changes</button>
      </div>

  </div>

</div>
      </form>

</div>
