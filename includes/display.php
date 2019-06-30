<?php
include("includes/db_connect.php") ;
header("Location: ../test.php") ;


$organization = $_POST['org'] ;
  if(isset($organization)) {
    echo $organization ;

  }
?>
