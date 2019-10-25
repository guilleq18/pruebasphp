<?php

require_once("persistencia/modelo.php");

//modelo es una instancia de la clase Modelo del script modelo.php
$modelo = new Modelo();
//resultado lo igualo a la consulta realizada por el metodo traerCLiente
$result = $modelo->traerCliente();
//imprimo el contenido de result
print_r ( $result);