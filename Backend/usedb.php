<?php 
include "functions.php";
$_SESSION["dbname"] = $_GET["dbname"];
Usedb($_SESSION["dbname"]);
echo $_SESSION["dbname"];
header("location: ../Frontend/database.php");