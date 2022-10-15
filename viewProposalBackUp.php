<!DOCTYPE html>
<?php
session_start();
include('session.php');
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
		
		<link href="css/styles.css" rel="stylesheet" type="text/css">

        
		<?php
        
       include 'classProject.php';
                  
            $obj = new project();
            $projectID=$_GET['id'];
            
        ?>
		
		
		
    </head>
    <body>

        <div id="wrapper">
         <?php include 'menuAdmin.php'; ?>
            
        

            <!-- Page Content -->
            <div id="page-wrapper" style="margin-top: 35px;">
                <div class="container-fluid">
				
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default" style="margin-left:-30px;">
                            <div class="panel-heading">
                                Proposal Information
                            </div>
                            <!-- /.panel-heading -->
						<div class="panel-body">
                        <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
						<thead>
                          <tr>
                            <th>SN</th>
                            <th>Student Name</th>
                            <th>Registration Number</th>
                            <th>Programme</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <?php
									$i=1;
                                    foreach ($obj->viewStudentProposal($projectID) as $std) {
                                        ?>
                                        <tr>
                                            <td>
                                               <?php echo $i; ?>
                                            </td>
                                            <td>
                                                
                                                <?php
                                                $name=strtoupper($std['fName'] . " " . $std['mName'] . " " . $std['lName']);
                                                echo $name;
                                                ?>
                                                
                                            </td>
                                            
                                            <td>
                                                <?php
                                                echo $std['regNo'];
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                echo $std['prgName'];
                                                ?>
                                            </td>
											
										</tr>
                                    <?php
                                    $i++;
                                    }
                                    ?>
									
											
                        </tbody>
						</table>
					    </div>
					
					<form role="form" action="sendComments.php" method="post">
                        <?php 
                        foreach ($obj->viewProposal2($projectID) as $prj) {
                                        ?>
                                            <div class="form-group">
                                               <input type="hidden" name="projectID" value="<?php echo $projectID;?>">
                                                <label> Project Title</label>
                                                <input class="form-control " value="<?php echo $prj['title'] ?>" readonly="readonly">
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label> Brief Problem Statement</label>
                                                <textarea class="form-control" rows="5" readonly="readonly"><?php echo $prj['problem_statement'] ?>"</textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Current Situation</label>
                                                <textarea class="form-control" rows="5"  readonly="readonly"><?php echo $prj['current_situation'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> How the proposed system will solve problem</label>
                                                <textarea class="form-control" rows="5" readonly="readonly"><?php echo $prj['proposed_solution'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Main Aim and Specific Objectives</label>
                                                <textarea class="form-control" rows="5" readonly="readonly"><?php echo $prj['main_objectives'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Anticipated Artifacts</label>
                                                <textarea class="form-control" rows="3"  readonly="readonly"><?php echo $prj['anticipated_artifact'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Software Requirements</label>
                                                <textarea class="form-control" rows="3" readonly="readonly"><?php echo $prj['software_requirements'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Hardware Requirements</label>
                                                <textarea class="form-control" rows="3" readonly="readonly"><?php echo $prj['hardware_requirement'] ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Technology </label>
                                                <input class="form-control " value="<?php echo $prj['techName'] ?>" readonly="readonly">
                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                <label> Year</label>
                                                
                                                <input class="form-control"  value="<?php echo $prj['year'] ?>" readonly="readonly">
                                                
                                            </div>

                                            <div class="form-group">
                                                <label>Comment Category</label>
                                                <select class="form-control"  name="commentName" required>
                                                    <option value="Proposal"> Proposal Comment</option>
                                                    <option value="Design"> Design Comment</option>
                                                    <option value="Project"> Project Comment</option>
                                                </select>
                                                
                                                
                                            </div>

                                            <div class="form-group">
                                                <label>Comment Description</label>
                                                <textarea class="form-control" rows="3" name="commentDes"></textarea>
                                            </div>
                                            
                                            
                                            <button type="submit" class="btn btn-success" name="register">Send Comments</button>
                                            
                                <?php
                                    
                                }
                                    ?>
                                        </form>

					</div>
						</div>
					</div>
				</div>
				
				</div>
				</div>
			<!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        
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