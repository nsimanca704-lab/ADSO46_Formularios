<?php
if (isset($_GET["nombre"])) {
    echo"Hola," .$_Get["nombre"];
} else {
    echo "No se recibio ningun nombre";
}
?>