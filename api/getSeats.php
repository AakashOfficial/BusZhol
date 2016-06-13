<?php

include_once 'config.php';

$id = $_GET['id'];
//echo ($id);
$query = mysql_query("SELECT * FROM `seats` WHERE `id` = $id ");

$rows = array();
while($row = mysql_fetch_assoc($query)) {
	$rows[] = $row;
}

$json=array('response' => $rows);

print json_encode($json);
?>