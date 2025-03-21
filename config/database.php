<?php


  //config connection 
  $host    = "localhost";
  $port    = "5432";
  $dbname  = "schoolar";
  $user    = "postgres";
  $password ="unicesmag";

  //create connection
  $conn = pg_connect("
     host=$host
     port=$port
     dbname=$dbname
     user=$user
     password=$password
  ");

  if(!$conn){
    die("connection error: ". preg_last_error() );
  }else{
   echo  "succes connection ";
  }

?>