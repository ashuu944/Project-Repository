<div class="row" style="margin-top: 10px;">

                    <div class="col-md-10">
                        <div class="panel panel-default">
                            
                            <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                        
                   <?php foreach ($obj->myTitle($stdID) as $std) {
                                        
    $projectID = $std['projectID'];
    $title = $std['title'];
    
    }
    
           $result=$obj->viewFuture($projectID);
           if(!empty($result)){

                        foreach ($obj->viewFuture($projectID) as $prj) { ?> 
                          <form role="form" class="form-horizontal" method="post" action="addFutureWork.php" >
                        
                        <div class="form-group">
                          <input type="hidden" name="projectID" value="<?php echo $projectID;?>">
                          <label class="col-md-2 control-label">Project Title</label>
                          <div class="col-md-10">
                            <input type="text" readonly="readonly" class="form-control" name="title" value="<?php echo $title;?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label">Abstract</label>
                          <div class="col-md-10">
                            <textarea name="abstract" class="form-control" rows="5" required><?php echo $prj['abstract'];?></textarea>
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-md-2 control-label">Conclusion and Future Work</label>
                          <div class="col-md-10">
                            <textarea name="future" class="form-control" rows="8" required ><?php echo $prj['future'];?></textarea>
                          </div>
                        </div>

                      
                        

                        <div class="form-group">
                          <div class="col-md-10">
                          </div>
                          <div class="col-md-2">
                            <button name="update" type="submit" class="btn btn-primary">Submit Project</button>
                          </div>
                        </div>


                    </form>

                  <?php }

                }else {?>

                  <form role="form" class="form-horizontal" method="post" action="addFutureWork.php" >
                        
                        <div class="form-group">
                          <input type="hidden" name="projectID" value="<?php echo $projectID;?>">
                          <label class="col-md-2 control-label">Project Title</label>
                          <div class="col-md-10">
                            <input type="text" readonly="readonly" class="form-control" name="title" value="<?php echo $title;?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label">Abstract</label>
                          <div class="col-md-10">
                            <textarea name="abstract" class="form-control" rows="5" required></textarea>
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-md-2 control-label">Conclusion and Future Work</label>
                          <div class="col-md-10">
                            <textarea name="future" class="form-control" rows="8" required ></textarea>
                          </div>
                        </div>

                      
                        

                        <div class="form-group">
                          <div class="col-md-10">
                          </div>
                          <div class="col-md-2">
                            <button name="update" type="submit" class="btn btn-primary"> Submit Project</button>
                          </div>
                        </div>

                        </form>
                  <?php }?>

                </div>
                        </div>
                    </div>
                </div>