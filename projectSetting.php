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
                            <h4> Project Settings</h4>
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
                          <label class="col-md-2 control-label">Setting Type</label>
                          <div class="col-md-10">
                            <select name="settingType" class="form-control" required>
                                <option value="">--Select Type of Setting--</option>
                                <option value="Proposal">Proposal</option>
                                <option value="Design"> Design</option>
                                <option value="System"> System</option>

                            </select>
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
                          <div class="col-md-9">
                          </div>
                          <div class="col-md-3">
                            <button name="upload" type="submit" class="btn btn-primary"> Save Records</button>
                          </div>
                        </div>


                    </form>
                        

<hr>
<table class="table table-bordered table-responsive-xl table-hover display">
    <tr>
        <th>SN</th>
        <th>Setting Title</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Action</th>
    </tr>
    <?php
        
       
            $i=1;
            
        ?>
    <?php foreach ($obj->viewSetting()as $ann) 
{
    
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $ann['title'];?></td>
        <td><?php echo $ann['startDate'];?></td>
        <td><?php echo $ann['endDate'];?></td>
        <td>
          <a href="#update<?php echo $ann['ID'] ?>" class="btn btn-success btn-xs"  data-toggle = "modal"  data-target="#update<?php echo $ann['ID'] ;?>"><i class = "fa fa-pencil"></i> Edit</a>
                      </td>
        </td>
        
    </tr>
    <?php include 'updateSetting.php';?>
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
