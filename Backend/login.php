<?php
	session_start();
	$_SESSION["host"] = $_POST["host"];
	// $_SESSION["dbname"] = $_POST["dbname"];
	$_SESSION["user"] = $_POST["user"];
	$_SESSION["password"] = $_POST["password"];
	header("location: ../Frontend/server.php");