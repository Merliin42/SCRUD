<?php
include "functions.php";
Logout();
session_destroy();
header("location: ../index.php");