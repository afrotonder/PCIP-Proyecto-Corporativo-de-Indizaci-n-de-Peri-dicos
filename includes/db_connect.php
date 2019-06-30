<?php
$servername = "localhost" ;
$username = "" ;
$password =  "" ;
$db_name = "pcip" ;

# create connection
$db_conn = new mysqli($servername, $username, $password, $db_name) ;

#check connection
// if ($db_conn->connect_error) {
// 	die("Connection failed: " . $db_conn->connect_error) ;
// }
//
// echo "Connected successfully!" ;
//$mysqli->close() ;

?>
