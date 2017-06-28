<?php
define('HOST','mysql:host=localhost;dbname=test');
define('username','root');
define('password','');
define('dbname','test');
try{
    $conn = new PDO(HOST,username,password);  
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $count = 1; 
}
catch(PDOException $e){
    echo "connection failed" . $e->getMessage();
}
?>