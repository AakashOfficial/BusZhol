<?php include 'script/admin/sc_session.php'; ?>

<!DOCTYPE html>
<html>
        <head>
                <?php include "script/admin/sc_connect_config.php"; ?>
        
                <link rel="stylesheet" type="text/css" href="style/index.css">
                <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
            
                <title>Главная</title>
        </head>
    
        
        <body>
                <?php include "templates/admin/header.html"; ?>
                <?php include "script/admin/sc_admin_info.php";?>
                <div class="container">
                    <div class="admin_info_block">
                        
                        <table class="admin_table">
                            <tr>
                                <th colspan="2"><h2>Информация Оператора</h2></th>
                            </tr>
                            <tr>
                                <td>Имя Пользователя:</td>
                                <td><input value="<?php echo $_SESSION[login]; ?>" disabled /></td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td><input value="<?php echo $admin_mail; ?>" disabled /></td>
                            </tr>
                            <tr>
                                <td>Город:</td>
                                <td><input value="<?php echo $office[city]; ?>" disabled /></td>
                            </tr>
                            <tr>
                                <td>Название:</td>
                                <td><input value="<?php echo $office[name]; ?>" disabled /></td>
                            </tr>
                            <tr>
                                <td>Адрес:</td>
                                <td><input value="<?php echo $office[address]; ?>" disabled /></td>
                            </tr>
                            <tr>
                                <td>Телефон:</td>
                                <td><input value="<?php echo $office[telephone]; ?>" disabled /></td>
                            </tr>
                        </table>
                    </div>
                    
                       
                    <div class="route_info_block">
                        
                        <table class="route_table">
                            <tr>
                                <th colspan="2"><h2>Общая Информация</h2></th>
                            </tr>
                            <tr>
                                <td>Заказы:</td>
                                <td><input value="<?php echo $number_of_orders; ?>" disabled /></td>
                            </tr>
                            <tr>
                                <td>Маршруты:</td>
                                <td><input value="<?php echo $number_of_routes; ?>" disabled /></td>
                            </tr>
                            <tr>
                                <td>Билеты:</td>
                                <td><input value="<?php echo $number_of_tickets; ?>" disabled /></td>
                            </tr>
                            <tr>
                                <td>Кол-во купленных билетов:</td>
                                <td><input value="<?php echo $number_of_tickets_purchased; ?>" disabled /></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <?php include "templates/admin/footer.html"; ?>
        </body>
</html>


<script>
        document.getElementById("link_1").className="position";
</script>