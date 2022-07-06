<?php

  $hname = 'localhost';
  $uname = 'root';
  $password = '';
  $dbName = "kj-bank-database";

  $dbcon = mysqli_connect($hname,$uname,$password,"$dbName");

  if(!$dbcon){
    die('Could not connect to MYSQL Server: ', mysql_error());
  } else {
    console.log("connection-successfull");
  }

 ?>
