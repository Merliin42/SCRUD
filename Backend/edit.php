<?php
include "functions.php";
$fields = array();
$i = 0;
foreach ($_POST as $key => $value) 
{
	if ($key != "Valider") {
		if ($value != "") {
			$i += 1;
			$fields[$key] = $value;
		}
	}
}
Edit($_GET["table"], $_GET["PrimaryKey"], $_GET["value"], $fields, $i);