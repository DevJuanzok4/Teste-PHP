<?php 



$nome = $_POST['nome'];
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$soma = $numero1 + $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;
$subtracao = $numero1 - $numero2;


echo " <p> <center> o nome é: $nome <br> </p> <center>";
echo "<p>O primeiro numero: $numero1  <br></p>";
echo "<p>O segundo numero: $numero2  <br></p>";


echo "<p>O resultado da soma é: $soma <br></p>";
echo "<p>O resultado da multiplicação é: $multiplicacao <br></p>";
echo "<p>O resultado da divisão é: $divisao <br></p>";
echo "<p>O resultado da divisão é: $subtracao <br></p>";














?>