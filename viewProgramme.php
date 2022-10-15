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
            <div class="container-fluid" style="margin-left: -11px;">
				
			<div class="row">
				
				<form action="addProgramme.php" method="POST" >
				<div class="row">
				    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                     <input name="pCode" class="form-control" placeholder="Programme Code" required/>
                     </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                     <input name="progName" class="form-control" placeholder="Enter Programme Name" required/>
                    </div>
					 <button type="submit" class="btn btn-primary" name="register">Add Programme</button>
                </div>        
				
				</form>

			</div>
            <div class="row" style="padding-top:25px;">

					
					
					
					
                <div class="row">
				    <div class="col-lg-10">
                    <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: transparent;">
                                Programme Information
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
						<thead>
                          <tr>
                            <th>SN</th>
                            <th>Programme Code</th>
                            <th>Programme Name</th>
							<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <?php
									$i=1;
                                    foreach ($obj->viewProgramme() as $prog) {
                                        ?>
                                        <tr>
                                            <td>
                                               <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $prog['prgCode'];
                                                ?>
                                            </td>
											<td>
                                                <?php
                                                echo $prog['prgName'];
                                                ?>
                                            </td>
                                            <td>
											<a href="#update<?php echo $prog['prgID'] ?>" class="btn btn-success btn-xs"  data-toggle = "modal"  data-target="#update<?php echo $prog['prgID'] ;?>"><i class = "fa fa-pencil"></i> Edit</a> &nbsp &nbsp &nbsp &nbsp 
											<a href="deleteProgramme.php?id=<?php echo $prog['prgID'] ;?>" class="btn btn-danger btn-xs" onclick="return confDelete()"><i class = "fa fa-trash"></i> Delete</a>
											</td>
											
										</tr>
										<?php include 'updateProgrammeModal.php';?>
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