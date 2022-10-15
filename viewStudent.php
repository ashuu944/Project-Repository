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
			
				return confirm("Do you want to delete this record ?");

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
				    <div class="col-lg-12">
                    <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: transparent;">
                                Students Information
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
						<thead>
                          <tr>
                            <th>SN</th>
                            <th>Student Name</th>
							<th>Registration No.</th>
							<th>Programme</th>
                            <th>Gender</th>
							<th>Email</th>
							<th>Contact Number</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <?php
									$i=1;
                                    foreach ($obj->viewStudent() as $std) {
                                        ?>
                                        <tr>
                                            <td>
                                               <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php
												$name=$std['fName'] . " " . $std['mName'] . " " . $std['lName'];
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
											<td>
                                                <?php
                                                echo $std['gender'];
                                                ?>
                                            </td>
											<td>
                                                <?php
                                                echo $std['email'];
                                                ?>
                                            </td>
											<td>
                                                <?php
                                                echo $std['telNo'];
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
					
							</div>
                    </div>
					</div>
				</div>
			</div>
			</div>
			</div>
				<!-- /.container-fluid -->
            
            <!-- /#page-wrapper -->

        
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