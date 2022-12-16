<?php
session_start();

$self = $_SERVER['PHP_SELF'];

$Server = 'localhost';
$Username = 'root';
$Password = '';
$Db = 'saadali';

$con = mysqli_connect($Server, $Username, $Password,$Db);


?>