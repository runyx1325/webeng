<?php
setcookie("login", $_COOKIE["login"], array(
    'path' => '/',
    'expires' => time()-3600,
    'secure' => true,
    'samesite' => 'lax'
));
