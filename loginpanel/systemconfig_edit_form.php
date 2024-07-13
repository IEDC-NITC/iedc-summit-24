<div class="modal fade" id="edit-sc" tabindex="-1" style="display: none;" aria-hidden="true">
	<form id="systemconfigEdit" >

		<div class="modal-dialog modal-dialog-scrollable">

			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title">Edit System Variable</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">  <span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">

					<input type="hidden" name="xc-editid">
 

					<div class="form-group">
						<label>Config Type:</label>
						<select id="configtype" class="form-control" name="configtype">
		                  <?php
		                  foreach ($sc_variables as $k => $val) {
		                    echo '<option value="'.$val.'">'.$val.'</option>';
		                  }

		                  ?>
		                </select>
					</div>


					<div class="form-group">
						<label>Name/Code:</label>
						<input type="text" id="configname" class="form-control"  name="configname" required>
					</div>

					<div class="form-group ">
						<label>value:</label>

						<div class="configvalueinput">
							<input id="configvalue" required="required"   class="form-control" name="configvalue" type="text" />
							<!-- <input type="file" id="fileup" name="fileup[]" value="Choose a file" accept="image/*" /> -->
						</div>
						
						
					</div>

					 
					 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary " data-dismiss="modal" id="editSystemconfigInit" >Save Changes</button>
				</div>

			</div>

		</div>
	</form>

</div>
