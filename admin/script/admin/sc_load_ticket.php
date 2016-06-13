<?php
    include_once 'config.php';

    $query = mysql_query("SELECT * FROM `ticket`") or die("something wrong");

    if (mysql_num_rows($query) == 0) {
        echo "<tr>
                    <td colspan='10'>
                            Нет доступных билетов
                    </td>
              </tr>";
    } else {

        while ($ticket = mysql_fetch_array($query)) {
            $query_2=  mysql_query("SELECT * FROM `users` WHERE id='$ticket[user_id]'") or die(mysql_error());
            $user = mysql_fetch_array($query_2);
            
            $query_2=  mysql_query("SELECT * FROM `route` WHERE id='$ticket[route_id]'") or die(mysql_error());
            $route = mysql_fetch_array($query_2);
            echo "<tr>
                                    <td>$ticket[id]</td>
                                    <td>$route[title]</td>
                                    <td>$user[name]</td>
                                    <td>$user[inn]</td>
                                    <td>$user[telno]</td>
                                    <td>$ticket[date_purchase]</td>
                                    <td>$ticket[number_of_places]</td>
                  </tr>";
        }
    }
?>