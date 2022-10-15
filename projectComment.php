<div class="row" style="margin-top: 10px;">

                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: transparent;">
                            <h4>Comments of Project</h4>
                        </div>
                            
                            <!-- /.panel-heading -->
                        <div class="panel-body">
                        
               
                    


<table class="table table-bordered table-responsive-xl table-hover display">
    <tr>
        <th>SN</th>
        <th>Comment Category</th>
        <th>Comment Description</th>
        
    </tr>
    <?php
        $i=1;
        foreach ($obj->projectComments($projectID) as $prj) {
                                            ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $prj['name'];?></td>
        <td><?php echo $prj['commentDescp'];?></td>
        
    </tr>
   <?php include 'addCommentModal.php';?>
  <?php
   $i++;
   }
  ?>

 </table>

 

 <div class="row">
    <div class="col-lg-4">
        <a href="#addComment<?php echo $projectID ?>;" class="btn btn-success" data-toggle = "modal" data-target="#addComment<?php echo $projectID?>"><i class = "fa fa-edit"></i> Add Comment</a>
    </div>
 </div>

                    </div>
                        </div>
                    </div>
                </div>