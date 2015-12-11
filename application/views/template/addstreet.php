<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/dash.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<div class="modal fade" id="streetModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <?php $attributes = array('class' => 'form-inline'); echo form_open('dashboard/reg_street',$attributes); ?>
                    <div class="form-group">
                        <label for="Streetname">Streetname</label>
                        <input type="text" class="form-control input-lg" id="streetname" name="streetname" placeholder="Streetname">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-lg" value="Submit">
                    </div>
                <?php echo form_close();?> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
      
    </div>
</div>