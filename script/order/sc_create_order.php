<?php

    include "config.php";

    $route_id = $_POST['route_id'];
    $seats_selected = $_POST['seats_selected'];

    $seats_adult = $_POST['seats_selected_adult'];
    $seats_child = $_POST['seats_selected_child'];
    $seats_number         = $seats_selected_adult+$seats_selected_child;



    $result = mysql_query("SELECT `price`,`price_kid` FROM `route` WHERE id='$route_id'")or die(mysql_error());
    $route = mysql_fetch_assoc($result);


    $price=$seats_adult*$route['price']+$seats_child*$route['price_kid'];

    $current_time = date("Y-m-d");
    $expire_time  = date("Y-m-d",strtotime('+6 hours'));


    $result = mysql_query("INSERT INTO `order`(`user_id`, `number_of_places`, `places`, `adult`, `child`, `cost`, `current_time`, `expire_time`, `route_id`)
                              VALUES (0,'$seats_number','$seats_selected','$seats_adult','$seats_child','$price','$current_time','$expire_time','$route_id')") or die(mysql_error());

    header("Location:/index.php");
?>