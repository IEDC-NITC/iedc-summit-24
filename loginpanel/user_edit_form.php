<div class="modal fade" id="edit-user" tabindex="-1" style="display: none;" aria-hidden="true">
	<form id="userEdit" >

		<div class="modal-dialog modal-dialog-scrollable">

			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title">Edit User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">  <span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">

					<input type="hidden" name="xc_editid">

					

					<div class="form-group">
						<label>Name</label>
						<input type="text" id="name" class="form-control"  name="name" autocomplete="off" required>
					</div>

					<div class="form-group">
						<label>User Category:</label>
						<select id="usertype" class="form-control" name="usertype">
		                  <?php
		                  foreach ($users as $k => $val) {
		                    echo '<option value="'.$val['configname'].'">'.$val['configname'].'</option>';
		                  }

		                  ?>
		                </select>
					</div>


					

					<div class="form-group">
						<label>Email</label>
						<input type="email" id="useremail" class="form-control"  name="useremail" autocomplete="off" required disabled>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" id="userpassword" class="form-control"  name="userpassword" required>
					</div>

					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" id="c_userpassword" class="form-control"  name="c_userpassword" required>
					</div>

					<div class="form-group">
						<label>Phone</label>
						<input type="number" id="phone" class="form-control"  name="phone" required>
					</div>

					 

					 
					 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary " data-dismiss="modal"  onclick="return upformhash(this.form,this.form.usertype,this.form.name,this.form.useremail,this.form.phone,this.form.userpassword,this.form.c_userpassword,this.form.xc_editid)">Save</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="" >Close</button>
				</div>

			</div>

		</div>
	</form>

</div>
