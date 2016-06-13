<?php include 'script/admin/sc_session.php'; ?>

<!DOCTYPE html>
<html>
        <head>
                <?php include "script/admin/sc_connect_config.php"; ?>
        
                <title>Заказы</title>
                <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
        
                <link rel="stylesheet" type="text/css" href="style/order.css">     
        </head>
        
        
        <body>
                <?php include "templates/admin/header.html"; ?>


                <div class="container">
                        <div class="order_block">
                                <h1>Список Заказов</h1>
                                <table class="order_table">
                                        <tr>
                                                <td>ID</td>
                                                <td>Маршрут</td>
                                                <td>ФИО</td>
                                                <td>ИНН</td>
                                                <td>Тел</td>
                                                <td>Места</td>
                                                <td>Стоимость</td>
                                                <td>Время до покупки</td>
                                                <td>Действие</td>
                                        </tr>

                                        <?php include "script/admin/sc_load_order.php" ;?>
                                </table>
                        </div>
                </div>

                <?php include "templates/admin/footer.html"; ?>
        </body>
</html>


<script type="text/javascript">
        document.getElementById("link_4").className="position";
</script>