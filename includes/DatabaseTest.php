<?php 
require_once("includes/constants.php");
//DB Connection
$conn = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if(!$conn){
	die('Connection to db failed' . mysql_error());
}else{
	echo 'Conected to ' . DB_NAME . ' Using: '  . DB_USER . ' Pass: '. DB_PASS . ' Server: '. DB_SERVER;
}
//Select db
$db_select = mysql_select_db(DB_NAME, $conn);
if(!$db_select){
	die('Db selection failed' . mysql_error());
}
?>