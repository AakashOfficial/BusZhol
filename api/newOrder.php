<?php
include_once 'config.php';

$name = $_GET['name'];
$telno = $_GET['telno'];
$number = $_GET['number'];
$number_of_places = $_GET['nplaces'];
$places = $_GET['places'];
$adult = $_GET['adult'];
$child = $_GET['child'];
$cost = $_GET['cost'];
$current_time = $_GET['ctime'];
$expire_time = $_GET['etime'];
$route_id = $_GET['rid'];

mysql_query("INSERT INTO `users` (`id`, `name`, `telno`, `number`) VALUES (NULL, '$name', '$telno', '$number');");

$query = mysql_query("SELECT `id` FROM  `users` WHERE  `telno` =  '$telno' AND `number` =  '$number' ");

$rows = mysql_fetch_row($query);
$user_id = $rows[0];
//echo ($user_id);

$result = mysql_query("INSERT INTO  `order` (
`id` ,`user_id` ,`number_of_places` ,`places` ,`adult` ,`child` ,`cost` ,`current_time`,`expire_time` ,`route_id`)VALUES (
NULL ,  '$user_id',  '$number_of_places',  '$places',  '$adult',  '$child',  '$cost ',  '$current_time',  '$expire_time',  '$route_id');");


if (!$result) {
    $json = array('result' => 'error');
} else {
    $json = array('result' => 'success');
}
print json_encode(array('response' => $json));
?>