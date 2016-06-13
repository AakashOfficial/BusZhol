<?php

    include "config.php";

    $from=$_POST['from'];
    $to=$_POST['to'];
    $date=$_POST['date'];

    $query=mysql_query("SELECT * FROM `route` WHERE `title`='$from-$to' AND `date_departure`='$date'")or die(mysql_error());

        echo "
             <tr>
                     <td>Маршрут</td>
                     <td>Цена</td>
                     <td>Свободных Мест</td>
                     <td>Автобус</td>
                     <td>Длительность</td>
                     <td>действие</td>
             </tr>";


    while ($route=mysql_fetch_array($query)) {
        echo "
             <tr>
                     <td>$route[title]</td>
                     <td>$route[price]($route[price_kid])</td>
                     <td>$route[empty_seats]</td>
                     <td>$route[bus]</td>
                     <td>$route[duration_time]</td>
                     <td><a href='#' onclick='step_2($route[id])'>Бронировать</a></td>
             </tr>";
    }
?>