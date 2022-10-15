
                                <div class="modal fade" id="update<?php echo $prog['prgID'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel"> Edit Programme Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method = "POST" action = "updateProgramme.php"> 
												<input type="hidden" name="prgID" value="<?php echo $prog['prgID'];?>">
												<label>Programme Code</label>
												<input type="text" name = "prgCode" class="form-control" value = "<?php echo $prog['prgCode'];?>" required>
												<br/>								
								                
												<label>Programme Name</label>
												<input type="text" name = "prgName" class="form-control" value = "<?php echo $prog['prgName'];?>" required>
												<br/>
												
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button  type="submit" class="btn btn-primary" name="update">Save changes</button>
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
	
        