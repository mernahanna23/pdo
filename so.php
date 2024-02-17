<?php
// data source name have inside prefex of my sql
$dsn='mysql:host=localhost;dbname=library_db';
//user to connect
$user='root';
//password to this user
$pass='';
try {

$db= new PDO($dsn,$user,$pass); // start a new connection with pdo class
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$q="INSERT INTO author ( first_name, last_name, age) VALUES ( 'chales', 'holmes', '40')";
$db->exec($q);
}

catch(PDOException $e){
    echo 'fail' . $e->getMessage();
}
?>