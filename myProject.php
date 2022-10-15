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
    
    if(!empty($obj->myTitle($stdID)))
      foreach ($obj->myTitle($stdID) as $std) {
        $projectID = $std['projectID'];
            //
    }
else                                        
            $projectID=0;
        echo $projectID; //works as expected but need to check
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
            <?php include "menuStudent.php";?>

			<div id="page-wrapper" style="margin-top: 15px;">
                <?php
                if($projectID >0)
                {
                    ?>




                

<div class="row"> 
<ul class="nav nav-tabs" id="myTab">
        <li class="active"><a data-toggle="tab" href="#group">Project Group</a></li>
        <li><a data-toggle="tab" href="#proposal">Project Proposal</a></li>
        <li><a data-toggle="tab" href="#comments">Project Comments</a></li>
        <li><a data-toggle="tab" href="#deliverable">Project Deliverables</a></li>
        <li><a data-toggle="tab" href="#future">Complete Process</a></li>
    </ul>
    <div class="tab-content">
    <div id="group" class="tab-pane fade in active">
<!--start here-->
            <?php 
            include("myProjectGroup.php");
            ?>              
    </div>
<!--end here-->
    <div id="proposal" class="tab-pane fade">
        <?php include("myProposal.php");?>
    </div>

    <div id="comments" class="tab-pane fade">
        <?php include("myComment.php");?>
    </div>

    <div id="deliverable" class="tab-pane fade">
        <?php 
            include("myDeliverables.php");
        ?>
    </div>

    <div id="future" class="tab-pane fade">
        <?php 
            include("myFuture.php");
        ?>
    </div>
    </div>   
</div>


</div>

 <?php
}
                        
             else 
            {
            ?>
            <h3 style="color:red;margin-left: 10px;">You do not have any project, please click Send Proposal link to add a project</h3>
            <?php
            }
            ?>

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