<?php
require("../database.php");

$sql = "SELECT * FROM shopping_cart WHERE  userid = '" . $_COOKIE['login']. "' AND article_id = '".$_POST['article']."'";
$res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
$dbdata = mysqli_fetch_assoc($res);

if(isset($dbdata['userid'])) {
    $sql = "UPDATE shopping_cart SET amount = amount + 1 WHERE article_id = '".$_POST['article']."' AND userid = '" . $_COOKIE['login']. "'";
    $res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));

}else{
    $sql = "INSERT INTO shopping_cart (userid, article_id, amount) VALUES ('".$_COOKIE['login']."','".$_POST['article']."','1')";
    $res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
}