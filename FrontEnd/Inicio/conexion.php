<?php

$servidor="localhost";
$db="";
$username="root";
$password="";
 
try {
    $conexion=new PDO("mysql:host=$servidor;bdname=$db",$username,$password);
    echo "conexion exitosa";

} catch (Exception $e) {
    echo "☻";
    
}

?>