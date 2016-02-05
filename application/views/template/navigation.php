<body>
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">Escape</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata['data']['account_fname'].' '.$this->session->userdata['data']['account_lname']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav side-nav">   
                    <div class="container-fluid text-center">
                        <h4 class="greeting">Welcome <?php echo $this->session->userdata['data']['account_fname'].' '.$this->session->userdata['data']['account_lname']; ?>!</h4>
                    </div>
                    <li>
                        <li><!--Navigation for the view of the Map -->
                            <a href="<?php echo base_url();?>index.php/dashboard/map"> <i class="glyphicon glyphicon-home"></i> Dashboard</a>
                        </li>
                    </li>
                    <li>
                        <li><!--Navigation for the view of the Map -->
                            <a href="<?php echo base_url();?>index.php/dashboard/userlist"><i class="glyphicon glyphicon-user"></i> Users</a>
                        </li>
                    </li>
                    <li>
                        <li><!--Navigation for the view of the Map -->
                            <a href="<?php echo base_url();?>index.php/dashboard/postslist"><i class="glyphicon glyphicon-road"></i> Traffic Posts</a>
                        </li>
                    </li>
                    <li>
                        <li><!--Navigation for the view of the Map -->
                            <a href="<?php echo base_url();?>index.php/dashboard/userlist"><i class="glyphicon glyphicon-user"></i> Jeepney Management</a>
                        </li>
                    </li>

                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
