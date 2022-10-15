<?php
if(isset($_GET['content']))
{
    $file = $_GET['content'];

 
if (file_exists($file))
    {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: inline; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($file);
    exit;
    }
else
    echo "The file is not available";
}
?>
