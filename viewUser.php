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
	   $obj=new project();
        
        ?>
		
	<script type="text/javascript">
		function confDelete(){
			
				return confirm("Are you sure you want to deactivate this account ?");

		}
	</script>
		
    </head>
    <body>

        <div id="wrapper">
         <?php include 'menuAdmin.php'; ?>
            
        

            <!-- Page Content -->
            <div id="page-wrapper" style="margin-top: 35px;">
			    <div class="container-fluid" style="margin-left: -30px;">			
										
                <div class="row">
                    <div class="col-lg-10">
						<div class="panel panel-default">
                          <div class="panel-heading" style="background-color: transparent;">
                                User Accounts Information
                            </div>
                            <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                        <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
						<thead>
                          <tr>
                            <th>SN</th>
                            <th>Username</th>
							<th>Role</th>
							<th>Status</th>
							<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <?php
									$i=1;
                                    foreach ($obj->viewUser() as $user) {
                                        ?>
										
										
                                        <tr>
                                            <td>
                                               <?php echo $i; ?>
                                            </td>
											
                                            <td>
                                                <?php
                                                echo $user['UserName'];
                                                ?>
                                            </td>
																						
											<td>
                                                <?php
                                                echo $user['statusName'];
                                                ?>
                                            </td>
											
											<td>
											    
                                                <?php
                                                echo $user['status'];
                                                ?>
												
                                            </td>
                                            
                                            
											
                                                <td>
                                                
                                                
                                                <a href="ActivateUser.php?id=<?php echo $user['userID'] ?>" class="btn btn-success btn-xs" > Activate </a>

                                                <a href="DeactivateUser.php?id=<?php echo $user['userID'] ?>"class="btn btn-danger btn-xs" onclick="return confDelete()"> Deactivate</a>
                                             
                                             </td>
                                               
                                            
                                                

                                          
                                                                                 
                                        
                                            

											<!--<a href="#update<?php //echo $user['userID'] ?>" class="btn btn-primary btn-xs"  data-toggle = "modal"  data-target="#update<?php //echo $user['userID'] ?>"><i class = "fa fa-pencil"></i> Edit</a> &nbsp &nbsp &nbsp &nbsp -->
											
											
											
										</tr>
										
										
								    <?php
									$i++;
                                    }
                                    ?>
											
                        </tbody>
						</table>
						<!--<?php //include 'updateUserModal.php';?>-->
					    </div>
                        
						</div>
						</div>
					</div>	
					
				</div>
					
				</div>
					<!-- /.container-fluid -->
			</div>
            <!-- /#page-wrapper -->

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
