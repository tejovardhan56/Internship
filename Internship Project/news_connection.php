<?php

$conn=mysqli_connect("localhost","root","","News");

if ($conn) 
{
	echo "";
} 
else {

	echo "Not Connected".mysqli_connect_error();
}

?>

