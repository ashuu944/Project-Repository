<div class="row" style="margin-top: 10px;">

                    <div class="col-md-10">
                        <div class="panel panel-default">
                            
                            <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                        
                   <?php foreach ($obj->myTitle($stdID) as $std) {
                                        
    $projectID = $std['projectID'];
    $title = $std['title'];
    
    }
    ?>
    <script type="text/javascript">
    function confDelete(){
      
        return confirm("Are you sure you want to drop this deliverable ?");

    }
  </script>
                    <form role="form" class="form-horizontal" method="post" action="upload.php" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <input type="hidden" name="projectID" value="<?php echo $projectID;?>">
                          <label class="col-md-2 control-label">Project Title</label>
                          <div class="col-md-10">
                            <input type="text" readonly="readonly" class="form-control" name="title" value="<?php echo $title;?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label">Category</label>
                          <div class="col-md-10">
                            <select name="name" class="form-control" required>
                                <option value="Design Document"> Design Document</option>
                                <option value="System Document"> System Document</option>
                                <option value="Project Code"> Project Source Code</option>

                            </select>
                          </div>
                        </div>

                      
                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description"> Attachment</label>
                          <div class="col-md-10">
                            <input type="file" name="deliverable" class="form-control" required/>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-4">
                          </div>
                          <div class="col-md-8">
                            <button name="upload" type="submit" class="btn btn-primary">Upload Document</button>
                          </div>
                        </div>


                    </form>

<hr>
<h4 style="text-align: center;">Uploaded Documents</h4>
<table class="table table-bordered table-responsive-xl table-hover display">
    <tr>
        <th>SN</th>
        <th>Document Category</th>
        <th>Attachment</th>
        <th>Action</th>
    </tr>

    <?php
        
            $i=1;
            
        ?>
    <?php foreach ($obj->myDeliverable($projectID) as $std) 
{
    
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $std['name'];?></td>
        <td><a href="download.php?content=<?php echo $std['path'];?>"class="btn btn-success btn-xs" ><i class = "fa fa-download"></i> Download</a></td>
        <td><a href="dropDeliverable.php?id=<?php echo $std['delID']; ?>"class="btn btn-danger btn-xs" onclick="return confDelete()"><i class = "fa fa-trash"></i> Drop</a></td>
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