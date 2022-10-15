<!DOCTYPE html>
<?php
session_start();
include('session.php');
include 'classProject.php';
                  
$obj = new project();
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
                            <h4> Announcements</h4>
                            </div>
                            <!-- /.panel-heading -->
						<div class="panel-body">

                            <form role="form" class="form-horizontal" method="post" action="uploadAnnounce.php" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          
                          <label class="col-md-2 control-label">Title</label>
                          <div class="col-md-10">
                            <input type="text" class="form-control" name="title" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label">Start Date</label>
                          <div class="col-md-10">
                            <input type=date name="startDate" class="form-control" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label">End Date</label>
                          <div class="col-md-10">
                            <input type=date name="endDate" class="form-control" required>
                          </div>
                        </div>

                      
                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description"> Attachment</label>
                          <div class="col-md-10">
                            <input type="file" name="attachment" class="form-control" required/>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-9">
                          </div>
                          <div class="col-md-3">
                            <button name="upload" type="submit" class="btn btn-primary"> Send Announcement</button>
                          </div>
                        </div>


                    </form>
                        <hr>
<h4 style="text-align: left;">Uploaded Announcements</h4>
<hr>
<table class="table table-bordered table-responsive-xl table-hover display">
    <tr>
        <th>SN</th>
        <th>Announcement Title</th>
        <th>Attachment</th>
        <th>Action</th>
    </tr>
    <?php
        
       
            $i=1;
            
        ?>
    <?php foreach ($obj->viewAnnouncement() as $ann) 
{
    
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $ann['title'];?></td>
        <td><a href="download.php?content=<?php echo $ann['path']?>"class="btn btn-success btn-xs" ><i class = "fa fa-download"></i> Download</a></td>
        <!--<td><a href="read.php?content=<?php echo $ann['path'] ?>"class="btn btn-success btn-xs" ><i class = "fa fa-edit"></i> View</a></td>-->
        
        <td><a href="deleteFile.php?id=<?php echo $ann['ID'] ?>"class="btn btn-danger btn-xs" onclick="return confDelete()"><i class = "fa fa-trash"></i> Delete</a></td>
    </tr>
    <?php
    $i++;
}
        ?>

    

 </table>
					
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
