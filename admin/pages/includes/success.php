<?php

if(isset($_SESSION['url'])) 
   $url = $_SESSION['url']; // holds url for last page visited.
else 
   $url = "index.php";
    
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Operation Successful');
    window.location.href='../index.php';
    </script>");
?>