<div class="row" style="margin-top: 10px;">

                    <div class="col-md-10">
                        <div class="panel panel-default">
                            
                            <!-- /.panel-heading -->
                        <div class="panel-body">
                        	<form role="form" class="form-horizontal">
                        <?php 
                        foreach ($obj->viewProposal2($projectID) as $prj) {


                                        ?>

                        <div class="form-group">
                          <input type="hidden" name="projectID" value="<?php echo $projectID;?>">
                          <label class="col-md-2 control-label">Project Title</label>
                          <div class="col-md-10">
                            <input type="text" readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control" name="title" value="<?php echo $prj['title'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label">Developed Year</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" value="<?php echo $prj['year'] ?>">
                          </div>

                         <label class="col-md-2 control-label">Technology</label>
                          <div class="col-md-4">
                            <input type="text" readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control" value="<?php echo $prj['techName'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Problem Statement</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['problem_statement'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Current Situation</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['current_situation'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Proposed Solution</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['proposed_solution'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Main Objectives</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['main_objectives'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Software Requirement</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['software_requirements'] ?>"</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="description">Hardware Requirement</label>
                          <div class="col-md-10">
                            <textarea readonly="readonly" style="margin-bottom: 10px;background-color:#ffffff" class="form-control"  rows="5" ><?php echo $prj['hardware_requirement'] ?>"</textarea>
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