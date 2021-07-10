<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosario</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <meta property="og:image" content="./logotipo-rosario.png">
</head>
<body>
<script src="cabecera.js"></script>
<h3>CRUZ</h3>
<script src="rezos.js"></script>

<?php   
    include 'C:\xampp\htdocs\recursos-catolicos\rosario\php\misterios.php' ;
    include 'rezos.php' ;  
?>

<p>+ En el nombre del Padre, del Hijo y del Espíritu Santo AMEN</p>


<p>- Dios mío ven en mi auxilio</p>
<p>- Señor, date prisa en socorrerme</p>

<?php

credo();
padreNuestro();
aveMaria(4);

$diaSemana = date("w");

switch ($diaSemana) 
    {
        case 0:                         //Domingo
            $misterios="gloriosos";  
            break;
        case 1:                         // Lunes
            $misterios="gozosos";    
            break;
        case 2:                         //Martes
            $misterios="dolorosos";     
            break;
        case 3:                         //Miercoles
            $misterios="gloriosos";     
            break;
        case 4:                         //Jueves
            $misterios="luminosos";   
            break;
        case 5:                         //Viernes
            $misterios="dolorosos";
            break;
        case 6:                         //Sabado
            $misterios= "gozosos";     
            break;
    }

echo("<H3>MISTERIOS ". strtoupper($misterios)."</H3>");

    echo('<hr>');
    for($i = 1; $i <= 5; $i++) 
    {
        echo ('<hr><h4>'.$i.'º misterio: ');
        misterios($misterios,$i);
        echo('<hr>');
 
        echo (' <p>OH Jesús mío, perdónanos, libranos del fuego del infierno, lleva al Cielo a todas las almas, especialmente las más necesitadas.</p>');
        gloria();
        invocacion();
        padreNuestro();
        aveMaria(10);
        echo('<hr>');
    };

    echo ("<h3>CENTRAL</h3>");
    gloria();
    invocacion();
?>

<p>OH Jesús mío, perdónanos, libranos del fuego del infierno, lleva al Cielo a todas las almas, especialmente las más necesitadas.</p>

<?php laSalve(); ?>


<h3>ORACIÓN</h3>
<p>Te rogamos nos concedas, Señor Dios nuestro, gozar de continua salud de alma y cuerpo, por la gloriosa intercesión de la bienaventurada siempre Virgen María, vernos libres de las tristezas de la vida presente y disfrutar de las alegrías eternas. Por Cristo nuestro Señor.
AMEN</p>


<h3>ORACIONES POR LAS INTENCIONES DEL PAPA</h3>

<script src="oracionPapa.js"></script>


<?php
    padreNuestro();
    aveMaria(1);
    gloria();
?>
<p>+ En el nombre del Padre, del Hijo y del Espíritu Santo AMEN</p>

<h1>FIN</h1>

</body>
</html>
