<!DOCTYPE html>
<?php
session_start();
include('session.php');
include 'classProject.php';
                  
    $obj = new project();
            
        
    $userID = $_SESSION['id'];

    
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PRS</title>


        
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include "menuAdmin.php"?>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                 

                    <div class="row" style="margin-top: 25px;">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="clearfix">
                                   </div>

                                <div class="hr dotted"></div>

                                <div>
                                    <div id="user-profile-1" class="user-profile row">
                                        <?php 
                                                foreach ($obj->profileSupervisor($userID) as $std) {
                                                    ?>
                                        <div class="col-xs-12 col-sm-3 center">
                                            <div>
                                                <span class="profile-picture">
                                                    <img id="avatar" class="editable img-responsive" alt="No image" src="profile_pic/img.png" width="150px" height="100px"/>
                                                </span>

                                                
                                                
                                                
                                            </div>

                                            <div class="space-4"></div>

                                            <div class="profile-contact-info">
                                                <div class="profile-contact-links align-left">
                                                    <a href="#" class="btn btn-link">
                                                        <i class="ace-icon fa fa-user bigger-120 green"></i>
                                                        Change Profile Picture
                                                    </a>

                                                    <a href="#" class="btn btn-link">
                                                        <i class="ace-icon fa fa-key bigger-125 orange"></i>
                                                        Change Password
                                                    </a>

                                                    <a href="#update<?php echo $std['sprID'] ?>" class="btn btn-link"  data-toggle = "modal"  data-target="#update<?php echo $std['sprID'] ?>"><i class = "glyphicon glyphicon-cog"></i> Edit Profile</a>

                                                    
                                                </div>

                                                <div class="space-6"></div>

                                            </div>

                                            

                                           
                                        </div>

                                        <div class="col-xs-12 col-sm-9">
                                            

                                            

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> First Name: </div>
                                                    

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username"><?php echo $std['fName']?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Middle Name </div>

                                                    <div class="profile-info-value">
                                                        
                                                        <span class="editable" id="country"><?php echo $std['mName']?></span>
                                                        
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Name </div>

                                                    <div class="profile-info-value">
                                                        
                                                        <span class="editable" id="country"><?php echo $std['lName']?></span>
                                                        
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Gender </div>

                                                    <div class="profile-info-value">
                                                        
                                                        <span class="editable" id="country"><?php echo $std['gender']?></span>
                                                        
                                                    </div>
                                                </div>


                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Email Address </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="login"><?php echo $std['email']?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Mobile No. </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="about"><?php echo $std['telNo']?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        
                                                        <span class="editable" id="country"><?php echo $std['userName']?></span>
                                                        
                                                    </div>
                                                </div>

                                                    <div class="profile-info-name"> Password </div>

                                                    <div class="profile-info-value">
                                                        
                                                        <span class="editable" id="country">***************</span>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="space-20"></div>


                                        </div>
                                              

                                    <?php //include 'updateProfileModal.php';?>
                                    <?php }
                                    ?>
                                    


                                </div>


                            </div>

                            </div><div class="hr hr12 dotted"></div>

                                </div>


                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->	

    </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
