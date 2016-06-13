<?php

$id = $_GET['id'];

//	$connection=mysql_connect("localhost","root","");
//
//	$db=mysql_select_db("buszhol",$connection) or die("select_db_error");

include_once 'config.php';

mysql_query("SET NAMES utf8");

$query = mysql_query("DELETE FROM `routes_info` WHERE id='$id'") or die(mysql_error());

header("Location:/admin/routes.php");
?>