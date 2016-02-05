
 <div id="page-wrapper">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header head-title">
                    Admin Master List
                </h1>
                <div class="row box box-shadow">
                    <div class="container-fluid">
                        <div class="row container-fluid row-adjust">
                            <div class="col-md-6 row-adjust"><h4>User</h4></div>
                            <div class="col-md-6">
                                <button type="button" id="new" class="btn btn-info btn-md button-adjust pull-right">Create new Admin</button>
                            </div>
                        </div>
                        <hr></hr>
                        <div class="row bottom-adjust">
                            <div class="col-md-8 row-adjust"></div>
                                          
                        </div>
                        <?php $this->load->view('template/reg.php');?>
                    </div>
                </div>
            </div>
        </div> 
    </div>
 </div>
 <script type="text/javascript">
    document.getElementById("new").onclick = function () {
        location.href = "<?php echo base_url();?>index.php/dashboard/userlist";
    };
</script>


    

         