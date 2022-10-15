<!DOCTYPE html>
<?php
session_start();
include('session.php');
include 'classProject.php';
$obj=new project();
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
		
		

        
		
		
		
		
    </head>
    <body>

        <div id="wrapper">
         <?php include 'menuAdmin.php'; ?>
            
        

            <!-- Page Content -->
            <div id="page-wrapper" style="margin-top:35px;">
                
				

					
					
					
					
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-default" style="margin-left:-16px;">
                            <div class="panel-heading" style="background-color: transparent;">
                            <h4> Register user accounts</h4>
                            </div>
                            <!-- /.panel-heading -->
						<div class="panel-body">

                            <form role="form" class="form-horizontal" method="post" action="addUser.php" >
                        
                        
                        <div class="form-group">
                          
                          <label class="col-md-2 control-label">First Name</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" name="fName" required>
                          </div>

                          <label class="col-md-2 control-label">Middle Name</label>
                          <div class="col-md-4">
                            <input type="text" name="mName" class="form-control" required>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-md-2 control-label">Last Name</label>
                          <div class="col-md-4">
                            <input type="text" name="lName" class="form-control" required>
                          </div>


                          <label class="control-label col-md-2" for="gender"> Gender </label>
                        <div class="col-md-4" style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size: 14px;">  &nbsp &nbsp &nbsp &nbsp
                          Female
                        <input type="radio" class="flat" name="gender" id="genderF" value="F" checked="" required /> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Male
                        <input type="radio" class="flat" name="gender" id="genderM" value="M" />
                        </div>

                          
                        </div>

                        <div class="form-group">
                          
                          <label class="col-md-2 control-label">Email</label>
                          <div class="col-md-4">
                            <input type="email" class="form-control" name="email" required>
                          </div>

                          <label class="col-md-2 control-label">User Role</label>
                          <div class="col-md-4">
                                        <select  name = "statusID" class = "form-control">
                                                <?php   
                                                
                                                foreach ($obj->viewRole() as $role) {
                                                ?>                                                                              
                                                <option value = "<?php echo $role['statusID'];?>"><?php echo $role['statusName'];?></option>    
                                                <?php } ?>                                                               
                                            </select>
                          </div>


                        </div>

                        <div class="form-group">
                          
                          <label class="col-md-2 control-label">Username</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" name="username" required>
                          </div>

                          <label class="col-md-2 control-label">Password</label>
                          <div class="col-md-4">
                            <input type="password" name="password" class="form-control" required>
                          </div>
                        </div>

                        


                        <div class="form-group">
                          <div class="col-md-10">
                          </div>
                          <div class="col-md-2">
                            <button type="submit" class="btn btn-success" name="register">Create User</button>
                          </div>
                        </div>


                    </form>
                        <hr>
<h4 style="text-align: left;">Upload excel file with .csv format for creating multiple user accounts</h4>
<h5>Please make sure the file you upload must start with First Name->Middle Name->Last Name->Registration Number->email</h5>
<hr>
<form role="form" class="form-horizontal" method="post" action="addUser.php" enctype="multipart/form-data">
                        
                        

                        

                      
                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description"> Attachment</label>
                          <div class="col-md-10">
                            <input type="file" name="file" class="form-control" required/>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-10">
                          </div>
                          <div class="col-md-2">
                            <button name="upload" type="submit" class="btn btn-primary"> Upload File</button>
                          </div>
                        </div>


                    </form>					
					</div>
						</div>
					</div>
				</div>
				
				</div>
				</div>
		

        
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>
		
		<!-- DataTables JavaScript -->
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>
		
		 <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
