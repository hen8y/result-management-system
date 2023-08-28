<?php

$moore= $_POST['year'];


$con=mysqli_connect("localhost","henryde2_admin","Madeofmoore44","henryde2_henrycollege_$moore");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>