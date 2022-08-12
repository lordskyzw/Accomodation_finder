<?php

include 'dbconnect.php';
$conn = OpenCon();
echo "Connected Succefully";

CloseCon($conn);

?>