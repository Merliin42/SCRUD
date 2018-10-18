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
Add($_GET["table"], $fields, $i);