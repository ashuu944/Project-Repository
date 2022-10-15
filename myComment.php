<div class="row" style="margin-top: 10px;">

                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: transparent;">
                            <h4>Comments of Project</h4>
                        </div>
                            
                            <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                        
                   <?php foreach ($obj->myTitle($stdID) as $std) {
                                        
    $projectID = $std['projectID'];
    $title = $std['title'];
    
    }
    ?>
                    


<table class="table table-bordered table-responsive-xl table-hover display">
    <tr>
        <th>SN</th>
        <th>Comment Category</th>
        <th>Comment Description</th>
        
    </tr>
    <?php
        $i=1;
        foreach ($obj->myProject($stdID) as $prj) {
                                            ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $prj['name'];?></td>
        <td><?php echo $prj['commentDescp'];?></td>
        
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