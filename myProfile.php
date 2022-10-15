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
            <?php include "menuStudent.php"?>

            <!-- Page Content -->
            <div id="page-wrapper" style="margin-top: 36px;">
                                    
                <div class="container-fluid">
                
                <div class="row">
                    <div class="col-md-11">
                        <div class="panel panel-default" style="margin-left:-30px;">
                            <div class="panel-heading" style="background-color: white;">
                                <h4>Profile Information</h4>
                            </div>
                            <!-- /.panel-heading -->
                        <div class="panel-body">

                            <form class="form-horizontal" role="form" action="uploadPix.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                                                <?php 
                                                foreach ($obj->profile($userID) as $std) {
                                        
                                                $name=$std['fName'] . " " . $std['mName'] . " " . $std['lName'];
                                                
                                                    ?>
                                        

                                        <div class="col-md-8">
                                          
                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Full Name:</label>
                                              <div class="col-md-10">
                                                <input type="text" readonly="readonly" style="background-color: white;margin-bottom: 10px;" class="form-control" name="fullname" value="<?php echo $name;?>">
                                              </div>
                                        </div>

                                        

                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Gender:</label>
                                              <div class="col-md-10">
                                                <input type="text" readonly="readonly" style="background-color: white;margin-bottom: 10px;" class="form-control" name="title" value="<?php echo $std['gender']?>">
                                              </div>
                                        </div>

                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Reg. Number:</label>
                                              <div class="col-md-10">
                                                <input type="text" readonly="readonly" style="background-color: white;margin-bottom: 10px;" class="form-control" name="title" value="<?php echo $std['regNo']?>">
                                              </div>
                                        </div>

                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Programme:</label>
                                              <div class="col-md-10">
                                                <input type="text" readonly="readonly" style="background-color: white;margin-bottom: 10px;" class="form-control" name="title" value="<?php echo $std['prgName']?>">
                                              </div>
                                        </div>

                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Email:</label>
                                              <div class="col-md-10">
                                                <input type="text" readonly="readonly" style="background-color: white;margin-bottom: 10px;" class="form-control" name="title" value="<?php echo $std['email']?>">
                                              </div>
                                        </div>

                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Mobile No:</label>
                                              <div class="col-md-10">
                                                <input type="text" readonly="readonly" style="background-color: white;margin-bottom: 10px;" class="form-control" name="title" value="<?php echo $std['telNo']?>">
                                              </div>
                                        </div>


                                                
                            </div>

                            <div class="col-md-3 center">
                                            <div>
                                                <span class="profile-picture">
                                                    <img id="avatar" classclass="img-responsive img-thumbnail" alt="No image" src="<?php echo $std['profilePic'];?>" width="100px" height="90px" />
                                                </span>

                                            </div>

                                            
                                            
                                                <div class="row">
                                                <div class="profile-contact-links align-left">
                                                    <a href="#" class="btn" style="color:blue;" onclick="return showDiv()">
                                                        <i class="fa fa-user"></i>
                                                        Update Profile Picture
                                                    </a>
                                                    <div style="display: none;" id="pixDiv">
                                                    
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="stdID" value="<?php echo $std['stdID'];?>">
                                                        
                                                        <input type="file" name="pic" class="form-control" required>
                                                        <input type="submit" name="upload" class="btn btn-sm btn-success" style="margin-top: 5px;margin-left: 40px;" value="Upload">                                                       
                                                    </div>
                                                    
                                                </div>

                                                    </div>
                                                    

                                                    <a href="#update<?php echo $userID; ?>" class="btn" style="color:orange;"  data-toggle = "modal"  data-target="#update<?php echo $userID ?>">
                                                        <i class="fa fa-key bi"></i>
                                                        Change Password
                                                    </a>

                                                    <a href="editProfile.php" class="btn" style="color:green;"><i class = "glyphicon glyphicon-cog"></i> Edit Profile</a>

                                                    
                                                </div>

                                                <div class="space-6"></div>

                                            </div>

                                          
                                        </div>
                                                
                            <?php }?>
                        </div>
                    </form>
                    <?php include 'updateProfileModal.php';?>
                            
        </div>
        

        
                                    


                                </div>

                                
                            </div>

                                </div>


                    <!-- /.row -->
                   </div>

                        
            
                   </div>

</div>

<script>
            
            function showDiv() {
            document.getElementById('pixDiv').style.display = "block";
            }
            </script>          

            

        

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
