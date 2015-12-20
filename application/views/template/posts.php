
 <div id="page-wrapper">

    <div class="container-fluid ">

                <!-- Page Heading -->
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header head-title">
                           Traffic Posts List
                        </h1>

                            <div class="row box box-shadow">
                                <div class="container-fluid">
                                    <div class="row container-fluid row-adjust">
                                        <div class="col-md-6 row-adjust"><h4>User</h4></div>
                                        <div class="col-md-6">
                                        <button type="button" class="btn btn-info btn-md button-adjust pull-right" data-toggle="modal" data-target="#myModal">Create new Admin</button>
                                        </div>
                                    </div>
                                    <hr></hr>
                                    <div class="row bottom-adjust">
                                        <div class="col-md-8 row-adjust"></div>
                                        <div class="col-md-4 row-adjust">
                                            <div class="input-group">
                                                <input type="text" class="form-control pull-right" placeholder="Search for...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-secondary" type="button">Go!</button>
                                                </span>
                                            </div>

                                        </div>
                                        
                                    
                                    </div>
                                    <?php foreach ($user as $users) { ?>
                                     <table class="table table-striped">
                                        <div class="row borderbot">
                                            <div class="col-md-4">
                                                <h4 class="details"><?php echo $users->account_fname;?> <span class="details"><?php echo $users->account_lname;?></span><br> 
                                                    <span class="lower-details"><?php echo $users->account_email;?></span><br>
                                                    <span class="lower-details">Created on</span><br>
                                                    <span class="lower-details"><?php $CI =& get_instance(); echo $CI->usertype($users->account_type); ?></span>
                                                </h4>
                                            </div>
                                            <div class="col-md-4 pull-left">
                                                <h4 class="details">Gender: <span class="lower-details"><?php echo ($users->gender =='M' ? 'Male' : 'Female');?></span><br> 
                                                </h4>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Select an Action <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Suspend</a></li>
                                                        <li><a href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </table>
                                    <?php } ?>

                                    
                                </div>
                            </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

</div>
