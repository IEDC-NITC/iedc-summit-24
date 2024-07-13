<div class="modal fade" id="new-user" tabindex="-1" style="display: none;" aria-hidden="true">
	<form id="userCreate" >

		<div class="modal-dialog modal-dialog-scrollable">

			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title">New User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">  <span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">

					

					<input type="hidden" id="author" name="qauthor" value="<?php echo $_SESSION['user_id'];?>" />

					<div class="form-group">
						<label>Name</label>
						<input type="text" id="username" class="form-control"  name="username" autocomplete="off" required>
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
						<input type="email" id="useremail" class="form-control"  name="useremail" autocomplete="off" required >
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" id="userpassword" class="form-control"  name="userpassword" required>
					</div>

					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" id="userpassword_c" class="form-control"  name="c_userpassword" required>
					</div>

					<div class="form-group">
						<label>Phone</label>
						<input type="number" id="phone" class="form-control"  name="phone" required>
					</div>

					 

					 
					 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary " data-dismiss="modal" onclick="return regformhash(this.form,this.form.usertype,this.form.username,this.form.useremail,this.form.phone,this.form.userpassword,this.form.c_userpassword)" >Create</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="" >Close</button>
				</div>

			</div>

		</div>
	</form>

</div>
