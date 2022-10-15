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
         <?php include 'menuStudent.php'; ?>
            
            <div id="page-wrapper" style="margin-top: 35px;">
               
					
                
                    <div class="col-md-12">
                      
                        <div class="panel panel-default" style="margin-left:-30px;">
                            
                            <div class="panel-heading" style="background-color: transparent;">
                            <h4> Project Information</h4>
                            </div>
						<div class="panel-body">
                        
					    
					
					<form role="form" class="form-horizontal">
                        <?php 
                        foreach ($obj->viewProposal($projectID) as $prj) {


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
                          <label class="col-md-2 control-label" for="description"> Abstract</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['abstract'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Problem Statement</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['problem_statement'] ?>"</textarea>
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
                          <label class="col-md-2 control-label" for="description">Future Work</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['future'] ?>"</textarea>
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