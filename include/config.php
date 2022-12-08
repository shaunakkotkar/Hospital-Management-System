<?php
define('DB_SERVER','database-1.c0y0nzv8ci59.ap-south-1.rds.amazonaws.com');
define('DB_USER','admin');
define('DB_PASS' ,'Shaunakk123');
define('DB_NAME', 'myhmsdb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
