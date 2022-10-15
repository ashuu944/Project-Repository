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
                        <div class="panel panel-info" style="margin-left:-30px;">
                            <div class="panel-heading" style="background-color: transparent;">
                                <h4>Project Proposal Information</h4>
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
              <hr>
					
					<form role="form" action="sendComments.php" method="post">
                        <?php 
                        foreach ($obj->viewProposal2($projectID) as $prj) {
                                        ?>
                                            <div class="form-group">
                          <input type="hidden" name="projectID" value="<?php echo $projectID;?>">
                          <label class="col-md-2 control-label">Project Title</label>
                          <div class="col-md-10">
                            <input type="text" readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control" name="title" value="<?php echo $prj['title'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label">Developed Year</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" value="<?php echo $prj['year'] ?>">
                          </div>

                         <label class="col-md-2 control-label">Technology</label>
                          <div class="col-md-4">
                            <input type="text" readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control" value="<?php echo $prj['techName'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Problem Statement</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['problem_statement'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Current Situation</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['current_situation'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Proposed Solution</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['proposed_solution'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Main Objectives</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['main_objectives'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Software Requirement</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="3" ><?php echo $prj['software_requirements'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Hardware Requirement</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="3" ><?php echo $prj['hardware_requirement'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                         <label class="col-md-2 control-label" for="description">Comment Category</label>
                         <div class="col-md-10">
                            <select class="form-control"  name="commentName" required style="margin-bottom: 10px;">
                                    <option value="Proposal" class="form-control" > Proposal Comment</option>
                                    <option value="Design" class="form-control"> Design Comment</option>
                                    <option value="Project" class="form-control"> Project Comment</option>
                                    </select>
                          </div>
                                                
                      </div>



                        <div class="form-group">
                                                
                            <label class="col-md-2 control-label" for="description">Comment Description</label>
                              <div class="col-md-10">
                              <textarea class="form-control" rows="3" name="commentDes" required="" style="margin-bottom: 10px"></textarea>
                            </div>

                        </div>     
                        <div class="form-group">
                                                
                            <div class="col-md-10"></div>
                              <div class="col-md-2">
                              <button type="submit" class="btn btn-success" name="register">Send Comments</button>
                            </div>

                        </div>   
                                            
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