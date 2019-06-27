<?php
$db_host = 'remotemysql.com'; // Server Name
$db_user = 'k8AEVU35aU'; // Username
$db_pass = '9JGT3kjoKp'; // Password
$db_name = 'k8AEVU35aU'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
echo "Connected successfully";
?>
