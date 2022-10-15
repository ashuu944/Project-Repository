
                                <div class="modal fade" id="update<?php echo $ann['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Project Setting Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method = "POST" action = "update.php"> 
												<input type="hidden" name="ID" value="<?php echo $ann['ID'];?>">
												<label>Title</label>
												<input type="text" name = "title" class="form-control" value = "<?php echo $ann['title'];?>" required>
												<br/>								
								                
												<label>Start Date</label>
												<input type="date" name = "startDate" class="form-control" value = "<?php echo $ann['startDate'];?>" required>
												<br/>

                                                <label>End Date</label>
                                                <input type="date" name = "endDate" class="form-control" value = "<?php echo $ann['endDate'];?>" required>
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
	
        