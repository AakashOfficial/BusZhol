<?php
//SHOW VARIABLES WHERE Variable_name = 'port'

$hostname="mysql386.cp.idhost.kz";
$username="u1139102_admin";
$password="admin2016";
$db="db1139102_buszhol_db" ;

$conn = mysql_connect($hostname, $username, $password) or die("Could not connect to host.(");
mysql_select_db($db, $conn) or die("Could not find database.");

mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $conn);

?>