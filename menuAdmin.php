<?php
    $userID = $_SESSION['id'];
    foreach ($obj->profileSupervisor($userID) as $std) {
                                        
    $pix=$std['profilePic'];
                                                
    }?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand">Project Repository Platform</a>
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
                                <a href="home.php"><i class="fa fa-home fa-fw"></i> HOME<span class="fa arrow"></span></a>
                            </li>

                            <li <?php if(($_SESSION["role"]=="Supervisor") || ($_SESSION["role"]=="supervisor")|| ($_SESSION["role"]=="SUPERVISOR")) echo "style='display:none';";?> >
                                <a href="#"><i class="fa fa-users fa-fw"></i> Manage Users<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="createUser.php"> Create User</a>
                                    </li>
                                    								
									<li>
                                        <a href="#">View Users <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="viewUser.php">User Account</a>
                                            </li>
                                            <li>
                                                <a href="viewSupervisor.php">Supervisors</a>
                                            </li>
                                            <li>
                                                <a href="viewStudent.php">Students</a>
                                            </li>
                                            
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            
                            <li <?php if(($_SESSION["role"]=="Supervisor") || ($_SESSION["role"]=="supervisor")|| ($_SESSION["role"]=="SUPERVISOR")) echo "style='display:none';";?>>
                                <a href="#"><i class="fa fa-folder fa-fw"></i> Manage Projects<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">

                                    <li>
                                        <a href="viewTitle.php">Project Proposals</a>
                                    </li>

                                    <li>
                                        <a href="projectSupervisor.php">Assign Supervisor</a>
                                    </li>
                                    
                                    <li>
                                   <a href="announcements.php">Announcement</a>
                                    </li>
                                    
                                    <li>
                                        <a href="viewProject.php"> All Projects</a>
                                    </li>
                                   

                                   <li>
                                        <a href="projectSetting.php">Project Setting</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                                <li>
                                        <a href="projectGroups.php"><i class="fa fa-users fa-fw"></i> Project Groups<span class="fa arrow"></span></a>
                                    </li>
                                    
                                    <li <?php if(($_SESSION["role"]=="Project Coordinator") || ($_SESSION["role"]=="project coordinator")|| ($_SESSION["role"]=="PROJECT COORDINATOR")) echo "style='display:none';";?>>
                                        <a href="viewProject.php"><i class="fa fa-folder fa-fw"></i> All Projects<span class="fa arrow"></span></a>
                                    </li>

                                    <li>
                                <a href="customizedProject.php"><i class="fa fa-file fa-fw"></i> Customized Project<span class="fa arrow"></span></a>
                                </li>

                                    <li <?php if(($_SESSION["role"]=="Project Coordinator") || ($_SESSION["role"]=="project coordinator")|| ($_SESSION["role"]=="PROJECT COORDINATOR")) echo "style='display:none';";?>>

                                        <a href="resultReport.php"><i class="fa fa-copy fa-fw"></i> Results Report<span class="fa arrow"></span></a>
                                        
                                    </li>

                            <li <?php if(($_SESSION["role"]=="Supervisor") || ($_SESSION["role"]=="supervisor")|| ($_SESSION["role"]=="SUPERVISOR")) echo "style='display:none';";?>>
                                <a href="#"><i class="fa fa-copy fa-fw"></i> Reports<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    
                                    
									<li>
                                        <a href="resultReport.php"> Project Results</a>
                                    </li>

                                    <li>
                                        <a href="allResult.php"> All results</a>
                                    </li>
									
                                    
                                
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
							
                            
                            
							
							
							
							<li <?php if(($_SESSION["role"]=="Supervisor") || ($_SESSION["role"]=="supervisor")|| ($_SESSION["role"]=="SUPERVISOR")) echo "style='display:none';";?>>
                                <a href="#"><i class="fa fa-list fa-fw"></i> Others<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
								    <li>
                                      <a href="viewProgramme.php"> Programme</a>
                                     </li>
                                    <li>
                                        <a href="viewCategory.php">Category</a>
                                    </li>
                                    <li>
                                        <a href="viewStatus.php">Role</a>
                                    </li>

                                    
									
									
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
							
                            
							
							<li>
                              <a href="profileS.php"><i class="fa fa-user fa-fw"></i> User Profile<span class="fa arrow"></span></a>
                            </li>
                                   
                                <!-- /.nav-second-level -->
                          
                    </div>
                    <!-- /.sidebar-collapse -->
               
                <!-- /.navbar-static-side -->
            </nav>