<?php
$nome=$_GET["nome"];
$sobrenome=$_GET["sobrenome"];
$raiz=$_GET["raiz"];
$skol=sqrt($raiz);
echo $nome.$sobrenome;
echo "A Raiz quadrada de $raiz é:".number_format($skol,2);
echo "<br>Você cadastro a Parada";
?>