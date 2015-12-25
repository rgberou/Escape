
 <div id="page-wrapper">

    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header head-title">
                    Admin Master List
                </h1>
                <div class="col-md-12 container-fluid box box-shadow bottom-adjust">
                    <div class="container-fluid row-adjust">
                        <div class="col-md-6 row-adjust"><h4>Traffic Posts</h4></div>
                    </div>
                    <hr></hr>    
                </div>
                <div class="row container-fluid">
                <?php foreach ($posts as $post) { ?>
                <div class="col-md-12 container-fluid box box-shadow">
                    <div class="row container-fluid row-adjust top-details">
                        <div class="col-md-3 row-adjust">
                            <h5><?php echo $post->account_lname;?></h5><br>
                            <h6>Location</h6>
                        </div>
                        <div class="col-md-3 row-adjust">
                            <div class="pictures"><img style="width: 200px; height: 150px;"  src="<?php echo 'data:' .  ';base64,' . base64_encode($post->media_content); ?>" width="150" /></div>
                 
                        </div>
                         <div class="col-md-3 row-adjust">
                            <div class="caption"><h5><?php echo $post->caption;?></h5></div>
                 
                        </div>
                        <div class="col-md-3 row-adjust">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select an Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('dashboard/updatepost/'.$post->media_id);?>">Approve Post</a></li>
                                    <li><a href="<?php echo site_url('dashboard/updatepost/'.$post->media_id);?>">Decline Post</a></li>
                                </ul>
                            </div>
                        </div>
                         
                    </div>
                <br>
                   
                </div>
                <?php } ?>
                </div>

                    
            </div>
                
            </div>
        </div> 
    </div>
 </div>
 


    

         