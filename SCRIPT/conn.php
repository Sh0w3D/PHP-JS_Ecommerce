<?php
// Define database variables

//localhost:
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "sistema";

/*
$dns = "mysql:host=$db_host;dbname=$db_name;charset=UTF8";

try {
	$mysqli = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
	$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "succesfully connected to <b>{$db_name}</b>";
} catch(PODEXCEPTION $e) {
	$e -> getMessage();
	echo $e;
}

*/

 //old connection script WORKING BUT NOT SAFE
//$mysqli = new mysqli("localhost", "root", "", "sistema");
$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// check connection
if (!$mysqli) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}  else {
    //echo "<i>connection-ok</i><br />";
}
?>