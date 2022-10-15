
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

                
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
						
						<li class="sidebar-search">
                               <div class="profile clearfix">
							<div class="profile_pic" style="padding-left:50px">
							<img src="profile_pic/img.png" alt="..." class="img-circle profile_img" width="100px" height="100px">
							</div>
							<div class="profile_info" style="padding-left:50px;padding-top:20px;">
							<span style="color:#337ab7;"><?php echo "Welcome " .$_SESSION["username"];?></span>
							</div>
							</div>
							
							
                                
                            </li>
                            
                            <li>
                                <a href="home.php"><i class="fa fa-home fa-fw"></i> HOME</a>
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
                                <a href="#"><i class="fa fa-folder fa-fw"></i> Project<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">

                                    

                                    <li <?php if(($_SESSION["role"]=="Supervisor") || ($_SESSION["role"]=="supervisor")|| ($_SESSION["role"]=="SUPERVISOR")) echo "style='display:none';";?>>
                                        <a href="viewTitle.php">Proposals</a>
                                    </li>
                                    
                                    
                                    <li <?php if(($_SESSION["role"]=="Supervisor") || ($_SESSION["role"]=="supervisor")|| ($_SESSION["role"]=="SUPERVISOR")) echo "style='display:none';";?>>
                                        <a href="projectSetting.php">Project Setting</a>
                                    </li>
                                   
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                              <a href="viewProject.php"><i class="fa fa-folder fa-fw"></i> All Project</a>
                            </li>

                            <li>
                                <a href="projectGroups.php"> <i class="fa fa-group fa-fw"></i> My Groups</a>
                            </li>

                            <li>
                                <a href="resultReport.php"><i class="fa fa-copy fa-fw"></i> Project Result</a>
                            </li>
							
                            
                            
							
							<li <?php if(($_SESSION["role"]=="Supervisor") || ($_SESSION["role"]=="supervisor")|| ($_SESSION["role"]=="SUPERVISOR")) echo "style='display:none';";?> >
                                <a href="announcements.php"><i class="fa fa-bullhorn fa-fw"></i> Announcement</a>
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
                                <a href="#"><i class="fa fa-user fa-fw"></i> Profile </a>
                                <ul class="nav nav-second-level">
								    <li>
                                      <a href="profileS.php"> Settings</a>
                                     </li>
                                    <li>
                                        <a href="logout.php"> Logout</a>
                                    </li>								
									
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
					     </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>