<?php
session_start();
$bdd = new PDO('mysql:host='.$_SESSION["host"].';charset=utf8', $_SESSION["user"], $_SESSION["password"]);

function Bases()
//Return all the databases
{
	global $bdd;
	$response = $bdd->query('SHOW DATABASES');
	return $response;
}

function Login()
{
	$bdd = new PDO('mysql:host=localhost;charset=utf8', 'root', '');
	$bdd->exec('USE Loginlog');
	$_SESSION["login_date"] = $bdd->query('SELECT NOW()')->fetch()["NOW()"];
	$bdd->query('INSERT INTO logs (login, date_in) VALUES (\''.$_SESSION["user"].'\', \''.$_SESSION["login_date"].'\')');
}

function Logout()
{
	$bdd = new PDO('mysql:host=localhost;charset=utf8', 'root', '');
	$bdd->exec('USE Loginlog');
	$bdd->query('UPDATE logs
				SET date_out = NOW()
				WHERE login = \''.$_SESSION["user"].'\'
				AND date_in = \''.$_SESSION["login_date"].'\'');
}

function Logs()
{
	$bdd = new PDO('mysql:host=localhost;charset=utf8', 'root', '');
	$bdd->exec('USE Loginlog');
	$response = $bdd->query('SELECT * FROM logs');
	return $response;
}

function Usedb()
//Execute use database
{
	global $bdd;
	$bdd->exec('USE '.$_SESSION["dbname"]);
}

function Tables()
//Return tables of the selected database.
{
	global $bdd;
	Usedb();
	$response = $bdd->query('SHOW tables');
	return $response;
}

function Fields()
//Return fields of the selected table.
{
	global $bdd;
	Usedb();
	$response = $bdd->query('SELECT * FROM '.$_GET["table"]);
	return $response;
}

function Columns()
//Return columns name of the selected table.
{
	global $bdd;
	Usedb();
	$response = $bdd->query('EXPLAIN '.$_GET["table"]);
	return $response;
}

function Select($table, $primaryKey, $value)
//Return a row in a table.
{
	global $bdd;
	Usedb();
	$response = $bdd->query("SELECT * FROM ".$table." WHERE ".$primaryKey."='".$value."'");
	return $response;
}

function CountEntries($table)
{
	global $bdd;
	Usedb();
	$response = $bdd->query("SELECT COUNT(*) FROM ".$table);
	$result = $response->fetch();
	foreach ($result as $key => $value) {
		return $value;
	}
}

function Add($table, $fields, $i)
//Add a new field in the selected table.
{
	global $bdd;
	Usedb();
	$j = 0;
	$start = "INSERT INTO ".$table." (";
	$end = " VALUES (";
	foreach ($fields as $key => $value) 
	{
		$j += 1;
		if ($j < $i) {
			$start = $start.$key.", ";
			$end = $end."'".addslashes($value)."', ";
		}else{
			$start = $start.$key;
			$end = $end."'".addslashes($value)."'";
		}
	}
	$start = $start.")";
	$end = $end.");";
	$request = $start.$end;
	$bdd->query($request);
	// echo $request;
	header("location: ../Frontend/table.php?table=".$_GET["table"]);
}

function Delete($table, $primaryKey, $value)
//Delete a field in the selected table.
{
	global $bdd;
	Usedb();
	$bdd->query("DELETE FROM ".$table." WHERE ".$primaryKey."='".$value."'");
	header("location: ../Frontend/table.php?table=".$_GET["table"]);
}

function Edit($table, $primaryKey, $idvalue, $fields, $i)
//Edit a field in the selected table.
{
	global $bdd;
	Usedb();
	$j = 0;
	$request = "UPDATE ".$table." SET ";
	foreach ($fields as $key => $value) 
	{
		$j += 1;
		if ($j < $i) {
			$request = $request.$key."='".addslashes($value)."', ";
		}else{
			$request = $request.$key."='".addslashes($value)."'";
		}
	}
	$request = $request." WHERE ".$primaryKey."='".$idvalue."'";
	// echo $request;
	$bdd->query($request);
	// echo $request;
	header("location: ../Frontend/table.php?table=".$_GET["table"]);
}