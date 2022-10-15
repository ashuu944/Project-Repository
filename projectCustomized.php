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
            
        ?>
		
		
		
    </head>
    <body>

        <div id="wrapper">
         <?php include 'menuStudent.php'; ?>
            
        

            <!-- Page Content -->
            <div id="page-wrapper" style="margin-top:35px;">
                
				

					
					
					
					
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default" style="margin-left:-16px;">
                            <div class="panel-heading" style="background-color: transparent;">
                            <h4> Customized Project</h4>
                            </div>
                            <!-- /.panel-heading -->
						<div class="panel-body">
                        <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
						<thead>
                          <tr>
                            <th>SN</th>
                            <th>Title of the previous version </th>
                            <th>Title of the new version </th>
                            <th>Limitation and Solution Document</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <?php
									$i=1;
                                    foreach ($obj->customizedProject() as $prj) {
                                        ?> 
                                        <tr>

                                            <td>
                                               <?php echo $i; ?>
                                            </td>

                                            <td>
                                                <?php foreach ($obj->viewProposal2($prj['prevProjID']) as $proj) {
                                                
                                                $prev=$proj['title'];
                                            ?>
                                                <a href="viewP.php?id=<?php echo $proj['projectID'] ?>"><?php echo $prev;?></a>
                                            <?php
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <?php foreach ($obj->viewProposal2($prj['newProjID']) as $proj) {
                                                
                                                $new=$proj['title'];
                                            ?>
                                                <a href="viewP.php?id=<?php echo $proj['projectID'] ?>"><?php echo $new;?></a>
                                            <?php
                                                }
                                                ?>
                                            
                                            </td>


                                            <td><a href="download.php?content=<?php echo $prj['projLim_path'];?>"class="btn btn-success btn-xs" ><i class = "fa fa-download"></i> Download</a></td>
											
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
