
<div class="row ">
  <div class="col-md-4">
    <?php echo form_open('dashboard/admin_register'); ?>
          <div class="form-group">
            <p>
              <label for="ID">ID</label>
              <input type="text"  name="id" input type="text" class="form-control input-lg form-group"> </type>
            </p>
          </div>
          <div class="form-group">
            <p>
              <label for="Username">Username</label>
              <input type="text"  name="username" input type="text" class="form-control input-lg form-group"> </type>
            </p>
          </div>
         <div class="form-group">
             <p>
              <label for="Lastname">Lastname</label>
              <input type="text"  name="lastname" input type="text" class="form-control input-lg form-group"> </type>
            </p>
          </div>
        <div class="form-group">
            <p>
              <label for="Firstname">Firstname</label>
              <input type="text"  name="firstname" input type="text" class="form-control input-lg form-group"> </type>
            </p>
        </div>
        <div class="form-group">
             <p>
              <label for="Email">Email</label>
              <input type="text"  name="email" input type="text" class="form-control input-lg form-group"> </type>
            </p>
        </div>
        <div class="form-group">
          <select class="form-control" name="gender">
        <option><h4>Choose your gender</h4></option>
          <option value="M">Male</option>
          <option value="F">Female</option>
      </select>
      </div>
    <div class="form-group">
      <select class="form-control" name="type">
        <option><h4>Choose member type</h4></option>
        <option value="A">Admin</option>
        <option value="E">Traffic Enforcer</option>
      </select>
    </div>  
    <button type="submit" class="btn btn-block btn-lg btn-primary logbutton">Submit</button>
    </div>
<?php echo form_close();?> 
<?php echo validation_errors('<p class="error"></p>');?>

  </div>

  <div class="col-md-2">
    <?php foreach ($user as $users) { ?>
    <table class="table table-striped">
        <div class="row borderbot">
                <h4 class="details"><?php echo $users->account_fname;?> <span class="details">
                <?php echo $users->account_lname;?></span><br> 
                    <span class="lower-details"><?php echo $users->account_email;?></span><br>
                    <span class="lower-details">Created on</span><br>
                    <span class="lower-details"><?php $CI =& get_instance(); echo $CI->usertype($users->account_type); ?></span>
                </h4>
          </div>
      </table>
    <?php } ?>
  </div>
 
</div>