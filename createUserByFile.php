<?php
if(isset($_POST["submit_file"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $username = $csv[0];
  $password = $csv[1];
  $role = $csv[2];
  
 }
}
?>