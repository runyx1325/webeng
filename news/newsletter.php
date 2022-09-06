<?php
require("../database.php");
$safe_email = mysqli_real_escape_string($my_db, $_POST['email']);

$sql = "SELECT * FROM newsletter WHERE  email = '" . $safe_email. "'";
$res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));  // mysqli_error evtl. auch kritisch...
$dbdata = mysqli_fetch_assoc($res);

if(!isset($dbdata["email"])){
    $sql = "INSERT INTO newsletter (email) VALUES ('".$safe_email."')";
    $res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
    echo true;
}