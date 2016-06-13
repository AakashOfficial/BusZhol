<!DOCTYPE html>
<html>
        <head>
                <?php include "script/main/sc_connect_config.php"; ?>

                <title>Кассы</title>
                <link rel="shortcut icon" type="image/x-icon" href="resources/img/logo.png" />
                <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
                <link rel="stylesheet" type="text/css" href="style/offices.css">
                
                <script type="text/javascript">
                        $(document).ready(function(){
                            $("#select").change(function(){
                                $("#offices").load('script/footer/sc_load_offices.php?city='+$("select").val());
                             });
                         });
                </script>
        </head>
        
        
        <body>
                <?php include "templates/main/header.php"; ?>

            
                <div class="container">
                        <div class="offices_block">
                                <select id="select" required>
                                        <option selected value="all">Все города</option>
                                        <option>Астана</option>
                                        <option>Алматы</option>
                                </select>
                                <h1>Список Касс</h1>
                                 
                                

                                <table id="offices" class="offices_table">
                                        <? include "script/main/sc_load_offices.php"; ?>
                                </table>
                        </div>
                </div>
            
            
                <?php include "templates/main/footer.php"; ?>
        </body>
</html>

<script type="text/javascript">
        document.getElementById("link_5").className="position";
</script>

