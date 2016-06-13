<meta charset="utf-8">
<?php
//	$connection=mysql_connect("localhost","root","");
//
//	$db=mysql_select_db("buszhol",$connection) or die("select_db_error");

include_once 'config.php';

mysql_query("SET NAMES utf8");

$query = mysql_query("SELECT * FROM `order`") or die(mysql_error());



if (mysql_num_rows($query) == 0) {
    echo "<tr>
				<td colspan='8'>
				Нет доступных заказов
				</td>
			  </tr>";
} else {
    while ($order = mysql_fetch_array($query)) {
        $query_2=mysql_query("SELECT * FROM `users` WHERE id='$order[user_id]'") or die(mysql_error());
        $user = mysql_fetch_array($query_2);
        
        $query_2=mysql_query("SELECT * FROM `route` WHERE id='$order[route_id]'") or die(mysql_error());
        $route = mysql_fetch_array($query_2);
        echo "<tr>
				<td>$order[id]</td>
				<td>$route[title]</td>
				<td>$user[name]</td>
                                <td>$user[inn]</td>
                                <td>$user[telno]</td>
				<td>$order[adult]/$order[child]($order[places])</td>
				<td>$order[cost]</td>
				<td>$order[expire_time]</td>
                                
				<td><a href='script/admin/sc_confirm_order.php?id=$order[id]'>Подтвердить</a>";


        echo "</tr>";
    }
}
?>