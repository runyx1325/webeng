<?php
require("../database.php");
$nickname = $_POST['nickname'];
$safe_email = mysqli_real_escape_string($my_db, $_POST['email']);
$hashed_password = hash("sha256", $_POST['password']);
$hashed_repeated_password = hash("sha256", $_POST['repeatpassword']);
$street = $_POST['street'];
$housenumber = $_POST['housenumber'];
$plz = $_POST['postalcode'];

$sql2 = "SELECT * FROM user WHERE  email = '" . $safe_email. "'";
$res = mysqli_query($my_db, $sql2) or die (mysqli_error($my_db));
$dbdata = mysqli_fetch_assoc($res);

if(!isset($dbdata['id'])){
    if($hashed_password == $hashed_repeated_password){
        $sql1 = "INSERT INTO user (nickname, email, password) VALUES ('".$nickname."','".$safe_email."','".$hashed_password."')";
        $res = mysqli_query($my_db, $sql1) or die (mysqli_error($my_db));
        $sql2 = "SELECT * FROM user WHERE  email = '" . $safe_email. "'";
        $res = mysqli_query($my_db, $sql2) or die (mysqli_error($my_db));
        $dbdata = mysqli_fetch_assoc($res);
        setcookie("login", $dbdata["id"], array(
            'path' => '/',
            'expires' => time()+3600,
            'secure' => true,
            'samesite' => 'lax'
        ));
        echo true;
    }else{
        echo 42;    //Wenn Passwort und RepeatPasswort nicht übereinstimmen
    }
}else {
    echo 73;    //Wenn Email bereits vergeben ist

}
