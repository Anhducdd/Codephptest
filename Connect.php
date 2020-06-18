<?php
$conn_string="host=ec2-34-230-231-71.compute-1.amazonaws.com
 port=5432 dbname=d5mr838qoopsco
 user=iplpufvrvvxxst password=ef79ce7118c05ebef0d9b63b469445a04b44aaa62c1964d2a02bec5c31ea93e5";
$dbconn= pg_connect($conn_string);
if (isset($_POST['user'])) {
	$username = $_POST['user'];
}

if (isset($_POST['password'])) {
	$password = $_POST['password'];
}
$sql = "SELECT * FROM account WHERE username='".$username."' AND password='".$password."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
