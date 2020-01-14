<?php
echo('Welke Operator wil je toepassen? (+,-)' . PHP_EOL);
$opr = readline('');
echo('Wat is je eerste getal?' . PHP_EOL);
$num1 = readline('');
echo('Wat is je tweede getal?' . PHP_EOL);
$num2 = readline('');
if($opr == '+'){
    echo('Uw resultaat is: ' . ($num1 + $num2));
}
else if($opr == '-'){
    echo('Uw resultaat is: ' . ($num1 - $num2));
}

