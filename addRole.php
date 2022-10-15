<?php
        
       include 'classProject.php';
        if (isset($_POST['register'])) {
            $sn = $_POST['statusName'];
            
            $obj = new project();
            $obj->addRole($sn);
			header("location:viewStatus.php");
        }
        ?>