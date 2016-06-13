<!DOCTYPE html>
<html>
    <head>
        <?php include "script/main/sc_connect_config.php"; ?>
        
        <title>Маршруты</title>
        <link rel="shortcut icon" type="image/x-icon" href="resources/img/logo.png" />
        
        <link rel="stylesheet" type="text/css" href="style/routes.css">
    </head>
    <body>
        <?php include 'templates/main/header.php'; ?>

        <div class="container">
                        <div class="route_block">
                                <div class="route_text">
                                        <h1>Список Маршрутов</h1>
                                </div>	

                                <table class="route_table">
                                        <tr>
                                                <td>ID</td>
                                                <td>Направление</td>
                                                <td>Дата</td>
                                                <td>Цена</td>
                                                <td>Мест</td>
                                                <td>Автобус</td>
                                                <td>Дистания</td>
                                                <td>Длительность</td>
                                                <td>Действие</td>
                                        </tr>
                                        <?php include "script/main/sc_load_route.php";?>
                                </table>
                        </div>
        </div>
        




        <?php include 'templates/main/footer.php'; ?>
    </body>
</html>

<script type="text/javascript">
        document.getElementById("link_4").className = "position";
</script>
