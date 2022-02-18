<?php
    $host="localhost";
    $user="root";	
    $pass="";
    $dbname="infoscreen";
    $charset="utf8";
    
    try {
        $connection = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(PDOException $e)
    {
      echo $e->getMessage();                         
    };