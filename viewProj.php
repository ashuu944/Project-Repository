<!DOCTYPE html>
<?php
session_start();
include('session.php');
        
include 'classProject.php';
                  
            $obj = new project();
            $projectID=$_GET['id'];

?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PRS</title>
        <!--<link href="css/ace.min.css" rel="stylesheet">
        <!- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

       


    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include 'menuAdmin.php'; ?>

			<div id="page-wrapper" style="margin-top: 30px;">
                




                

<div class="row"> 
<ul class="nav nav-tabs" id="myTab">
        
        <li class="active"><a data-toggle="tab" href="#proposal">Project Information</a></li>
        <li><a data-toggle="tab" href="#group">Student Information</a></li>
        <li><a data-toggle="tab" href="#deliverable">Project Deliverables</a></li>
        
    </ul>
    <div class="tab-content">
    <div id="proposal" class="tab-pane fade in active">
<!--start here-->
            <?php 
            include("devProjectInfo.php");
            ?>              
    </div>
<!--end here-->
    <div id="group" class="tab-pane fade">
        <?php include("devStudentInfo.php");
        ?>
    </div>

    <div id="deliverable" class="tab-pane fade">
        <?php 
            include("devProjectDeliverable.php");
        ?>
    </div>

   
    </div>   
</div>


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