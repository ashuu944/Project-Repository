<div class="row" style="margin-top: 10px;">

                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: transparent;">
                            <h4>Uploaded Deliverables</h4>
                        </div>
                        <div class="panel-body">
                        
<table class="table table-bordered table-responsive-xl table-hover display">
    <tr>
        <th>SN</th>
        <th>Document Category</th>
        <th>Attachment</th>
        
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