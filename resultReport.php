<!DOCTYPE html>
<?php
session_start();
include('session.php');
include 'classProject.php';
                  $userID = $_SESSION['id'];
            $obj = new project();
            foreach ($obj->profileSupervisor($userID) as $spr) {
                    $sprID=$spr['sprID'];
                    
                    }
                    

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
        
            <div id="page-wrapper" style="margin-top: 35px;">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default" style="margin-left:-16px;">
                            <div class="panel-heading" style="background-color: transparent;">
                                
                                <h4>Project Results</h4>
                            </div>
                            <!-- /.panel-heading -->
                        <div class="panel-body">
      <table class="table table-bordered table-responsive-xl table-hover display">
    
        <?php foreach ($obj->myGroups($sprID) as $prj) {
                        $projectID=$prj['projectID']
                                        ?>
                                       <tr style="background-color: lightblue;"><th colspan="8" align="center"><?php echo $prj['title']?></th></tr>
                          <tr>
                            <th>SN</th>
                            <th>Student Name</th>
                            <th>Reg.Number</th>
                            <th>Design Marks</th>
                            <th>Doc Marks</th>
                            <th>System Marks</th>
                            <th>Total</th>
                            <th>Grade</th>
                            
                            </tr>
                        
                        <tbody>
                                    <?php
                                $count=1;                                    
                foreach ($obj->viewStudentProposal($projectID) as $std) {
                                        ?>

                                        <tr>
                                        
                                        <?php 
                                        $stdID=$std['stdID'];
                                        
                                        ?>
                                        
                                            <td>
                                               <?php echo $count; ?>
                                            </td>
                                            <td>
                                                
                                                <?php
                                                $name=$std['fName'] . " " . $std['mName'] . " " . $std['lName'];
                                                echo $name;
                                                $id=$std['id'];
                                                ?>
                                                
                                            </td>
                                            
                                            <td>
                                                <?php
                                                echo $std['regNo'];
                                                ?>
                                            </td>
                                        <?php
                                    

                                        $total=0;
    foreach ($obj->viewResult($id) as $re) {
         $total=$re['design_marks']+$re['doc_marks']+$re['pres_marks'];
                                        ?>

                                            <td>
                                                <!--<input type="hidden" name="resultID<?php //echo $count;?>" value="<?php //echo $re['resultID'];?>">-->
                                                 <?php echo $re['design_marks'];?>
                                            </td>
                                            <td>
                                                <?php echo $re['doc_marks'];?>
                                            </td>
                                            <td>
                                                <?php echo $re['pres_marks'];?>
                                            </td>

                                            <td><?php echo $total;?></td>
                                            <td>
                                                <?php 
                                                if($total>=70)
                                                    echo "A";
                                                else if($total>=60)
                                                    echo "B+";
                                                else if($total>=50)
                                                    echo "B";
                                                else if($total>=40)
                                                    echo "C";
                                                else if($total>=30)
                                                    echo "D";
                                                else
                                                    echo "F";
                                                ?>
                                            </td>
                                       <?php
                                       
                                    }
                                
                                ?>
                      
                    </tr>
                                    <?php
                                    $count++;
                                    }
                                    ?>
                  <?php
                                   
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
        

    </body>

</html>


<?php
//session_start();
//include('session.php');
        
//include 'classProject.php';
                  
            //$obj = new project();
            //$projectID=$_GET['id'];

//?>


