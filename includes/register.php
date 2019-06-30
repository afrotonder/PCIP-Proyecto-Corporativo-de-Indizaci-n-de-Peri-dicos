<?php
require 'db_connect.php' ;
require 'password_module.php' ;
include 'user_ip.php' ;

$name = $db_conn->real_escape_string($_POST['fullname']);

$country = $db_conn->real_escape_string($_POST['country']);

//
$email = $db_conn->real_escape_string($_POST['email']);
$pass = $db_conn->real_escape_string($_POST['password']) ;
//
$hash_pass = password_hash($pass,PASSWORD_DEFAULT) ;
//
$date = date("Y/m/d") ;





$ip = getUserIP() ;


$accountQuery = "INSERT INTO tbl_users(email,pass,create_date,create_ip,last_login_ip)
                 Values('$email','$hash_pass','$date','$ip','$ip')" ;

$db_conn->query($accountQuery) ;



$u_id = $db_conn->insert_id ;

$infoQuery = "INSERT INTO tbl_user_info(user_id,user_name,country)
              Values('$u_id', '$name','$country')" ;

$db_conn->query($infoQuery) ;

header("location:login.php");


 ?>
