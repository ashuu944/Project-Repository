<?php
    $userID = $_SESSION['id'];
    foreach ($obj->profile($userID) as $std) {
                                        
    $pix=$std['profilePic'];
    $stdID=$std['stdID'];


    $noProject=$obj->viewStudentWithNoproject($stdID);
                                                
    }?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Project Repository Platform</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">
                    <li><a href="logout.php" style="color:white;background-color: #044F67;"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    <!--<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            
                            
                        </ul>
                    </li>-->
                </ul>
                
                <!-- /.navbar-top-links -->



                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
						
						    <li class="sidebar-search">
                               <div class="profile clearfix">
							<div class="profile_pic" style="padding-left:30px">
							<img src="<?php echo $pix;?>" alt="..." class="img-thumbnail img-responsive  profile_img" width="150px" height="100px">
							</div>
							<div class="profile_info" style="padding-left:50px;padding-top:20px;">
							<span style="color:#337ab7;"><?php echo "Welcome " .$_SESSION["username"];?></span>
							</div>
							</div>
							
							
                                
                            </li>
                            
                            <li>
                                <a href="profile.php"><i class="fa fa-home fa-fw"></i> HOME</a>
                            </li>
                            
                            
							<li <?php if(!empty($noProject)) echo "style='display:none';";?>>
								<a href="proposals.php"><i class="fa fa-edit fa-fw"></i> Send Proposal</a>
                            </li>
                                    
							<li <?php if(empty($noProject)) echo "style='display:none';";?>>
                                <a href="myProject.php"><i class="fa fa-briefcase fa-fw"></i> My Project</a>
                            </li>
                                    
							<li>
                                <a href="studentProject.php"><i class="fa fa-folder fa-fw"></i> All Projects</a>
                            </li>
                                   
                             <li>
                                <a href="projectCustomized.php"><i class="fa fa-file fa-fw"></i> Customized Project</a>
                                </li>   
                            
							
                            
                            
							
							<li>
                                <a href="mysupervisor.php"><i class="fa fa-user-md fa-fw"></i> My Supervisor</a>
                            </li>
							
                            <li>
                              <a href="myProfile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
													
							
					     </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>