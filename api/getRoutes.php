<?php

include_once 'config.php';

if (isset($_GET['code'])) {
  	$code = $_GET['code'];
	$date = $_GET['date'];
	$query = mysql_query("SELECT * FROM `route` WHERE `code` =  '$code' AND `date_departure` =  '15-04-2015';");
}
else {
	$from = $_GET['from'];
	$to = $_GET['to'];
	$date = $_GET['date'];
  	 $query = mysql_query("SELECT * 
FROM  `route` 
WHERE  `code` LIKE  '%$from-$to%'
AND  `date_departure` =  '15-04-2015'");
}


//echo ('%$from-$to%');





$rows = array();
while($row = mysql_fetch_assoc($query)) {
	$rows[] = $row;
}

$json=array('response' => $rows);

print json_encode($json);
?>