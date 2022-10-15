
                                <div class="modal fade" id="update<?php echo $cat['techID'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel"> Edit Technology Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method = "POST" action = "updateCategory.php"> 
												<input type="hidden" name="techID" value="<?php echo $cat['techID'];?>">
												<label>Technology Name</label>
												<input type="text" name = "techName" class="form-control" value = "<?php echo $cat['techName'];?>" required>
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
	
        