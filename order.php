<!DOCTYPE html>
<html>
    <head>
        <?php include "script/main/sc_connect_config.php"; ?>
        
        <title>Заказать</title>
        <link rel="shortcut icon" type="image/x-icon" href="resources/img/logo.png" />
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="resources/FrameWork/jquery_ui/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="style/order.css">
        <link rel="stylesheet" type="text/css" href="resources/FrameWork/jquery_ui/jquery-ui.css">
        
        
        <script>
            $(document).ready(function(){
                $(".step_2").hide();
                $(".step_3").hide();
                $(".step_4").hide();
                $(function(){
                    $.datepicker.setDefaults(
                          $.extend($.datepicker.regional["ru"])
                    );
                    $("#input_date").datepicker({
                        dateFormat: "dd-mm-yy",
                        dayNamesMin: [ "Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс" ],
                        monthNames: [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
                        numberOfMonths:  1,
                        minDate: 0,
                        maxDate:40
                    });
                });





            });

            function step_1(){
                var msg=$("#step_1_form").serialize();
                $.ajax({
                    type:'POST',
                    url:'script/order/sc_step_1.php',
                    data:msg,
                    success:function(data){
                        $(".routes").html(data);
                        $(".step_1").hide();
                        $(".step_2").show();
                    }
                });
            }

            var seats_count=0;
            var seats_selected="";
            var route_id;

            function step_2(id){
                route_id=id;
                $.ajax({
                    type:'POST',
                    url:'script/order/sc_step_2.php',
                    data:{'id':id},
                    success:function(data){
                        $(".seats").html(data);
                        $(".step_2").hide();
                        $(".step_3").show();



                        $(".seats").on("click", "td", function() {
                            if($(this).hasClass("free") && seats_count<4) {
                                seats_count+=1;
                                $(this).css("background", "#e8645a");
                                $(this).removeClass();
                                $(this).addClass("selected");
                                seats_selected+=$(this).text()+',';
                            }
                            else if($(this).hasClass("selected") && seats_count>0){
                                seats_count-=1;
                                $(this).css("background", "#4bc39d");
                                $(this).removeClass();
                                $(this).addClass("free");
                                seats_selected=seats_selected.replace($(this).text()+',',"");
                            }

                        });
                    }
                });
            }


            function step_4(){
                $("#final_route_id").val(route_id);
                seats_selected=seats_selected.substring(0, seats_selected.length - 1);
                $("#final_seats_selected").val(seats_selected);
                $("#final_seats_selected_adult").val(seats_count);
                $(".step_3").hide();
                $(".step_4").show();
            }

        </script>
    </head>
    
    
    <body>
        <?php include 'templates/main/header.php'; ?>
        <div class="container">




            <div  class="step_1">
                <h3>Выберите направление и дату</h3>
                    <form method="post" id="step_1_form" action="javascript:void(null);" onsubmit="step_1()">

                        <label>Начало маршрута</label><br>
                        <input id="input_from"  name="from" type="text" list="list_city" required placeholder="Введите город"><br>

                        <label>Конец маршрута</label><br>
                        <input id="input_to"    name="to"   type="text" list="list_city" required placeholder="Введите город"><br>

                        <label>Дата маршрута</label><br>
                        <input id="input_date"  name="date" type="text" required placeholder="Выберите дату"><br>
                        <input type="submit">

                        <datalist id="list_city">
                            <option value="Астана">
                            <option value="Павлодар">
                            <option value="Алматы">
                        </datalist>

                    </form>

            </div>

            <div class="step_2">
                <h3>Выберите Маршрут</h3>
                <table class="routes">
                </table>
            </div>

            <div class="step_3">
                <h3>Выберите Место</h3>
                <table class="seats">

                </table>
                <a href="#" class="step_3_submit" onclick="step_4()">Далее</a>
            </div>

            <div class="step_4">
                <form method="post" action="script/order/sc_create_order.php">

                    <input id="final_route_id" type="hidden" name="route_id">
                    <input id="final_seats_selected" type="hidden" name="seats_selected">

                    <label>Adult</label>
                    <input id="final_seats_selected_adult" type="number" name="seats_selected_adult" required>
                    <label>Child</label>
                    <input type="number" name="seats_selected_child" required>

                    <input type="submit">
                </form>
            </div>




        </div>

        <?php include 'templates/main/footer.php'; ?>
    </body>
</html>

<script type="text/javascript">
        document.getElementById("link_2").className = "position";
</script>

