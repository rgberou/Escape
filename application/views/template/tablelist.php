<?php foreach ($user as $users) { ?>
    <table class="table table-striped">
        <div class="row borderbot">
            <div class="col-md-4">
                <h4 class="details"><?php echo $users->account_firstname;?> <span class="details">
                <?php echo $users->account_lastname;?></span><br> 
                    <span class="lower-details"><?php echo $users->account_email;?></span><br>
                    <span class="lower-details">Created on</span><br>
                    <span class="lower-details"><?php $CI =& get_instance(); echo $CI->usertype($users->account_type); ?></span>
                </h4>
            </div>
            <div class="col-md-4 pull-left">
                <h4 class="details">Gender: <span class="lower-details">
                <?php echo ($users->account_gender =='M' ? 'Male' : 'Female');?></span><br> 
                </h4>
            </div>
            <div class="col-md-4">
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select an Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('dashboard/editUser/'.$users->userid);?>">Edit</a></li>
                        <li><a href="#">Suspend</a></li>
                        <li><a href="#">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </table>
<?php } ?>