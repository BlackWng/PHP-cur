<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operatorA = 5;
$operators = [
    "a += 5" => ($operatorA += 5),
    "a -= 5" => ($operatorA -= 5),
    "a *= 5" => ($operatorA *= 5),
    "a /= 5" => ($operatorA /= 5)
];

foreach ($operators as $key => $value){
    echo "<h5>{$key} => {$value}</h5>";
}
echo ' ';

$incrementA = 5;
$incrementB = 5;
$increment = [
    'pós-incremento' => $incrementA++,
    'res-incremento' => $incrementA,
    'pré-incremento' => ++$incrementA,
    'pós-decremento' => $incrementB--,
    'res-decremento' => $incrementB,
    'pré-decremento' => --$incrementB,
];

var_dump($increment);

/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$relatedA = 5;
$relatedB = "5";
$relatedC = 10;
$related = [
    "a == b" => ($relatedA == $relatedB),
    "a === b" => ($relatedA === $relatedB),//tipo de dados
    "a != b" => ($relatedA != $relatedB),
    "a !== b" => ($relatedA !== $relatedB),//tipo de dados
    "a > c" => ($relatedA > $relatedC),
    "a < c" => ($relatedA < $relatedC),
    "a >= c" => ($relatedA >= $relatedC),
    "a <= c" => ($relatedA <= $relatedC)
];

var_dump($related);

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;
$logic = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "!a" => (!$logicA),
    "!b" => (!$logicB)
];

var_dump($logic);

/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 6;
$calcB = 10;
$calc = [
    "a + b" => ($calcB + $calcA),
    "a - b" => ($calcB - $calcA),
    "a * b" => ($calcB * $calcA),
    "a / b" => ($calcB / $calcA),
    "a % b" => ($calcB % $calcA),
];
var_dump($calc);


