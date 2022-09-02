<?php

$dbname = "utopia";
$username = "root";
$password = "";
$servername ="localhost";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if( $conn == false)
{
	echo "connection failure";
}

?>
