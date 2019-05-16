<?php
$n=$_GET["w"];

echo "O Preço é de:".number_format($n, 2);

$n += $n*30/100;

echo "<br/>"."O Resultado da procentagem é :".number_format($n, 2);

$a=3;
$b=&$a;
$b= 5;
echo "<br> $a"
?>