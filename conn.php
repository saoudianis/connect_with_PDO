<?php

$dsn = 'mysql:host=localhost;dbname=note'; // data source name

$user = 'root'; //user

$pass = '';

$options = array(

    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try{
    
$db = new PDO($dsn,$user,$pass,$options); // new connect DB
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //catch exceptions
    
    $q = "insert into note (email) values ('val')"; // insert command
    
    $db->exec($q); //exection
    
}
catch(PDOException $e){
    echo 'error' . $e->getMessage(); //kind of errors
}


?>