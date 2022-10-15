<?php
        
       include 'classProject.php';
       $obj = new project();
       
        if (isset($_POST['upload'])) {
            $sprID = $_POST['sprID'];
            
            
                $path = 'ProfilePix/';
            

            $file=$_FILES["pic"];
            //echo $file["name"];
            
            $errors=array();
            $obj->file_uploaded($file,$path);
            if(!empty($errors)){
                foreach($errors as $key => $error){echo $error;}
            } else{
                $FullPath=$path.$file["name"];
                //echo $FullPath;
                
                $result=$obj->changePix2($FullPath,$sprID);
                if($result){
                echo "Profile Pix updated successfully";
               }
                move_uploaded_file($file['tmp_name'], $FullPath);
                
            }
        }

        header("location:profileS.php");
        ?>