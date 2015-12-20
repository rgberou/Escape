 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header headertop">
                            Live Map
                            <small>View Traffic and Modify Traffic in the Map</small>
                        </h1>
                        <!-- the map content-->
                        <div id="content">
                            <?php 
                               switch ($choice) {
                                   case 1:
                                       include ('map.php');
                                       break;
                                    case 2:
                                        include ('userlist.php');
                                        break;
                                    case 3:
                                        include ('registration.php');
                                        break;
                                   default:
                                       include ('map.php'); 
                                       break;
                               }
                            ?>
                            <?php ; ?>
                            
                            <?php ; ?>
  
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