<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gimnasio Nasio</title>
  </head>
  <body>
    <?php
    //Formulario de hombres
    echo "Formulario hombres:";
    echo "<hr>";
    //----------------------
    //include...
    include "calculosGym.php";
     //------------------------------------------\\
     $resultado = new Calculo();

     $resultado->almacenar($_POST["lunes"]);
     $resultado->almacenar($_POST["martes"]);
     $resultado->almacenar($_POST["miercoles"]);
     $resultado->almacenar($_POST["jueves"]);
     $resultado->almacenar($_POST["viernes"]);
     $resultado->almacenar($_POST["sabado"]);

     $imprimir=$resultado->imprimir();
     echo $imprimir;
     echo "<hr>";
     echo $resultado->media();
     //------------------------------------------\\

     ?>
  </body>
</html>
