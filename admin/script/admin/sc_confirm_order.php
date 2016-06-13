<?php
    $id = $_GET['id'];


    include_once 'config.php';

    $result = mysql_query("SELECT * FROM `order` WHERE id='$id'") or die(mysql_error());

    $order = mysql_fetch_array($result);


    $user_id = $order['user_id'];
    $number_of_places = $order['number_of_places'];
    $date_purchase = date("o-m-d");
    $route_id = $order['route_id'];

    mysql_query("INSERT INTO `ticket`(`user_id`, `number_of_places`, `date_purchase`, `route_id`) "
            . "VALUES ('$user_id','$number_of_places','$date_purchase','$route_id')") or die(mysql_error());

    mysql_query("DELETE FROM `order` WHERE id=$id") or die(mysql_error());

    header("Location:/admin/order.php");
    
    
    
    $result = mysql_query("SELECT * FROM `info` WHERE name='tickets_purchased'") or die(mysql_error());
    $ff = mysql_fetch_array($result);
    
    $number_of_tickets_purchased = $ff['value'] + $number_of_places;
    
    mysql_query("UPDATE `info` SET `value`='$number_of_tickets_purchased' WHERE name='tickets_purchased'") or die(mysql_error());
?>