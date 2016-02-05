
<div class="row ">
<div class="col-md-1"></div>
  <div class="col-md-9">
    <?php echo form_open('dashboard/admin_register'); ?>
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
    <?php echo form_close();?> 
    <?php echo validation_errors('<p class="error"></p>');?>

    </div>


  </div>
<div class="col-md-2"></div>
 
</div>