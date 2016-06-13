<?php

include "config.php";

$id=$_POST['id'];

    $result = mysql_query("SELECT `seats_id` from `route` WHERE id='$id'") or die(mysql_error());
    $route = mysql_fetch_array($result);
    $seats_id = $route['seats_id'];

    $result = mysql_query("SELECT * from `seats` WHERE id='$seats_id'") or die(mysql_error());
    $seats = mysql_fetch_array($result);



    $seats_taken=explode(',',$seats['taken_seats']);


    $seats_array=array();
    for($i=0;$i<=49;$i++){

        if(in_array($i,$seats_taken)==1) {
            $seats_array[]="busy";
        } elseif(in_array($i,$seats_taken)!=1){
            $seats_array[]="free";
        }
    }


    include $_SERVER['DOCUMENT_ROOT']."/script/seats/seats_52.php";

?>