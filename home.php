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

        
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include "menuAdmin.php"?>

            <!-- Page Content -->
            <div id="page-wrapper" style="margin-top: 35px;padding-left: 0px;">
                <div class="container-fluid"  >
                    <div class="row">
                        <div class="col-md-4">
                        <div class="search">
                            <h4> Recently Uploaded Project</h4>
                            
                        </div>
                        </div>
                    </div>

                        <hr>
                        
                        
                        
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-9">
                        <div class="panel panel-default">
                            
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                
                                
                                
                                
                                
                                
                                
                            <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Project Title</th>
                            <th>Technology</th>
                            <th>Action</th>
                         </tr>
                        </thead>
                        <tbody>
                                    <?php
                                    $i=1;
                                    foreach ($obj->recentlyProject() as $cat) {
                                        ?>
                                        <tr>
                                            <td>
                                               <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $cat['title'];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $cat['techName'];
                                                ?>
                                            </td>
                                            
                                            <td>
                                            <a href="viewProj.php?id=<?php echo $cat['projectID'] ?>" class="btn btn-info btn-xs" ><i class = "fa fa-edit"></i> View Details</a>


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
                            <!-- /.panel-body -->
                        </div>

                    </div>
                    <!-- /.col-lg-8 -->
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i> Announcements
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                   <div class="list-group">
                                   <?php foreach ($obj->viewAnnouncement() as $ann) 
                                    {?>
                                
                                    <a href="read.php?content=<?php echo $ann['path'] ?>"class="btn btn-link">
                                            <span style="color=lightgrey'"><?php echo $ann['title']?>
                                            </span>
                                    </a>
                                    <?php }?>
                                </div>
                                <!-- /.list-group -->
                                
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

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
