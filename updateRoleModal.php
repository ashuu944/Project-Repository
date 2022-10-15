
                                <div class="modal fade" id="update<?php echo $role['statusID'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel"> Edit Role Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method = "POST" action = "updateRole.php"> 
												<input type="hidden" name="statusID" value="<?php echo $role['statusID'];?>">
												<label>Role Name</label>
												<input type="text" name = "statusName" class="form-control" value = "<?php echo $role['statusName'];?>" required>
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
	
        