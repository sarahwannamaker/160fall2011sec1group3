<?php
$username="root";
$password="";
$database="cssjsuor_160s1g3";
$dblocal="localhost";

mysql_connect($dblocal,$username,$password);
@mysql_select_db($database) or die("Unable to select database");
?>