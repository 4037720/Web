<?php
include 'include/config.php';
include 'include/connection.php';
$con_obj=new Connection();

echo $con_obj->openfire_connect();