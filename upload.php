<?php
        
       include 'classProject.php';
       $obj = new project();
       
        if (isset($_POST['upload'])) {
            $name = $_POST['name'];
            if($name=="Design Document"){
                $path = 'Deliverable/DesignDocuments/';
            }elseif($name=="System Document"){
                $path = 'Deliverable/SystemDocumentation/';
            }elseif($name=="Project Code"){
                $path = 'Deliverable/SourceCodes/';
            }
            
            $projectID = $_POST['projectID'];
            

            $file=$_FILES["deliverable"];
            
            $errors=array();
            $obj->file_uploaded($file,$path);
            if(!empty($errors)){
                foreach($errors as $key => $error){echo $error;}
            } else{
                $FullPath=$path.$file["name"];
                
                $result=$obj->upload($name,$FullPath,$projectID);
                if($result){
                echo "Your pdf '$name' Successfully Upload and Information Saved Our Database";
               }
                move_uploaded_file($file['tmp_name'], $FullPath);
                
            }
        }

        header("location:myProject.php");
        ?>