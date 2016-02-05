<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Escape</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">
  </head>
  <body>
    <div class="modal-dialog logform">
      <div class="modal-content">
         <div class="modal-header col-md-12">
            <img src="assets/img/logo.png" width="150px" height="150px" class="">
          </div>
          <div class="modal-body">
              <?php echo form_open('dashboard/login'); ?>
                <input type="text" class="form-control input-lg form-group" placeholder="Username" id="username" name="email" value="" required>
                <input type="password" class="form-control input-lg form-group" placeholder="Password" id="password" name="password" value="" required>
                <button type="submit" class="btn btn-block btn-lg btn-primary logbutton">Sign in</button>
              <?php echo form_close();?> 
          </div>
          <div class="modal-footer">
              <?php echo $error; ?>
          </div>     
      </div>     
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)<a href="" ><p class="text-center">Forgot password</p></a>  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

