<?php
/*include('session.php');
        
    include 'classProject.php';
                  
    $obj = new project();
    */
    $userID = $_SESSION['id'];
    foreach ($obj->profile($userID) as $s) {
        $stdID=$s['stdID'];
    }
?>
<div class="row" style="margin-top: 10px;">

                    <div class="col-md-10">
                        <div class="panel panel-default">
                            
                            <!-- /.panel-heading -->
                        <div class="panel-body">

                                        <form role="form" action="updateProposal.php" method="post">
                                        <?php
                                         foreach ($obj->viewProposal2($projectID) as $prj) {
                                            ?>
                                            
                                            <div class="form-group">
                                              <input type="hidden" name="stdID" value="<?php echo $stdID;?>">
                                              <input type="hidden" name="projectID" value="<?php echo $projectID;?>">
                                              <label class="col-md-2 control-label">Project Title</label>
                                              <div class="col-md-10">
                                                <input type="text" style="margin-bottom: 10px;" class="form-control" name="title" value="<?php echo $prj['title'] ?>">
                                              </div>
                                            </div>
                                            
                                            <div class="form-group">
                                              <label class="col-md-2 control-label">Year</label>
                                              <div class="col-md-4">
                                                <select class="form-control" name="year" style="margin-bottom: 10px;" requied>
                                                                        <option value = "<?php echo $prj['year'];?>"><?php echo $prj['year'];?></option>
                                                    <?php
                                                    $Syear=date('Y');
                                                    $Eyear=date('Y')-15;
                                                    for($Syear;$Syear>=$Eyear;$Syear--){
                                                        echo '<option value="'.$Syear.'">'.$Syear.'</option>';

                                                    }


                                                    ?>
                                                    
                                                </select>
                                            </div>

                                            <label class="col-md-2 control-label">Technology</label>
                                            <div class="col-md-4">
                                            <select  name = "techID" class = "form-control" required style="margin-bottom: 10px;">
                                                    <option value = "<?php echo $prj['techID'];?>"><?php echo $prj['techName'];?></option>
                                                <?php   
                                                
                                            foreach ($obj->viewCategory() as $cat) {
                                                ?>                                                                              
                                                <option value = "<?php echo $cat['techID'];?>"><?php echo $cat['techName'];?></option>  
                                                <?php } ?>                                                               
                                            </select>
                                        </div>
                                    </div>
                                                                                      
                                            
                                            <div class="form-group">
                                              <label class="col-md-2 control-label" for="description">Brief Problem Statement</label>
                                                <div class="col-md-10">
                                                <textarea class="form-control" rows="5" name="problem" style="margin-bottom: 10px;" required ><?php echo $prj['problem_statement'] ?></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                              <label class="col-md-2 control-label" for="description">Current Situation</label>
                                                <div class="col-md-10">
                                                <textarea class="form-control" rows="5" name="current" style="margin-bottom: 10px;" required><?php echo $prj['current_situation'] ?></textarea>
                                                </div>
                                            </div>
                                            

                                            <div class="form-group">
                                              <label class="col-md-2 control-label" for="description">Proposed Solution</label>
                                                <div class="col-md-10">
                                                <textarea class="form-control" rows="5" name="solution" style="margin-bottom: 10px;" required><?php echo $prj['proposed_solution'] ?></textarea>
                                                </div>
                                            </div>
                                            

                                            <div class="form-group">
                                              <label class="col-md-2 control-label" for="description">Main Objectives</label>
                                                <div class="col-md-10">
                                                <textarea class="form-control" rows="5" name="main" style="margin-bottom: 10px;" required><?php echo $prj['main_objectives'] ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                              <label class="col-md-2 control-label" for="description">Anticipated Artifacts</label>
                                                <div class="col-md-10">
                                                <textarea class="form-control" rows="5" name="ant" style="margin-bottom: 10px;" required><?php echo $prj['anticipated_artifact'] ?></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                              <label class="col-md-2 control-label" for="description">Software Requirements</label>
                                                <div class="col-md-10">
                                                <textarea class="form-control" rows="5" name="soft" style="margin-bottom: 10px;" required><?php echo $prj['software_requirements'] ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                              <label class="col-md-2 control-label" for="description">Hardware Requirements</label>
                                                <div class="col-md-10">
                                                <textarea class="form-control" rows="5" name="hard" style="margin-bottom: 10px;" required><?php echo $prj['hardware_requirement'] ?></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-md-10">
                                                </div>
                                                <div class="col-md-2">
                                                <button type="submit" class="btn btn-primary" name="update">Save Changes</button>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                           <?php
                                    
                                        }
                                        ?>                                
                                        </form>
                                    </div>
                        </div>
                    </div>
                </div>
                    
                                 
                         
                                   
			
			
