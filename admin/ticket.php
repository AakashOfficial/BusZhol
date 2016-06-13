<?php include 'script/admin/sc_session.php'; ?>
<!DOCTYPE html>
<html>
        <head>
                <?php include "script/admin/sc_connect_config.php"; ?>

                <title>Билеты</title>
                <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />

                <link rel="stylesheet" type="text/css" href="style/ticket.css">
        </head>
        
        
        <body>
                <?php include "templates/admin/header.html"; ?>

            
                <div class="container">
                        <div class="tickets_block">
                                <h1>Список Билетов</h1>
                                <table class="tickets_table">
                                        <tr>
                                                <td>ID</td>
                                                <td>Маршрут</td>
                                                <td>ФИО</td>
                                                <td>ИНН</td>
                                                <td>Тел</td>
                                                <td>Дата покупки</td>
                                                <td>Кол-во Мест</td>
                                        </tr>
                                        <?php include "script/admin/sc_load_ticket.php";?>
                                </table>
                        </div>
                </div>

                <?php include "templates/admin/footer.html"; ?>
        </body>
</html>

<script type="text/javascript">
        document.getElementById("link_3").className="position";
</script>