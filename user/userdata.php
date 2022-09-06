<?php
require("../database.php");
$sql = "SELECT * FROM adress WHERE userid = '" .$_COOKIE['login']. "'";
$res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
$dbdata = mysqli_fetch_assoc($res);

if(isset($dbdata["street"], $dbdata["number"], $dbdata["plz"])){
    echo "
        <h4><b>Kontoinformationen</b></h4>
        <fieldset disabled>    
            <div class=\"mb-3\">
              <label for=\"disabledTextInput\" class=\"form-label\">Straßenname</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\" \" >
            </div>
        </fieldset>     
    ";
}else{
    echo"
        <h1>Error, no data found</h1>
    ";
}