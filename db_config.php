<?php

$servername = "localhost";
$username = "root";
$password = "";
global $myConnection;

$myConnection = mysqli_connect($servername, $username, $password);
mysqli_select_db( $myConnection, "test_codecept");

?>
