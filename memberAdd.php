<?php
session_start();
include('session.php');
include 'classProject.php';
                  
    $obj = new project();
            
    $memberID=$_GET['id'];   
    $userID = $_SESSION['id'];
    //$stdID = $obj->profile($userID)['stdID'];

   foreach ($obj->profile($userID) as $s) {
        $stdID=$s['stdID'];
    }

    foreach ($obj->myTitle($stdID) as $std) {
                                        
    $projectID = $std['projectID'];
    
	}
    
    $result=$obj->addStudentProject($memberID,$projectID);
    if($result)
        echo "<script type='text/javascript'>alert('You have succeed to add a member in your group');
                  document.location='myProject.php'</script>";
    else
        echo  "<script type='text/javascript'>alert('The student you choose is already a member of another group !!');
                  document.location='myProject.php'</script>";
?>
