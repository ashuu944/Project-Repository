<!DOCTYPE html>
<?php
session_start();
include('session.php');
include 'classProject.php';
                  
    $obj = new project();
            
        
    $userID = $_SESSION['id'];

    foreach ($obj->profile($userID) as $s) {
        $stdID=$s['stdID'];
    }

    if(!empty($obj->mySupervisor($stdID)))
      foreach ($obj->mySupervisor($stdID) as $std) {
        $sprID = $std['sprID'];
            //
    }
else                                        
        $sprID=0;
        echo $sprID; //works as expected but need to check

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
            <div id="page-wrapper" style="margin-top: 19px;">
                <?php
                if($sprID >0)
                {
                    ?>                    
                <div class="container-fluid">
                
                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default" style="margin-left:-30px;">
                            <div class="panel-heading" style="background-color: white;">
                                <h4> Supervisor Information</h4>
                            </div>
                            <!-- /.panel-heading -->
                        <div class="panel-body">

                            <form class="form-horizontal" role="form">
                    <div class="row">
                                                     <?php 
                                                foreach ($obj->mySupervisor($stdID) as $std) {
                                                $name=$std['fName'] . " " . $std['mName'] . " " . $std['lName'];
                                                
                                                    ?>
                                        

                                        <div class="col-md-9">
                                          
                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Full Name:</label>
                                              <div class="col-md-10">
                                                <input type="text" readonly="readonly" style="background-color: white;margin-bottom: 10px;" class="form-control" name="title" value="<?php echo $name;?>">
                                              </div>
                                        </div>

                                        <!--<div class="form-group">
                                              <label class="col-md-2 control-label">Middle Name:</label>
                                              <div class="col-md-10">
                                                <input type="text" readonly="readonly" style="background-color: white;margin-bottom: 10px;" class="form-control" name="title" value="<?php //echo $std['mName']?>">
                                              </div>
                                        </div>

                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Last Name:</label>
                                              <div class="col-md-10">
                                                <input type="text" readonly="readonly" style="background-color: white;margin-bottom: 10px;" class="form-control" name="title" value="<?php //echo $std['lName']?>">
                                              </div>
                                        </div>-->

                                        <div class="form-group">
                                              <label class="col-md-2 control-label">Gender:</label>
                                              <div class="col-md-10">
                                                <input type="text" readonly="readonly" style="background-color: white;margin-bottom: 10px;" class="form-control" name="title" value="<?php echo $std['gender']?>">
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
                                                    <img id="avatar" class="editable img-responsive" alt="No image" src="<?php echo $std['profilePic']?>" width="150px" height="100px" />
                                                </span>

                                            </div>

                                            
                                            
                                                <!--<div class="profile-contact-links align-left">
                                                    <a href="myMessage.php?id=<?php echo $std['sprID'] ?>" class="btn btn-link">
                                                        <i class="ace-icon fa fa-envelope bigger-120 green"></i>
                                                        Send Message
                                                    </a>

                                                </div>-->

                                          
                                        </div>

                        </div>
                    </form>
                            
        </div>
        <?php }?>

        
                                    


                                </div>

                                
                            </div>

                                </div>


                    <!-- /.row -->
                   </div>
<?php
}
                        
             else 
            {
            ?>
            <h3 style="color:red;margin-left: 10px;"> No supervisor assigned to your project</h3>
            <?php
            }
            ?>
                   </div>

</div>



                

            

        

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
