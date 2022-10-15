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

                            <form class="form-horizontal" role="form" action="updateSupervisorProfile.php" method="post" >
                    <div class="row">
                                                <?php 
                                                foreach ($obj->profileSupervisor($userID) as $std) {?>
                                        

                                        <div class="col-md-12">
                                          
                                        <div class="form-group">
                                              <label class="col-md-2 control-label">First Name:</label>
                                              <div class="col-md-4">
                                                <input type="hidden" name="sprID" value="<?php echo $std['sprID'];?>">
                                                <input type="text" required style="background-color: white;margin-bottom: 10px;" class="form-control" name="fName" value="<?php echo $std['fName'];?>">
                                              </div>

                                              <label class="col-md-2 control-label">Middle Name:</label>
                                              <div class="col-md-4">
                                                <input type="text" required  style="background-color: white;margin-bottom: 10px;" class="form-control" name="mName" value="<?php echo$std['mName'];?>">
                                              </div>
                                        </div>
                                         
                                        

                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Last Name:</label>
                                              <div class="col-md-4">
                                                <input type="text" required  style="background-color: white;margin-bottom: 10px;" class="form-control" name="lName" value="<?php echo $std['lName']?>">
                                              </div>
                                              <label class="col-md-2 control-label">Gender:</label>
                                              <div class="col-md-4" style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size: 14px;">  &nbsp &nbsp &nbsp &nbsp
                                                    Female
                                                <input type="radio" class="flat" name="gender" id="genderF" value="F" <?php if($std['gender']=='F') echo  'checked=""'?> checked="" required /> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Male
                                                <input type="radio" class="flat" name="gender" id="genderM" value="M" <?php if($std['gender']=='M') echo  'checked=""'?> />
                                                </div>
                                        </div>
                                        

                                        

                                        

                                       

                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Email:</label>
                                              <div class="col-md-4">
                                                <input type="text" required style="background-color: white;margin-bottom: 10px;" class="form-control" name="email" value="<?php echo $std['email']?>">
                                              </div>

                                              <label class="col-md-2 control-label">Mobile No:</label>
                                              <div class="col-md-4">
                                                <input type="text" required style="background-color: white;margin-bottom: 10px;" class="form-control" name="telNo" value="<?php echo $std['telNo']?>">
                                              </div>
                                        </div>

                                        

                                        <div class="form-group">
                                              
                                              <div class="col-md-10">
                                                
                                              </div>
                                              <div class="col-md-2">
                                                <button type="submit" name="update" class="btn btn-success">Save Changes</button>
                                              </div>

                                </div>
                                        </div>


                                                
                            </div>
                             <?php }?>
                        </form>
                        </div>

                            

                                          
                                        
                           
                        </div>
                    
                            
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
