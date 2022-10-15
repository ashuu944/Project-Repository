<!DOCTYPE html>
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

         <?php
        session_start();
        include 'classProject.php';


        if (isset($_POST['login'])) {
		$u = $_POST['userName'];
		$p = md5($_POST['password']);
        
            

            $obj = new project();
            $obj->login($u,$p);
        }

       

    ?>
    </head>
    <body style="background-color: whitesmoke;">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    
                    <div class="login-panel panel panel-info" style="width:600px;" >
                        
                        <div class="panel-body">
                            <div class="row">
                                        <div class="col-md-6"><img src="img/login.png" class="img" ></div>
                                    </div>
                                    <hr>

                            <form role="form" method="post">
                                <fieldset>
                                    
                                    <div class="form-group">
                                        <input class="form-control" placeholder="username" name="userName" type="text" autofocus required/>
                                    </div>
                                
                        

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" required />
                                    </div>
                                <hr>
                                    
                                    <button type="submit"  class="btn btn-md btn-success btn-block" name="login">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
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

    </body>
</html>
