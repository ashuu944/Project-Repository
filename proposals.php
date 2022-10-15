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
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet" type="text/css">

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

			<div id="page-wrapper" style="margin-top: 30px;">
                
                <!-- /.row -->

                <?php 
               
                $i=1;
                foreach ($obj->getProposalDate("Proposal") as $spr) {
                    $title=$spr['title'];
                    $startDate=$spr['startDate'];
                    $endDate=$spr['endDate'];
               
                ?>

                
                    <div class="col-lg-12">
                        <div class="panel panel-default" style="margin-left:-30px;">
                            <div class="panel-heading" style="background-color: transparent;">
                                <h4> Proposal Form
                                    Start Date:<span style="color:blue; padding-left:5px;"><?php echo $startDate;?></span> and End Date:<span style="color:blue; padding-left:5px;"><?php echo $endDate;?></span>
                            </div>
                            <?php 
                            $today=date("Y-m-d");
                            
                            if($today>=$startDate && $today<=$endDate)
                            {
                            ?>
                            <div class="panel-body">
                                <div class="row">
								<div class="col-lg-12">
								 <label>Please Choose a Proposal Type:   </label>
								<button type="button" class="btn btn-info " onclick="showDiv()" > New Project</button> &nbsp &nbsp
								<a href="selectProject.php" class="btn btn-info" > Customization of Project</a>
								</div>
								</div>
								<div  class="row" style="margin-top:20px;">
                                    <div class="col-lg-12" id="pDiv" style="display:none; ">
                                        <form role="form" action="sendProposal.php" method="post" class="form-horizontal">
                                            <div class="form-group">
											   <input type="hidden" name="stdID" value="<?php echo $stdID;?>">
                                                <label class="col-md-2 control-label"> Project Title</label>
                                                <div class="col-md-10">
                                                <input class="form-control " name="title" required>
                                                </div>
                                                
                                            </div>

                                            <div class="form-group">
                          <label class="col-md-2 control-label">Year</label>
                          <div class="col-md-4">
                            <select class="form-control" name="year" requied>
                                                    <option value="">Select Year</option>
                                                    <?php
                                                    $Syear=date('Y');
                                                    $Eyear=date('Y')-15;
                                                    for($Syear;$Syear>=$Eyear;$Syear--){
                                                        echo '<option value="'.$Syear.'">'.$Syear.'</option>';

                                                    }


                                                    ?>
                                                    
                                                </select>
                          </div>

                         <label class="col-md-2 control-label">Technology</label>
                          <div class="col-md-4">
                            <select  name = "techID" class = "form-control" required>
                                                <?php   
                                                
                                                foreach ($obj->viewCategory() as $cat) {
                                                ?>                                                                              
                                                <option value = "<?php echo $cat['techID'];?>"><?php echo $cat['techName'];?></option>  
                                                <?php } ?>                                                               
                                            </select>
                          </div>
                        </div>
                                            
                                            <div class="form-group">
                                            <label class="col-md-2 control-label">Brief Problem Statement</label>
                                            <div class="col-md-10">
                                            <textarea class="form-control"  rows="5" name="problem" required ></textarea>
                                            </div>
                                            </div>

                                            <div class="form-group">
                                            <label class="col-md-2 control-label">Current Situation</label>
                                            <div class="col-md-10">
                                            <textarea class="form-control"  rows="5" name="current" required ></textarea>
                                            </div>
                                            </div>
                                            
                                            <div class="form-group">
                                            <label class="col-md-2 control-label">Proposed Solution</label>
                                            <div class="col-md-10">
                                            <textarea class="form-control"  rows="5" name="solution" required ></textarea>
                                            </div>
                                            </div>
											
											<div class="form-group">
                                            <label class="col-md-2 control-label">Main Aim and Specific Objectives</label>
                                            <div class="col-md-10">
                                            <textarea class="form-control"  rows="5" name="main" required ></textarea>
                                            </div>
                                            </div>

                                            <div class="form-group">
                                            <label class="col-md-2 control-label">Anticipated Artifacts</label>
                                            <div class="col-md-10">
                                            <textarea class="form-control"  rows="5" name="ant" required ></textarea>
                                            </div>
                                            </div>
											
                                            <div class="form-group">
                                            <label class="col-md-2 control-label">Software Requirements</label>
                                            <div class="col-md-10">
                                            <textarea class="form-control"  rows="5" name="soft" required ></textarea>
                                            </div>
                                            </div>

                                            <div class="form-group">
                                            <label class="col-md-2 control-label">Hardware Requirements</label>
                                            <div class="col-md-10">
                                            <textarea class="form-control"  rows="5" name="hard" required ></textarea>
                                            </div>
                                            </div>
											
											<div class="form-group">
                                            
                                            <div class="col-md-10" style="padding-left: 200px;" >
                                            <button type="submit" class="btn btn-success" name="register">Send Proposal</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                            </div>
                                            </div>
											
							
											
											
                                            
                                            
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    
                                </div>
                                <!-- /.row (nested) -->
                            <?php 
                        }
                        else 
                        {
                            ?>
                            <h3 style="color:red;margin-left: 10px;">Proposal Submission has been closed</h3>
                            <?php
                        }
                    }
                            ?>
                            </div>
                
					
			<script>
			
			function showDiv() {
			document.getElementById('pDiv').style.display = "block";
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