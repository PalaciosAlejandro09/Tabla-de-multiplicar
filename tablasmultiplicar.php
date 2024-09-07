<html>
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora</title>
    </head>
    <body>

    <?php
    $variable1= $_GET['numero1'];
   //$cantidad= $_GET['numero2'];
    ?>
        <h1>Calculadora tablas de multiplicar</h1>       
<?php

for($i=1; $i<=10; $i++)
echo "<br>".$variable1."x".$i."=".($variable1*$i);
?>

    </body>
</html>