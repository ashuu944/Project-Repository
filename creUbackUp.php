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

		include_once 'dbConnect.php';
		?>
		
    </head>
    <body>

        <div id="wrapper">
         <?php include 'menuAdmin.php'; ?>
            
        

            <!-- Page Content -->
        <div id="page-wrapper">
			    <div class="container-fluid">
						<div class="row" style="padding-top:40px;padding-left:18px;" >
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Create User
                            </div>
                            <div class="panel-body">
							<form role="form" action="addUser.php" method="POST">
                                <div class="row" style="margin-top:10px;">
								
								<div class="form-group">
								<label class="control-label col-md-4 col-sm-3 col-xs-12" for="username" style="padding-left:150px;"> Username </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="username" required="required" class="form-control col-md-7 col-xs-12">
								</div>
								</div>
								
								</div>
								
								<div class="row" style="margin-top:10px;">
								
								<div class="form-group">
								<label class="control-label col-md-4 col-sm-3 col-xs-12" for="password" style="padding-left:150px;"> Password </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
								</div>
								</div>
								
								</div>
								
								<div class="row" style="margin-top:10px;">
								
								<div class="form-group">
								<label class="control-label col-md-4 col-sm-3 col-xs-12" for="role" style="padding-left:150px;"> User Role </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								<select  name = "statusID" class = "form-control">
												<?php	
												include 'classProject.php';
                                                $obj=new project();
												foreach ($obj->viewRole() as $role) {
												?>																				
												<option value = "<?php echo $role['statusID'];?>"><?php echo $role['statusName'];?></option>	
												<?php } ?>																 
											</select>
								</div>
								</div>
								
								</div>
								
                                <div class="form-group" style="margin-top:10px;padding-left:670px;" > 
											
								<button type="submit" class="btn btn-primary" name="register">Create User</button>
                                   
							
				
								</div>
							</form>
                            </div>
                            <div class="form-group" style="padding-left:100px;margin-top:20px;">
							
							<h4>
							You can create multiple users at a time by uploading the excel file with a format of .csv
							</h4>
							
							<form method="post" action="createUserByFile.php" enctype="multipart/form-data">
							<div class="row">
							<input type="file" name="file"/> &nbsp &nbsp 
							</div>
							<div class="row" style="margin-left:30px;">
							<button type="submit" name="submit_file" class="btn btn-primary"> Upload File</button>
							</div>
							</form>
							
							</div>
							</div>
				
				
                        </div>
                    </div>
				</div>
				<!-- /.container-fluid -->
				</div>
            <!-- /#page-wrapper -->

        </div>
        
		
		</div>
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
