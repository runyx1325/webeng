<?php
require("../database.php");
$safe_email = mysqli_real_escape_string($my_db, $_POST['email']);
$hashed_password = hash("sha256", $_POST['password']);

$sql = "SELECT * FROM user WHERE  email = '" . $safe_email. "'";
$res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));  // mysqli_error evtl. auch kritisch...
$dbdata = mysqli_fetch_assoc($res);

if(isset($dbdata["password"]) && $dbdata["password"] == $hashed_password){
    setcookie("login", $dbdata["id"], array(
        'path' => '/',
        'expires' => time()+3600,
        'secure' => true,
        'samesite' => 'lax'
    ));
    echo true;
}
else{
    echo false;
}