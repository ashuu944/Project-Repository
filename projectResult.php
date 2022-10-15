<div class="row" style="margin-top: 10px;">

                    <div class="col-md-10">
                        <div class="panel panel-default">
                            
                            
                            <!-- /.panel-heading -->
                        <div class="panel-body">
                                           
 <form action="addResult.php" method="post">

<table class="table table-bordered table-responsive-xl table-hover display">
    <thead>
                          <tr>
                            <th>SN</th>
                            <th>Student Name</th>
                            <th>Reg.Number</th>
                            <th>Design Marks</th>
                            <th>Doc Marks</th>
                            <th>System Marks</th>
                            
                            </tr>
                        </thead>
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
                                    
$studentResult=$obj->viewResult($id);
if(!empty($studentResult))
 {
    foreach ($obj->viewResult($id) as $re) {
                                        ?>

                                            <td>
                                                <input type="hidden" name="resultID<?php echo $count;?>" value="<?php echo $re['resultID'];?>">
                                                <input type="text" name="designM<?php echo $count;?>" class="form-control" value=" <?php echo $re['design_marks'];?>">
                                            </td>
                                            <td>
                                                <input type="text" name="docM<?php echo $count;?>" class="form-control" value="<?php echo $re['doc_marks'];?>">
                                            </td>
                                            <td>
                                                <input type="text" name="systemM<?php echo $count;?>" class="form-control" value=" <?php echo $re['pres_marks'];?>">
                                            </td>

                                            
                                       <?php
                                    
                                    }
                                }else
                                {
                                    ?>
                                     <td>
                                                <input type="hidden" name="id<?php echo $count;?>" value="<?php echo $std['id'];?>">
                                                <input type="text" name="designM<?php echo $count;?>" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="docM<?php echo $count;?>" class="form-control" >
                                            </td>
                                            <td>
                                                <input type="text" name="systemM<?php echo $count;?>" class="form-control" >
                                            </td>
                                    <?php 
                                }
                                ?>
                      
                    </tr>
                                    <?php
                                    $count++;
                                    }
                                    ?>
                  
                      
                        </tbody>

 </table>
 <div class="row">
    <div class="col-lg-10">
        <?php 
        $studentResult=$obj->viewResult($id);
if(!empty($studentResult))
 {
        ?>
        <input type="hidden" name="number_student" value="<?php echo $count-1;?>">
        <input type="hidden" name="projectID" value="<?php echo $projectID;?>">
        <button class="btn btn-info" type="submit" name="doUpdate" value="Save"><i class = "fa fa-save"></i> Update Records</button>
        <?php 
    }
    else
    {
        ?>
        <input type="hidden" name="number_student" value="<?php echo $count-1;?>">
        <input type="hidden" name="projectID" value="<?php echo $projectID;?>">
        <button class="btn btn-info" type="submit" name="doSubmit" value="Save"><i class = "fa fa-save"></i> Save Records</button>
        <?php
    }
    ?>
    </div>
 </div>
</form>
                    </div>
                        </div>
                    </div>
                </div>