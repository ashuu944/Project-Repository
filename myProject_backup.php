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

			<div id="page-wrapper" style="margin-top: 25px;">
                <?php
                if($projectID >0)
                {?>


                <?php include "menuS.php"?>
                





                <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="clearfix">
                                   </div>

                                <div class="hr dotted"></div>

                                <div>
                                    <div id="user-profile-1" class="user-profile row">
                                        <div class="col-xs-12 col-sm-3 center">
                                            <div>
                                                <span class="profile-picture">
                                                    <img id="avatar" class="editable img-responsive" alt="no image" src="profile_pic/2.png" width="150px" height="100px;" />
                                                </span>

                                                <div class="space-4"></div>
                                                
                                            </div>

                                            <div class="space-6"></div>

                                            <div class="profile-contact-info">
                                                <div class="profile-contact-links align-left">
                                                    <a href="addMember.php" class="btn btn-link">
                                                        <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
                                                        Add Member
                                                    </a>
                                                </div>

                                            </div>

                                            

                                           
                                        </div>

                                        <div class="col-xs-12 col-sm-9">
                                            

                                            <div class="space-12"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <?php 
                                                foreach ($obj->myTitle($stdID) as $prj) {
                                                    ?>
                                        
        
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Group Name </div>

                                                    <div class="profile-info-value">

                                                        <input type="text" readonly="readonly" style="background-color:#ffffff;" class="form-control" name="title" value="<?php echo $prj['title'] ?>">
                                                    </div>
                                                <?php }
                                                ?>

                                                   </div>
                                                

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Group Members </div>

                                                    <div class="profile-info-value">
                                                    <ul>
                                                    <?php foreach ($obj->viewStudentProposal($projectID) as $std) { ?>
                                                        
                                                        <?php
                                                        $name=strtoupper($std['fName'] . " " . $std['mName'] . " " . $std['lName']);
                                                        ?>
                                                            <li> 

                                                                <input type="text" readonly="readonly" class="form-control" style="margin-bottom: 10px;" value="<?php echo $name?>" >
                                                             </li>
                                                            
                                                   <?php 
                                                   } ?>        
                                                        </ul>


                            
                                                    </div>
                                                    </div>

                                                    </div>
                                                </div>

                                        </div>      

                                            <div class="space-20"></div>


                                        </div>

                            <div class="hr hr12 dotted"></div>

                                    </div>


                                </div>
                            <?php
                        }
                        else
                            echo "no project";
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