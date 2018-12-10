<?php
	session_start();
	$_SESSION["host"] = $_POST["connectHost"];
	// $_SESSION["dbname"] = $_POST["dbname"];
	$_SESSION["user"] = $_POST["connectUser"];
	$_SESSION["password"] = $_POST["connectPassword"];
	header("location: ../Frontend/server.php");