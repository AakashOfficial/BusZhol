<?php

include_once 'config.php';

if (isset($_GET['city'])) {
  $temp = $_GET['city'];
$query = mysql_query("SELECT * FROM `cities` WHERE `from_city_code` =  '$temp';");
}
else {
  $query = mysql_query("SELECT DISTINCT from_city, from_city_code from cities;");
}

$rows = array();
while($row = mysql_fetch_assoc($query)) {
	$rows[] = $row;
}

$json=array('response' => $rows);

print json_encode($json);
?>