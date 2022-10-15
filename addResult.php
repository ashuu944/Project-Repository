<?php	
       include 'classProject.php';
       $obj = new project();
        if (isset($_POST['doSubmit'])) {
        	$number_student=$_POST['number_student'];
        	$projectID=$_POST['projectID'];
        	for($x=1;$x<=$number_student;$x++)
        	{
	            $design=$_POST['designM'.$x];
	            $doc=$_POST['docM'.$x];
	            $systemm=$_POST['systemM'.$x];
	            $id=$_POST['id'.$x];

	            $obj->addResult($design,$doc,$systemm,$id);
	            

	            
	        }
			

			
    }
    elseif(isset($_POST['doUpdate'])) {
        	$number_student=$_POST['number_student'];
        	$projectID=$_POST['projectID'];
        	for($x=1;$x<=$number_student;$x++)
        	{
	            $design=$_POST['designM'.$x];
	            $doc=$_POST['docM'.$x];
	            $systemm=$_POST['systemM'.$x];
	            $id=$_POST['resultID'.$x];

	            $obj->updateResult($design,$doc,$systemm,$id);
	            
            }
	            
	        }

    header("location:projectDetails.php?id=$projectID");
?>