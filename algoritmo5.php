<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>algoritmo 5 </title>
  </head>
  <body>
    <h3>algoritmo que muestre los numeros primos que haya del 1 al 100</h3>
    <?php

         $i = 1;

         while ( $i <=100){

           if ($i==1 or $i==2 or $i==3 or $i==5 or $i==7 or $i==11 or $i==13 or $i==17
               or $i==19 or $i==23 or $i==29 or $i==31 or $i==41 or $i==43 or $i==47
               or $i==53 or $i==59 or $i==61 or $i==67 or $i==71 or $i==73 or $i==79
               or $i==83 or $i==89 or $i==97 ){

        	echo "$i &nbsp";
          }
     $i++;
   }
      ?>
  </body>
</html>
