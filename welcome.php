<!DOCTYPE html>

<?php
session_start();
include('session.php');
$userID=$_SESSION["id"];
$role=$_SESSION["role"];
include 'classProject.php';
               
$obj = new project();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PRS</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
                    <a class="navbar-brand">Project Repository Platform</a>
                </div>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                
                <ul class="nav navbar-right navbar-top-links">
                    <li><a href="logout.php" style="color:white;background-color: #044F67;"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    
                </ul>
        
</nav>

  <div  style="margin-left:0px;margin-top:60px;" class="row">
    <div class="col-md-12">
        <div class="container">
        
      <div class="panel panel-info" class="col-md-12 center">
        <div class="panel-heading" style="background-color:transparent;">
                                <h4> Complete Your Registration </h4>
                 </div>
                            <div class="panel-body">
          
          
          <form id="demo-form2" data-parsley-validate  action="register.php" class="form-horizontal form-label-left" method="post" >
                     <?php
          foreach ($obj->profileFirst($userID) as $std) {
                                        ?>
                      <div class="form-group">
               <input type="hidden" name="userID" value="<?php echo $userID;?>">
             <input type="hidden" name="stdID" value="<?php echo $std['stdID'];?>">
             <input type="hidden" name="oldP" value="<?php echo $_SESSION["pass"];?>" id="oldP">
             
                        <label class="control-label col-md-2" for="first-name">First Name </label>
                        <div class="col-md-4">
                          <input type="text" name="fname" required="required" class="form-control" value="<?php echo $std['fName'];?>">
                        </div>
                        <label class="control-label col-md-2" for="mname"> Middle Name </label>
                        <div class="col-md-4">
                          <input type="text"  name="mname" required="required" class="form-control" value="<?php echo $std['mName'];?>">
                        </div>
                      </div>
                       



            <div class="form-group">
                        <label for="lname" class="control-label col-md-2"> Last Name </label>
                        <div class="col-md-4">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="lname" value="<?php echo $std['lName'];?>">
                        </div>

                        <label class="control-label col-md-2" for="gender"> Gender </label>
                        <div class="col-md-4" style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size: 14px;">  &nbsp &nbsp &nbsp &nbsp
                          Female

                        <input type="radio" class="flat" name="gender" id="genderF" value="F" <?php if($std['gender']=='F') echo  'checked=""'?> checked="" required /> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Male
                        <input type="radio" class="flat" name="gender" id="genderM" value="M" <?php if($std['gender']=='M') echo  'checked=""'?> />
                        </div>

                      </div>
           
            
                     
                      <div class="form-group" <?php if(($role=="Supervisor")||($role=="Project Coordinator")) echo "style='display:none';";?>>
                        <label class="control-label col-md-2 "> Registration Number</label>
                        <div class="col-md-4">
                          <input name="regNo" class="form-control" readonly="readonly" type="text" value="<?php echo $std['regNo'];?>" style="background-color: white;">
                        </div>

                        <label class="control-label col-md-2 "> Programme</label>
                        <div class="col-md-4">
                          <select  name = "prgID" class = "form-control">
                        <?php 
                        
                                                
                        foreach ($obj->viewProgramme() as $prog) {
                        ?>                                        
                        <option value = "<?php echo $prog['prgID'];?>"><?php echo $prog['prgName'];?></option>  
                        <?php } ?>                                 
                      </select>
                        </div>

                        
                  </div>
            
            
            
            <div class="form-group">
                        <label class="control-label col-md-2"> Email</label>
                        <div class="col-md-4">
                          <input name="email" class="form-control" required="required" type="email" value="<?php echo $std['email'];?>">
                        </div>
                        <label class="control-label col-md-2"> Contact Number</label>
                        <div class="col-md-4">
                          <input name="telNo" class="form-control" required="required" type="">
                        </div>
            </div>
            
                        
            <div class="form-group">
                        <label class="control-label col-md-2"> Username</label>
                        <div class="col-md-4">
                          <input name="username" readonly="readonly" class="form-control" required="required" type="text" value="<?php echo $std['regNo'];?>" style="background-color: white;">
                        </div>
                        <label class="control-label col-md-2"> Old Password</label>
                        <div class="col-md-4">
                          <input name="oldPassword" class="form-control" required="required" type="password" id="curP" >
                        </div>
            </div>
            
    
            
            <div class="form-group">
                        <label class="control-label col-md-2"> New Password</label>
                        <div class="col-md-4">
                          <input name="newPassword" class="form-control" required="required" type="password" id="Password">
                        </div>
                        <label class="control-label col-md-2 "> Confirm Password</label>
                        <div class="col-md-4">
                          <input name="confPassword" class="form-control" required="required" type="password" id="confPassword">
                        </div>
            </div>
            
           
            
                      
                      <div class="form-group">
                        <div class="col-md-10">
                          
                        </div>
                        <div class="col-md-2">
                          <button type="submit" name="register" class="btn btn-primary" onclick="return Validate()" >Save Records</button>
                        </div>
                    </div>
                    <?php } ?>
                    </form>
   

              </div>
      </div>  
    </div>           
    </div>
    </div>
<div class="row" style="background-color: #044F67; ">
  <div class="col-md-12" style="height:50px;color:white;text-align: center;padding-top: 10px;"> <h5>Project Repository Platform &copy; 2018. All Rights Reserved</h5>
  </div>
</div> 


          
 



       
    
      
<!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>
    
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

    </body>
</html>