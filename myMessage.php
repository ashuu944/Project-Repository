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
            <div id="page-wrapper" style="margin-top: 20px;">
                <?php
                if($sprID >0)
                {
                    ?> 
                <div class="container-fluid">
                
                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default" style="margin-left:-30px;">
                            <div class="panel-heading" style="background-color: white;">
                                Supervisor Information
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <?php include 'message.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                </div>
            </div>
        </div>
        <?php }?>
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
