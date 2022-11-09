<?php
$user = "omega";
$password = "omega";
$database = "omega";
$table = "employee";
$conn= new PDO("pgsql:host=192.168.193.139;dbname=$database", $user, $password);
$_SESSION = [];
session_unset();
session_destroy();
header("Location: index.php");
