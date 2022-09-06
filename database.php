<?php
$sqlhost = "localhost";
$sqluser = "root";
$sqlpass = "";
$dbname  = "webeng";

$my_db = mysqli_connect($sqlhost, $sqluser, $sqlpass, $dbname) or die ("DB-system nicht verf�gbar");

