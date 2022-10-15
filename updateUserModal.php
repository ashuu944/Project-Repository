
                                <div class="modal fade" id="update<?php echo $user['userID'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel"> Edit User Account Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method = "POST" action = "updateUser.php"> 
												<input type="hidden" name="userID" value="<?php echo $user['userID'];?>">
												<label>Username</label>
												<input type="text" name = "username" class="form-control" value = "<?php echo $user['UserName'];?>" readonly="readonly">
												<br/>								
								                
												<label>User Role</label>
												<select  name = "statusID" class = "form-control">
												<option value = "<?php echo $user['statusID'];?>"><?php echo $user['statusName'];?></option>
												
												<?php	
												include 'classRole.php';
                                                $obj=new role();
												foreach ($obj->viewRole() as $role) {
												?>																				
												<option value = "<?php echo $role['statusID'];?>"><?php echo $role['statusName'];?></option>	
												<?php } ?>																 
											</select>
												<br/>
												
												
												
												<label>Status</label>
												<select name = "status" class = "form-control">
												<option value = "<?php echo $user['status'];?>"><?php echo $user['status'];?></option>
												<option value = "active">Active</option>
												<option value = "inactive">Inactive</option>						
												</select>
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
	
        