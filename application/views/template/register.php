<div class="modal-dialog logform">
      <div class="modal-content">
         <div class="modal-header col-md-12">
          </div>
          <div class="modal-body">
              <?php echo validation_errors() ?>
              <?php echo form_open('dashboard/insert_user'); ?>
                <p>
					<label for="username">Username</label>
					<input type="text"  id="username" name="username" input type="text" class="form-control input-lg form-group"> </type>
				</p>
				<p>
					<label for="lastname">Lastname</label>
					<input type="text" id="lastname" name="lastname" input type="text" class="form-control input-lg form-group"> </type>
				</p>
				<p>
					<label for="firstname">Firstname</label>
					<input type="text" id="firstname" name="firstname" input type="text" class="form-control input-lg form-group"> </type>
				</p>
				<p>
					<label for="password">Password</label>
					<input type="text" id="password" name="password" input type="text" class="form-control input-lg form-group"> </type>
				</p>
				<p>
					<label for="gender">Gender</label>
					<input type="text" id="gender" name="gender" input type="text" class="form-control input-lg form-group"> </type>
				</p>
				<p>
					<label for="type">type</label>
					<input type="text" id="type" name="type" input type="text" class="form-control input-lg form-group"> </type>
				</p>
				<p>
					<label for="status">status</label>
					<input type="text" id="status" name="status" input type="text" class="form-control input-lg form-group"> </type>
				</p>
				<p>
					<label for="email">email</label>
					<input type="text" id="email" name="email" input type="text" class="form-control input-lg form-group"> </type>
				</p>
				<p>
					<label for="loggedin">loggedin</label>
					<input type="text" id="loggedin" name="loggedin" input type="text" class="form-control input-lg form-group"> </type>
				</p>
				<p>
					<input type="submit" class="btn btn-block btn-lg btn-primary logbutton" value="Submit">
				</p>
              <?php echo form_close();?> 
          </div>
          <div class="modal-footer">
              
          </div>     
      </div>     
    </div>