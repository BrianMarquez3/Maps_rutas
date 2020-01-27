<?php
/*verison 4*/
    include_once('class/config.php');
    include_once('class/google.php');
    $google = new Google;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google Maps - Rutas</title>

    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>/css/base.css">
    <!--<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBas0CM1zHF2OHiy7ZigLCWQjz3vBSBhYQ&callback=iniciarMap"></script>-->

    <script async defer src="//maps.googleapis.com/maps/api/js?key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8&callback=initMap"></script>
    <script type="text/javascript" src="<?=BASE_URL?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>/js/functions.js"></script>

</head>
</head>
<body>
    <div class="container">
        <table class="table-elements">
        <tr>
            <td>
            <input type="button" value="Obtener mi Ubicacion - A" onClick="get_my_location();" class="btn">
            </td>

            <td>
            <input type="text"  placeholder="Latitud" id="my_lat" class="txt" readonly>
            </td>

            <td>
            <input type="text"  placeholder="Longitud" id="my_lng" class="txt" readonly>
            </td>

            <td>
                <select class="txt" onchange="draw_rute(this.value)">
                    <option value="0">Dibujar ruta con &#8594;</option>
                    <?=$google->get_stores();?>
                </select>
            </td>
        </tr>
        </table>
        <div class="map" id="map"></div>
        </div>
        <script type="text/javascript">
            start_map();
        </script>
    </body>
</html>


<!--git remote add origin https://github.com/BrianMarquez3/Maps_rutas.git
git push -u origin master-->