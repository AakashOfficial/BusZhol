<!DOCTYPE html >
<html>
    <head>
        <?php include "script/main/sc_connect_config.php"; ?>
        
        <title>Главная</title>
        <link rel="shortcut icon" type="image/x-icon" href="resources/img/logo.png" />

        <link rel="stylesheet" type="text/css" href="style/login.css">
    </head>
    
    
    <body>
            
        <div class="container">
            <div class="login_block">
                <div class="login_block_top">
                    <a href="index.php"><img src="resources/img/main/icon.png"></a>
                </div>
                <div class="login_block_content">
                <form class="" method="post" action="admin/script/admin/sc_login.php">

                        <label>Логин</label>
                        <p><input class="login_input" type="text" id="login" placeholder="Логин" name="login"></p>
                        <label>Пароль</label>
                        <p><input class="login_input" type="password" id="password" placeholder="Пароль" name="password"></p>

                    
                   
                        <input type="reset" value="Сбросить">
                        <input type="submit"  value="Вход" id="login" name="submit">
                   

                </form>
            </div>
        </div>

    </body>
</html>

<script type="text/javascript">
        document.getElementById("link_6").className = "position";
</script>

