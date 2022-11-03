<?php
error_reporting(0);
// include("connection.php");
$username='root';
$password='';
$server='localhost';
$database='dllottery';

//mysqli_connect($server,$user,$password,$databade);       for connection 

//another way to connect with database
//$db = mysqli_connect_($cons.$databade);

$cons=mysqli_connect($server,$username,$password,$database);  // for check
// if($cons)
//     echo"connection successful";

// ?>