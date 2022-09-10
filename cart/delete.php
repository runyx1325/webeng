<?php
require("../database.php");

$sql = "DELETE FROM shopping_cart WHERE  userid = '" . $_COOKIE['login']. "'";
$res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
