<?php
        
       include 'classProject.php';
       $obj = new project();
       
        if (isset($_POST['upload'])) {
            $title = $_POST['title'];
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            
                $path = 'Annoucements/';
            

            $file=$_FILES["attachment"];
            //echo $file["name"];
            
            $errors=array();
            $obj->file_uploaded($file,$path);
            if(!empty($errors)){
                foreach($errors as $key => $error){echo $error;}
            } else{
                $FullPath=$path.$file["name"];
                //echo $FullPath;
                
                $result=$obj->announce($title,$FullPath,$startDate,$endDate);
                if($result){
                echo "Your pdf '$name' Successfully Upload and Information Saved Our Database";
               }
                move_uploaded_file($file['tmp_name'], $FullPath);
                
            }
        }

        header("location:announcements.php");
        ?>