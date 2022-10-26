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
    <?php 
    $numeros = ["2", "4", "6", "8", "10", "12", "14", "16", "18", "20"] ;
    
    foreach ($numeros as $valor) {
        print "<p>$valor</p>\n";
    }
    print "<p>Final</p>\n" ;
     
    ?>
    <h1>Ejercicio 2</h1>
    <?php 
    $datos = ["Pedro", "Ana", "34", "1"] ;
    print "<pre>\n";
    print_r($datos);
    print "<p>Final</p>\n" ;
     
    ?>
    <h1>Ejercicio 3</h1>
    <?php 
    $ejer = [ 'nombre' => "Pedro", 'apellido' => "Torres", 'direccion' => "Av. Mayor 3703", 'telefono' => "1122334455"] ;
    print_r($ejer);
    
    print "<p>Final</p>\n" ;
     
    ?>
    <h1>Ejercicio 4</h1>
    <?php 
    $datos = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"] ;
    print "La ciudad con el indice 0 tiene el nombre de $datos[0]" ;
    echo "<br>";
    print "La ciudad con el indice 1 tiene el nombre de $datos[1]" ;
    echo "<br>";
    print "La ciudad con el indice 2 tiene el nombre de $datos[2]" ;
    echo "<br>";
    print "La ciudad con el indice 3 tiene el nombre de $datos[3]" ;
    echo "<br>";
    print "La ciudad con el indice 4 tiene el nombre de $datos[4]" ;
    echo "<br>";
    print "La ciudad con el indice 5 tiene el nombre de $datos[5]" ;
    echo "<br>";
     
    ?>
    <h1>Ejercicio 5</h1>
    <?php 
    $ind = [ 'MD' => "Madrid", 'BCL' => "Barcelona", 'LD' => "Londres", 'NY' => "New York", 'LA' => "Los Angeles", 'CCG' => "Chicago"] ;
    print "El indice de $ind[MD] es MD" ;
    echo "<br>";
    print "El indice de $ind[BCL] es BCL" ;
    echo "<br>";
    print "El indice de $ind[LD] es LD" ;
    echo "<br>";
    print "El indice de $ind[NY] es NY" ;
    echo "<br>";
    print "El indice de $ind[LA] es LA" ;
    echo "<br>";
    print "El indice de $ind[CCG] es CCG" ;
    echo "<br>";
    
    print "<p>Final</p>\n" ;
     
    ?>
</body>
</html>