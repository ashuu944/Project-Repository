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

        <div id="wrapper" style="margin-top: 25px;">

            <!-- Navigation -->
            <?php include "menuStudent.php"?>

			<div id="page-wrapper">
                
                <?php include "menuS.php"?>

                

                <div class="row" style="margin-top: 10px;">

                                <div class="hr dotted"></div>

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Project Details
                            </div>
                            
                            <div class="panel-body">
                                
								<div  class="row">
                                    <div class="col-lg-8" id="pDiv">

                                        <form role="form" action="updateProposal.php" method="post">
                                        <?php
                                         foreach ($obj->myProject($stdID) as $prj) {
                                            ?>
                                            <div class="form-group">
                                               <input type="hidden" name="projectID" value="<?php echo $prj['projectID'];?>">
                                                                                               
                                            </div>
                                                                            
                                            <div class="form-group">
                                               <input type="hidden" name="stdID" value="<?php echo $stdID;?>">
                                                <label> Project Title</label>
                                                <input class="form-control " name="title" value="<?php echo $prj['title'] ?>" required>
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label> Brief Problem Statement</label>
                                                <textarea class="form-control" rows="5" name="problem" required><?php echo $prj['problem_statement'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Current Situation</label>
                                                <textarea class="form-control" rows="5" name="current" required><?php echo $prj['current_situation'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> How the proposed system will solve problem</label>
                                                <textarea class="form-control" rows="5" name="solution" required><?php echo $prj['proposed_solution'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Main Aim and Specific Objectives</label>
                                                <textarea class="form-control" rows="5" name="main" required><?php echo $prj['main_objectives'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Anticipated Artifacts</label>
                                                <textarea class="form-control" rows="3" name="ant" required><?php echo $prj['anticipated_artifact'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Software Requirements</label>
                                                <textarea class="form-control" rows="3" name="soft" required><?php echo $prj['software_requirements'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Hardware Requirements</label>
                                                <textarea class="form-control" rows="3" name="hard" required><?php echo $prj['hardware_requirement'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Technology </label>
                                                <select  name = "techID" class = "form-control">
                                                <option value = "<?php echo $prj['techID'];?>"><?php echo $prj['techName'];?></option>
                                                <?php   
                                                
                                                foreach ($obj->viewCategory() as $cat) {
                                                ?>                                                                              
                                                <option value = "<?php echo $cat['techID'];?>"><?php echo $cat['techName'];?></option>  
                                                <?php } ?>                                                               
                                            </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Year</label>
                                                
                                                <input class="form-control" name="year" type="number" min="2015" max="2050" value="<?php echo $prj['year'] ?>" >
                                                
                                            </div>
                                            
                                            
                                            <button type="submit" class="btn btn-success" name="update">Save Change</button>
                                            
                                            
                                           <?php
                                    
                                        }
                                        ?>                                
                                        </form>
                                 
                         
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    
                                </div>
                                <!-- /.row (nested) -->
                          
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
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