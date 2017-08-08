<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>algoritmo 9 </title>
  </head>
  <body>
    <h3> algoritmo que muestre la suma de todos los numeros pares del 1 al 100 y diga cuantos hay</h3>
        <?php
          $i=1;
          $suma=0;
          $cont=0;
            while ($i<=100){
               if (($i%2)==0){
               $suma=$suma+$i;
               $cont++;
       }
          $i++;
       }

           echo " la suma de todos los numeros pares del 1 al 100 son : $suma" ;
           echo " <br/> cantidad de numeros pares: $cont";

         ?>
  </body>
</html>
