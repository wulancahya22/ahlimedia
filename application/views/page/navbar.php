
<div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                        <a></a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              </a>
                              
                        </li>
                    </ul>
                    
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        
                            <a class="dropdown-item" href="#">
                            
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile 
                            
                            <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                            </a>
                        </div>
                   <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url('auth/logout');?>">
                                <p style="font-size: 15px" style="font-family: courier , monospace;">LOGOUT</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                    <?php if($this->session->userdata('nama')) { ?>
                    <i class="pe-7s-users" style="font-size:25px"><p><?=$this->session->userdata('nama')?> </p></i>
                    </ul>
                    <?php } ?>
                </div>
            </div>
        </nav>