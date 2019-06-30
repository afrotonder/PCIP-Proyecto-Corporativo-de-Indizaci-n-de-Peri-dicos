<?php
  require "db_connect.php" ;
  require "password_module.php" ;
  include 'user_ip.php' ;

  $email = $_POST['username'] ;
  $pass = $_POST['password'] ;


  $res = $db_conn->query("SELECT pass From tbl_users where email = '$email'") ;


  if($res->num_rows == 1)
  {
    $res = $res->fetch_assoc() ;

    if(password_verify($pass, $res['pass']))
    {
      session_start();
      $user = array($email,$pass) ;
      $ip = getUserIP() ;
      $_SESSION["user_data"] = $user ;
      $db_conn->query("UPDATE tbl_users Set last_login = current_timestamp where email = '$email'") ;
      $db_conn->query("UPDATE tbl_users Set last_login_ip = '$ip' where email = '$email'") ;

      header("location: profile.php" ) ;
    }
  }


  else
  {
    header("location: login.php") ;
  }






 ?>
