<?php 
session_start();
$bdd = new PDO('mysql:host='.$_SESSION["host"].';charset=utf8', $_SESSION["user"], $_SESSION["password"]);