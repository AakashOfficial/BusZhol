<?php include 'script/admin/sc_session.php'; ?>

<!DOCTYPE html>
<html>
	<head>
                <?php include "script/admin/sc_connect_config.php"; ?>
            
		<title>Маршруты</title>
                <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
                
		<link rel="stylesheet" type="text/css" href="style/routes.css">

		<script type="text/javascript">
			function show_hide(){
				if(document.getElementById("add_route_block").style.visibility=="visible"){

					document.getElementById("add_route_block").style.visibility="hidden";
					document.getElementById("add_route_block").style.display="none";
					document.getElementById("button_show").style.visibility="visible";
					document.getElementById("button_show").style.display="block";
					document.getElementById("button_hide").style.visibility="hidden";
					document.getElementById("button_hide").style.display="none";
				}
				else{
					document.getElementById("add_route_block").style.visibility="visible";
					document.getElementById("add_route_block").style.display="block";
					document.getElementById("button_show").style.visibility="hidden";
					document.getElementById("button_show").style.display="none";
					document.getElementById("button_hide").style.visibility="visible";
					document.getElementById("button_hide").style.display="block";
				}
			}
		</script>
	</head>
        
        
        <body>            
                <?php include "templates/admin/header.html"; ?>


                <div class="container">
                        <div class="route_block">
                                <div id="add_route_block">
                                        <div class="route_text">
                                                <h1>Добавить Маршрут</h1>
                                        </div>	

                                    
                                        <div id="button_hide">
                                                <img onclick='show_hide()' src="img/button_minus.png">
                                        </div>


                                        <table class="route_table add_route_table">
                                                <form method="post" action="script/admin/sc_add_route.php">
                                                <tr>
                                                        <td>
                                                                Откуда:<input type="text" name="from" placeholder="Город" required></input>
                                                                           <input type="text" name="from_code" placeholder="Код" required></input>
                                                        </td>
                                                        <td>
                                                                Цена:<input type="number" name="price" placeholder="Взрослый" required></input>
                                                                        <input type="number" name="price_kid" placeholder="Детский" required></input>
                                                        </td>
                                                        <td>
                                                                Прибытие:<input type="date" name="date_arrival" required></input>
                                                                <input type="time" name="time_arrival" required></input>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                Куда:<input type="text" name="to" placeholder="Город" required></input><br>
                                                                <input type="text" name="to_code" placeholder="Код" required></input>
                                                        </td>
                                                        <td>
                                                                Мест:<input type="number" name="all_seats" placeholder="Количество" required></input>
                                                                <input type="number" name="empty_seats" placeholder="Свободных" required></input>
                                                        </td>
                                                        <td>
                                                                Отъезд:<input type="date" name="date_departure" required></input>
                                                                <input type="time" name="time_departure" required></input>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                Дистанция:<input type="number" placeholder="КМ" name="distance" placeholder="" required></input>
                                                        </td>
                                                        <td>
                                                                Автобус:<input type="text" placeholder="Название" name="bus" required></input>
                                                        </td>
                                                        <td>
                                                                Длительность:<input type="number" placeholder="Часов" name="duration_time" required></input>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                Расписание:<input type="text" placeholder="Дни недели" name="schedule" required></input>
                                                        </td>
                                                        <td>
                                                                <input type="reset"></input>
                                                        </td>
                                                        <td>
                                                                <input type="submit"></input>
                                                        </td>
                                                </tr>

                                                </form>


                                        </table>


                                </div>

                                <div class="route_text">
                                        <h1>Список Маршрутов</h1>
                                </div>	




                                <div id="button_show">
                                        <img id="add_route" onclick='show_hide()' src="img/button_plus.png">
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
                                        <?php include "script/admin/sc_load_route.php";?>
                                </table>
                        </div>
                </div>
                
            

                <?php include "templates/admin/footer.html"; ?>

        </body>
</html>


<script type="text/javascript">
        document.getElementById("link_2").className="position";
</script>