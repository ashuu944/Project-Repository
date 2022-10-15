
                                <div class="modal fade" id="addComment<?php echo $projectID;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Project Comments</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method = "POST" action="sendComments.php"> 
												<input type="hidden" name="projectID" value="<?php echo $projectID;?>">
                                                <label>Comment Category</label>
                                                <select class="form-control"  name="commentName" required>
                                                    <option value="Proposal"> Proposal Comment</option>
                                                    <option value="Design"> Design Comment</option>
                                                    <option value="Project"> Project Comment</option>
                                                </select>
                                            <br/>
                                            
                                                <label>Comment Description</label>
                                                <textarea class="form-control" rows="4"   name="commentDes"></textarea>
                                            <br/>
                                            								
								                
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button  type="submit" class="btn btn-success" name="add"> Send Comments</button>
												</form>
                                            </div>
                                            <div class="modal-footer">
                                                
                                            </div>
										    	
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
	
        