<?php

include_once 'config.php';

$name = $_GET['name'];
$telno = $_GET['telno'];
$number = $_GET['number']; 

mysql_query("INSERT INTO `users` (`id`, `name`, `telno`, `number`) VALUES (NULL, '$name', '$telno', '$number');") ;

$query = mysql_query("SELECT `id` FROM  `users` WHERE  `telno` =  '$telno' AND `number` =  '$number' ") ;

$rows = array();
while($row = mysql_fetch_assoc($query)) {
	$rows[] = $row;
}

if (!$query) {
    $json=array('result' => 'error'); 
}
else{
   $json = $rows; 
}
print json_encode(array('response' => $json));

?>