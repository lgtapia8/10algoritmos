<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>algoritmo 10 </title>
  </head>
  <body>
    <h3>algoritmo que muestre dos numeros y muestre todos los numeros desde el primero hasta el segundo . se debe controlar que los valores sean correctos.</h3>
      <form method="post">
        <label>Ingrese un numero: &nbsp &nbsp</label>
        <input type="number" name="num1" value="">
        <br>
        <br>
        <label>Ingrese otro numero: &nbsp</label>
        <input type="number" name="num2" value="">
        <br>
        <br>
        <input type="submit" name="Enviar" value="Consultar">
        <hr>
        <?php
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];

        while ($num1 <= $num2) {
          echo "$num1 &nbsp     ";

          $num1++;

        }

         ?>
         <hr>
       </form>
  </body>
</html>
