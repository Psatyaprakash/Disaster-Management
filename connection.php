<?php
$host= 'localhost';
$user = 'root';
$password = '';
$dbname = 'disaster';

$connect = mysqli_connect($host,$user,$password,$dbname);

if ($connect){
  
}
else{
    echo 'connection error:'.mysqli_connect_error();
}
?>