<?php
require_once 'problema-01/ChangeString.php';
require_once 'problema-02/CompleteRange.php';
require_once 'problema-03/ClearPar.php';
?>


<h3>Problema 1 - ChangeString.php</h3>

<?php
$ChangeString = new ChangeString;

echo 'Entrada: 123 abcd*3  - Salida: ' . $ChangeString->build('123 abcd*3');
echo "<br/>";
echo 'Entrada: **Casa 52 - Salida: ' . $ChangeString->build('**Casa 52');
echo "<br/>";
echo 'Entrada: **Casa 52Z - Salida: ' . $ChangeString->build('**Casa 52Z');
echo "<br/>";
?>

<h3>Problema 2 - CompleteRange.php</h3>

<?php
$CompleteRange = new CompleteRange;

echo 'Entrada: [1, 2, 4, 5]  - Salida: ' . json_encode($CompleteRange->build([1, 2, 4, 5]));
echo "<br/>";
echo 'Entrada: [2, 4, 9] - Salida: ' . json_encode($CompleteRange->build([2, 4, 9]));
echo "<br/>";
echo 'Entrada: [55, 58, 60] - Salida: ' . json_encode($CompleteRange->build([55, 58, 60]));
echo "<br/>";
?>

<h3>Problema 3 - ClearPar.php</h3>

<?php
$ClearPar = new ClearPar;

echo 'Entrada: ()())()  - Salida: ' . $ClearPar->build('()())()');
echo "<br/>";
echo 'Entrada: ()(() - Salida: ' . $ClearPar->build('()(()');
echo "<br/>";
echo 'Entrada: )( - Salida: ' . $ClearPar->build(')(');
echo "<br/>";
echo 'Entrada: ((() - Salida: ' . $ClearPar->build('((()');
echo "<br/>";
echo 'Entrada: re((()re - Salida: ' . $ClearPar->build('re((()re');
echo "<br/>";
?>