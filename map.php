<!DOCTYPE html>
<html>

    <head>
        <?php include "script/main/sc_connect_config.php"; ?>
        
        <title>Карта</title>
        <link rel="shortcut icon" type="image/x-icon" href="resources/img/logo.png" />
        
        <link rel="stylesheet" type="text/css" href="style/map.css">
        
        <script src="http://maps.googleapis.com/maps/api/js"></script>
       
        <script>
            function initialize() {
                var mapProp = {
                    center: new google.maps.LatLng(51.508742, -0.120850),
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>

    <body>
        <?php include 'templates/main/header.php'; ?>

        <div class="container">
            <div id="googleMap" ></div>
        </div>

        <?php include 'templates/main/footer.php'; ?>
    </body>
</html>

<script type="text/javascript">
            document.getElementById("link_3").className = "position";
</script>

