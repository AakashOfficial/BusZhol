<?php
    include_once 'config.php';

    $query = mysql_query("SELECT * FROM `route`") or die(mysql_error());

    if (mysql_num_rows($query) == 0) {
        echo "
                    <tr>
                            <td colspan='12'>
                                    Нет доступных маршрутов
                            </td>
                    </tr>";
    } else {
        while ($route = mysql_fetch_array($query)) {
            echo "
                    <tr>
                            <td>$route[id]</td>
                            <td>$route[title]</td>
                            <td>$route[date_departure]</td>
                            <td>$route[price]($route[price_kid])</td>
                            <td>$route[empty_seats]/$route[all_seats]</td>
                            <td>$route[bus]</td>
                            <td>$route[distance]</td>
                            <td>$route[duration_time]</td>
                            <td><a class='delete' href='script/admin/sc_delete_route.php?id=$route[id]'>Удалить</a></td>
                    </tr>

                                    ";
        }
    }
?>