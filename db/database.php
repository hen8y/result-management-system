<?php

$moore= $_POST['Year'];


$con=mysqli_connect("localhost","hrmsyste_henry","Moorer123@","hrmsyste_henrycollege_$moore");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$term= $_POST['Term'];
$class=$_POST['Class'];
$pin=$_POST['Pin'];

$result = mysqli_query($con,"SELECT * FROM $class WHERE cardpin = '$pin' HAVING term = '$term'");


?>