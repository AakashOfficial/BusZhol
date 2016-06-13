<?php

    $from = $_POST['from'];
    $from_code = $_POST['from_code'];
    $to = $_POST['to'];
    $to_code = $_POST['to_code'];

    $date_arrival = $_POST['date_arrival'];
    $time_arrival = $_POST['time_arrival'];
    $date_departure = $_POST['date_departure'];
    $time_departure = $_POST['time_departure'];

    $price = $_POST['price'];
    $price_kid = $_POST['price_kid'];

    $all_seats = $_POST['all_seats'];
    $empty_seats = $_POST['empty_seats'];

    $bus = $_POST['bus'];

    $distance = $_POST['distance'];
    $duration_time = $_POST['duration_time'];

    $schedule = $_POST['schedule'];

    include_once 'config.php';

    $result = mysql_query("INSERT INTO `seats`(`taken_seats`, `all_seats`) VALUES ('some text','$all_seats')") or die(mysql_error());
    $result = mysql_query("SELECT * FROM `seats` ORDER BY id DESC LIMIT 1") or die(mysql_error());

    $seats = mysql_fetch_array($result);
    $seats_id=$seats['id'];

    mysql_query("INSERT INTO `route`(`title`, `code`, `bus`, `date_arrival`, `date_departure`, `time_arrival`, `time_departure`, `price`, `empty_seats`, `price_kid`, `all_seats`, `schedule`, `distance`, `duration_time`,`seats_id`) VALUES
                    ('$from-$to','$from_code-$to_code','$bus','$date_arrival','$date_departure','$time_arrival','$time_departure','$price','$empty_seats','$price_kid','$all_seats','$schedule','$distance км','$duration_time часов','$seats_id')")
            or die(mysql_error());

    header("Location:/admin/routes.php");
?>