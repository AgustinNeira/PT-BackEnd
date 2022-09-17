<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabajo Practino N2</h1>
    <h2>Ejercicio 1 y 2</h2>
    <?php
    $mensaje = "Hola mundo" ;
    echo $mensaje ;
    
    


    ?>
    <br>
    <h2>Ejercicio 3</h2>
    <p>Numero variable 1 = 10</p> 
    <p>Numero variable 2 = 20</p> <br>
    <h5>SUMA</h5>
    
    <?php
    $num1 = 10 ;
    $num2 = 20 ;
    $suma = $num1 + $num2 ;
    echo $num1 ;
    echo " + " ;
    echo $num2 ;
    echo " = " ;
    echo $suma ;
    
    ?>
    <br>
    <h5>RESTA</h5>
    <?php 
    
    $resta = $num1 - $num2 ;
    echo $num1 ;
    echo " - " ;
    echo $num2 ;
    echo " = " ;
    echo $resta ;
    
    
    ?>
    <h5>DIVISION</h5>
    <?php 
    
    $divi = $num1 / $num2 ;
    echo $num1 ;
    echo " / " ;
    echo $num2 ;
    echo " = " ;
    echo $divi ;
    
    
    ?>
    <h5>MULTIPLICACION</h5>
    <?php 
    
    $multi = $num1 * $num2 ;
    echo $num1 ;
    echo " x " ;
    echo $num2 ;
    echo " = " ;
    echo $multi ;
    
    
    ?>

    <h2>Ejercicio 4</h2>
    <P>La temperatura exterior de 20 grados Celcius a Fahrenheit es igual a: </P>
    <?php
    $temp = 20;
    $fahrenheit = $temp * 1.8 + 32 ;
    echo $fahrenheit;
    ?>
    <h2>Ejercicio 5</h2>
    
    <?php 
    $base = 18 ;
    $altura= 12 ;
    $area = $base * $altura ;
    echo "El area de un rectangulo de 18 cm x 12 cm: $area"  ;
    
    ?>
<br>
<br>
    <?php 
    $perimetro = ($base * 2) + ($altura * 2) ;
    echo "El perimetro del rectangulo: $perimetro" ;

    ?>

    <p>Perimetro de un circulo con radio de 30 cm: </p>
    <?php 
    $radio = 30 ;
    $pi = 3.1416 ;
    $perimetr = 2.0*$pi*$radio ;
    echo "El perimetro del circulo con radio de 30 cm es: $perimetr" ;
    
    ?>

    <?php 
    $areaC = ($pi *($radio*$radio));
    echo "El area del circulo es: $areaC" ;
    
    ?>


    
</body>
</html>