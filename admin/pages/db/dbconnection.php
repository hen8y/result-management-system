<?php
define('DB_SERVER','localhost');
define('DB_USER','henryde2_admin');
define('DB_PASS' ,'Madeofmoore44');
define('DB_NAME', 'henryde2_school');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

