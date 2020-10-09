<?php
require_once("../clases/ctrl_session.php");
//---------- USES DE LAS CLASES DE NAMESPACES ----
use \clases\ctrl_session\Ctrl_Session;
//-----------------------------------------------
Ctrl_Session::verificar_inicio_session();
?>

<?php include("header.php"); ?>

<?php include("nav.php"); ?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-map-marker" aria-hidden="true"></i> Geolocalizacion</h1>
            <p>Inicia la busqueda en el mapa

            </p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
    </div>

    <div id="map">
        <script src="../plugin/js/scrip.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCte4D87tnqc0Vh-CAigdbmS5t8ZAeunqo&callback=iniciarMap"></script>
    </div>
</main>



<?php include("footer.php"); ?>
</body>

</html>