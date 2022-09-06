<?php
require("../database.php");
$postalcode = $_GET['postalcode'];

$sql = "SELECT * FROM plz WHERE  PLZ = '" . $postalcode. "'";
$res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
$dbdata = mysqli_fetch_assoc($res);

if(isset($dbdata['PLZ'])){
    echo $dbdata['PLZ-ONAME'];
}else{
    echo false;
}


