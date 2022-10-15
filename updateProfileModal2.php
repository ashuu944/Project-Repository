
                                <div class="modal fade modal-md" id="update<?php echo $userID ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel"> Change Password</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method = "POST" action ="changePassword.php" class="form-horizontal" > 
												<input type="hidden" name="userID" value="<?php echo $userID;?>">
                                                <input type="hidden" name="oldP" value="<?php echo $std['password'];?>">
												<label>Old Password</label>
												<input name="oldPassword" class="form-control" required="required" type="password" id="curP">
												<br/>								
								                
												<label>New Password</label>
												<input name="newPassword" class="form-control" required="required" type="password" id="Password">
												<br/>

                                                <label>Confirm Password</label>
                                                <input name="confPassword" class="form-control" required="required" type="password" id="confPassword">
                                                <br/>

                                                
												
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button  type="submit" class="btn btn-primary" name="updateSupervisor" onclick="return validatePassword()">Save changes</button>
												</form>
                                            </div>
                                            <div class="modal-footer">
                                                
                                            </div>
										    	
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
<script type="text/javascript">
        var password = document.getElementById("Password"),
        confirm_password = document.getElementById("confPassword");
        

        function validatePassword(){
        if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
        } 
        
        
        
        else {
        confirm_password.setCustomValidity('');
        }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
   
        </script>
                                <!-- /.modal -->
	
        