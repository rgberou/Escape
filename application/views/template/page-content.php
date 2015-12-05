 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header headertop">
                            Live Map
                            <small>View Traffic and Modify Traffic in the Map</small>
                        </h1>
                        <!-- the map content -->
                        <div id="content">
                            <div id="canvas"/></div>
                            <?php
                                
                                if ($choice==1) {
                                    include ('overmap.php');
                                }
                             
                             ?>
                            <?php include ('addstreet.php'); ?>
  
                    </div>
                            
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<div class="footer">Footer</div>