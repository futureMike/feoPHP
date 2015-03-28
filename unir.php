<?php

$dbUnir = array('server'=>'localhost', 'username'=>'root', 'password'=>'', 'name'=>'derp');

$db = new mysqli($dbUnir['server'], $dbUnir['username'], $dbUnir['password'], $dbUnir['name']);

if ($db->connect_errno > 0){
    echo "something is wrong!!!! " . $db->connnect_error;
    exit();
}






?>