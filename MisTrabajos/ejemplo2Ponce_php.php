<?php
$resultado = "";
$operador1= 0;
$operador2= 0;

if(isset($_POST["btnSumar"])){
  //sumar los operadores

$operador1 = intval($_POST["txtOperador1"]);
  $operador2 = intval($_POST["txtOperador2"]);
  $resultado="El resultado de sumar ".$operador1." y ".$operador2." es ".($operador1 + $operador2);
}
if(isset($_POST["btnRestar"])){
  //restar operadores
  $operador1 = intval($_POST["txtOperador1"]);
  $operador2 = intval($_POST["txtOperador2"]);
    $resultado="El resultado de restar ".$operador1." y ".$operador2." es ".($operador1 - $operador2);
}
if(isset($_POST["btnMultiplicar"])){
  //restar operadores
  $operador1 = intval($_POST["txtOperador1"]);
  $operador2 = intval($_POST["txtOperador2"]);
    $resultado="El resultado de la multiplicacion ".$operador1." y ".$operador2." es ".($operador1 * $operador2);
}
if(isset($_POST["btnDividir"])){
  //restar operadores
  $operador1 = intval($_POST["txtOperador1"]);
  $operador2 = intval($_POST["txtOperador2"]);
    $resultado="El resultado de la division ".$operador1." y ".$operador2." es ".($operador1 / $operador2);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculadora simple</title>
  </head>
  <body>
    <form action="ejemplo2php.php" method="post">
      <label for="txtOperador1">Operador Uno</label>
      <input type="number" max="100" min="-100" name="txtOperador1" value="<?php echo $operador1; ?>"
      id="txtOperador1"><br/>
      <label for="txtOperador2">Operador Dos</label>
      <input type="number" max="100" min="-100" name="txtOperador2" value="<?php echo $operador2; ?>"
      id="txtOperador2"><br/>
      <input type="submit" name="btnSumar" value="Sumar" id="btnSumar"/>
      &nbsp;
      <input type="submit" name="btnRestar" value="Restar" id="btnRestar"/>
      &nbsp;
      <input type="submit" name="btnMultiplicar" value="Multiplicar" id="btnMultiplicar"/>
      &nbsp;
      <input type="submit" name="btnDividir" value="Dividir" id="btnDividir"/>
    </form>
    <hr/>
    <div>
    <?php  echo $resultado; ?>
    </div>
  </body>
</html>
