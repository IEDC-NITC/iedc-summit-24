<div class="modal fade" id="editSummitModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <form id="editSummit" >

		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">

				<div class="modal-header">
				<h5 class="modal-title">Edit Summit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">  <span aria-hidden="true">×</span>
				</button>
				</div>	
				 
				<div class="modal-body">
					<input type="hidden" name="xc-editid">
					<div class="form-group">
						<label>Year</label>
						<input type="text" class="form-control" placeholder="Please enter year" name="year">
					</div>

					<div class="form-group">
						<label>Location</label>
						<input type="text" class="form-control" placeholder="Enter your Location" name="location">
					</div>  
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Start Date</label>
						<input type="date" class="form-control" placeholder="Start date" name="start_date">
					</div>  
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>End Date</label>
						<input type="date" class="form-control" placeholder="End date" name="end_date">
					</div> 
				</div>
			</div>

					<div class="form-group">
						<label>Youtube Embedded Code</label>
						<textarea class="form-control" name="youtube"></textarea>
					</div>   
					
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="editSummitInit" >Save changes</button>
				</div>

			</div>
		</div>
    </form>

</div>
