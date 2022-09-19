<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];

$ckuser= "Tupapa" ;
$ckpass= "Matenaunperonista" ;


if ($usuario == $ckuser && $contrasenia == $ckpass) {
    echo "correcto $usuario" ;
}
 else {
    echo "incorrecto" ;
}



?>