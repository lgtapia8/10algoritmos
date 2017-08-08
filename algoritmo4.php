<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>algoritmo 4 </title>
  </head>
  <body>
    <h3>algoritmo que muestre los impares que haya del 1 AL 100</h3>
    <?php

         $i = 1;

         while ( $i <=100){

           if (($i %2 )!=0){

        	echo $i ;

     }
     if ($i<=100){


     echo "&nbsp";
}
   $i++;
 }
      ?>
  </body>
</html>
