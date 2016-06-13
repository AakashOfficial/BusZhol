<meta charset="utf-8">
<?php
    include_once 'config.php';

    echo "<tr>
                                        <td>Название</td>
                                        <td>Адрес</td>
                                        <td>Телефон</td>
                    </tr>";


    $city=$_GET['city'];

    if($city=='all' or !isset($_GET['city'])){

        $query = mysql_query("SELECT * FROM `agency_offices`") or die("something wrong");

        while ($office = mysql_fetch_array($query)) {
            echo "<tr>
                                        <td>$office[name]</td>
                                        <td>$office[address]</td>
                                        <td>$office[telephone]</td>
                    </tr>";
        }
    }else {
    


        $query = mysql_query("SELECT * FROM `agency_offices` WHERE city='$city'") or die("something wrong");

        if (mysql_num_rows($query) == 0) {
            echo "<tr>
                        <td colspan='10'>
                                Нет доступных касс
                        </td>
                  </tr>";
        } else {

            while ($office = mysql_fetch_array($query)) {
                echo "<tr>
                                        <td>$office[name]</td>
                                        <td>$office[address]</td>
                                        <td>$office[telephone]</td>
                    </tr>";
            }
        }
    }
?>