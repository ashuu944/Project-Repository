<?php
        
       include 'classProject.php';
        if (isset($_POST['register'])) {
            $tec = $_POST['techName'];
            
            $obj = new project();
            $obj->addTech($tec);
			header("location:viewCategory.php");
        }
        ?>