<?php
$Numero01 = $_POST['N1'];
$Numero02 = $_POST['N2'];
$operacao = $_POST['operacao'];
//$Soma = $Nome01 + $Nome02;
//$Div = $Nome01 / $Nome02;
//$Mult = $Nome01 * $Nome02;
//$Sub = $Nome01 - $Nome02;

if ($operacao == "+"):

echo "O resultado da soma é ", ($Numero01 + $Numero02);

elseif ($operacao == "*"):

echo "O resultado da multiplicacão é ", ($Numero01 * $Numero02);

elseif ($operacao == "-"):
echo "O resultado da subtração é ", ($Numero01 - $Numero02);


else:
echo "O resultado da divisão é ", ($Numero01 / $Numero02);


endif;

?>
