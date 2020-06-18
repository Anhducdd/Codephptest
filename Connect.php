<?php
$conn_string="host=ec2-52-87-135-240.compute-1.amazonaws.com
 port=5432 dbname=dvjv9f6i58b5d user=jyalqhpnugmukb password=12fa02ab206be164f948547f7a0f236c5d044bb31efd2db2b9621c9561f5027b";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM account WHERE username='".$username."' AND password='".$pass."'";
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
