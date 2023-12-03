<?php 

$host = 'localhost';
$dbname= 'crud_project';
$dbusername='root';
$dbpassword='';

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection failed". mysqli_connect_error());
}
