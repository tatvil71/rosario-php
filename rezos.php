<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function padreNuestro()
            {
            echo('<h4>PADRE NUESTRO</h4>');
            echo('<p>Padre nuestro, que estas en el cielo, santificado sea tu nombre, venga a nosotros tu reino, hágase tu voluntad, en la tierra como en el cielo. </p><p>Danos hoy nuestro pan de cada día, perdona nuestras ofensas, como también nosotros perdonamos a los que nos ofenden. No nos dejes caer en la tentación, y libranos del mal. AMEN');
            }
        function gloria()
            {
                echo ('<h4>GLORIA</h4>');
                echo ('<p>Gloria al Padre y al Hijo y al Espíritu Santo. Como era en el principio, ahora y siempre, por los siglos de los siglos AMEN</p>');
            }
        function invocacion()
            {
            echo ('<h4>INVOCACIÓN</h4>');
            echo ('<p>María, Madre de gracia, Madre de misericordia, defiéndenos de nuestros enemigos y ampáranos ahora y en la hora de nuestra muerte. AMEN</p>');
            }
        function aveMaria($veces)
            {
                echo('<h4>AVE MARIA x'.$veces.'</h4>');
                echo('<p>Dios te salve, María, llena eres de gracia, el Señor es contigo. Bendita tu eres entre todas las mujeres y bendito es el fruto del tu vientre, Jesús. </p><p>Santa María, Madre de Dios, ruega por nosotros pecadores, ahora y en la hora de nuestra muerte. AMEN </p>'); 
            }
        function credo()
            {
                echo("<h3>EL CREDO</h3>");
                echo("<p><strong>Creo en Dios</strong>, Padre Todopoderoso, Creador del cielo y de la tierra</p>
                <p><strong>Creo en Jesucristo</strong>, su único Hijo, Nuestro Señor, que fue concebido por obra y gracia del Espíritu Santo, nació de santa María Virgen, padeció bajo el poder de Poncio Pilato, fue crucificado muerto y sepultado, descendió a los infiernos, al tercer día resucitó de entre los muertos, subió a los cielos y está sentado a la derecha de Dios Padre Todopoderoso. Desde allí ha de venir a juzgar a vivos y a muertos.</p>
                <p><strong>Creo en el Espíritu Santo</strong>, la santa Iglesia católica, la comunión de los santos, el perdón de los pecados, la resurrección de la carne y la vida eterna.</p>
                <p>AMEN<p> ");
            }
        function laSalve()
            {
            echo('<h3>LA SALVE</h3>');
            echo('<p>Dios  te Salve, Reina y madre de misericordia, vida, dulzura y esperanza nuestra, Dios te salve.</p>
            <p>A ti llamamos los desterrados hijos de Eva; a ti suspiramos, gimiendo y llorando en este valle de lágrimas.</p>
            <p>Ea, pues, Señora, abogada nuestra, vuelve a nosotros, esos tus ojos misericordiosos, y, después de este destierro, muéstranos a Jesús, fruto bendito de tu vientre.</p>
            <p>¡Oh clementisima, oh piadosa, oh dulce virgen María!</p>
            <p>Ruega por nosotros, Santa Madre de Dios, para que seamos dignos de alcanzar las promesas de nuestro Señor Jesucristo</p>');

            }
        
    ?>
</body>
</html>