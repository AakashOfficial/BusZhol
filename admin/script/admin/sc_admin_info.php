<?php
    include_once 'config.php';
    
    $result = mysql_query("SELECT `id` FROM `route`") or die(mysql_error());
    
    $number_of_routes=  mysql_num_rows($result);
    
    
    
    $result = mysql_query("SELECT `mail` FROM `administration`") or die(mysql_error());
    $ff = mysql_fetch_array($result);
    
    $admin_mail = $ff['mail'];
    
    
    
    $result = mysql_query("SELECT `id` FROM `order`") or die(mysql_error());
    
    $number_of_orders = mysql_num_rows($result);
    
    
    
    $result = mysql_query("SELECT `id` FROM `ticket`") or die(mysql_error());
    
    $number_of_tickets = mysql_num_rows($result);
    
    
    
    $result = mysql_query("SELECT * FROM `info` WHERE name='tickets_purchased'") or die(mysql_error());
    $ff = mysql_fetch_array($result);
    
    $number_of_tickets_purchased = $ff['value'];
    
    $result = mysql_query("SELECT * FROM `agency_offices` WHERE admin_id='$_SESSION[id]]'") or die(mysql_error());
    $office=mysql_fetch_array($result);
    
?>