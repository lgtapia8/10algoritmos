<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>algoritmo 7 </title>
  </head>
  <body>
    <h3> algoritmo que muestre la suma de todos los numeros pares del 1 al 100 </h3>
        <?php
          $i=1;
          $suma=0;
            while ($i<=100){
               if (($i%2)==0){
              $suma=$suma+$i;
       }
           $i++;}
           echo " la suma de todos los numeros pares del 1 al 100 son : $suma";
         ?>
  </body>
</html>
