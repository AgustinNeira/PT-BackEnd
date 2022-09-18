<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <h2>Variable universal 166 </h2>

    <?php 
    $n = 166 ;
    if ($n > 0) {
        echo "El Numero $n efectivamente es positivo" ;
    } else {
        echo "El Numero $n efectivamente es negativo" ;
    } 
    ?>
    <h1>Ejercicio 2</h1>

    <?php 
    if( ($n >= 1) && ($n <= 10) ) {
        echo "El Numero $n esta entre el 0 y el 10" ;
    } else {
        echo "El Numero $n efectivamente es mayor a 10" ;
    } 
    ?>
    <h1>Ejercicio 3</h1>

    <?php 
    if ($n <= 2) {
        echo "El Numero $n es mayor a 2" ;
    } else if ($n >= 10) {
        echo "El Numero $n no es menor a 2 " ;
        echo "y ademas   $n  es mayor a 10" ;
    } else {
        echo "tu numero esta fuera de nuestra liga" ;
    }
    ?>
    <h1>Ejercicio 4</h1>
    <?php 
    $numero1 = 4 ;
    $numero2 = 6 ;
    $suma = $numero1 + $numero2 ;
    $resta = $numero1 - $numero2 ;
    $multi = $numero1 * $numero2 ;
    $resto = $numero1 % $numero2 ;
    if ($numero1 > $numero2) {
        echo "Suma = $suma y Resta = $resta" ;
    } else if ($numero1 < $numero2) {
        echo "Multiplicacion = $multi y resto = $resto" ;
    } else if ($numero1 == $numero2) {
        echo "los Numeros ingresados son iguales" ;
    }
    
    ?>

</body>
</html>