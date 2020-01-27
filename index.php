<?php

/*verison 3*/
    include_once('class/config.php');
    include_once('class/google.php');
    $google = new Google;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google Maps - Rutas</title>
    <!--script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false"></script>-->
    

    <script async defer
    src="//maps.googleapis.com/maps/api/js?key=AIzaSyBas0CM1zHF2OHiy7ZigLCWQjz3vBSBhYQ&callback=initMap">
    </script>

    <script type="text/javascript" src="<?=BASE_URL?>/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>/js/functions.js"></script>
</head>
<body>

    <div class="container">
        <table class="table-elements">
        <tr>
            <td>
            <input type="button" value="Obtener mi Ubicacion" onClick="get_my_location();" class="btn">
            </td>

            <td>
            <input type="text"  placeholder="Latitud" id="my_lat" class="txt" readonly>
            </td>

            <td>
            <input type="text"  placeholder="Latitud" id="my_lng" class="txt" readonly>
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