<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$string = "O último show do AC/DC foi incrível! ";
var_dump([
    'string' => $string,
    "Strlen" => strlen($string),
    "mb strlen" => mb_strlen($string),
    "subtrlen" => substr($string, 9),
    "mb subtrlen" => mb_substr($string, 9),
    "strtoupper" => strtoupper($string),
    "mb strtoupper" => mb_strtoupper($string),
]);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbstring = $string;

var_dump([
    "mb strtoupper" => mb_strtoupper($mbstring),
    "mb strtolower" => mb_strtolower($mbstring),
    "mb convert_case UPPER" => mb_convert_case($mbstring, MB_CASE_UPPER),
    "mb convert_case LOWER" => mb_convert_case($mbstring, MB_CASE_LOWER),
    "mb convert_case TITLE" => mb_convert_case($mbstring, MB_CASE_TITLE),
]);


/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbReplace = $mbstring . 'Fui, iria novemente, foi fodadadicamente incrível!!!.';

var_dump([
    "mb strlen" => mb_strlen($mbReplace),
    "mb pos" => mb_strpos($mbReplace, ", "),
    "mb strrpos" => mb_strripos($mbReplace, ', '),
    "mb substr" => mb_substr($mbReplace, 40 + 2, 14),
    "mb strstr" => mb_strstr($mbReplace, ', ',true),
    "mb strrchr" => mb_strrchr($mbReplace, ',', true)
]);

$mbReplace = $string;

echo "<p>", $string, '</p>';
echo  '<p>', str_replace('AC/DC', 'Nirvana', $mbReplace),'</p>';
echo  '<p>', str_replace(['AC/DC', "foi", 'último'], ['Nirvana', "ÉPICOOOOOOOO!!!!!!"], $mbReplace),'</p>';

$article = <<<ROCK
    <article>
    <h4>event</h4>
    <p>desc</p>
    </article>
ROCK;
$articleData = [
    "event" => "Rock in RIO",
    "desc" => $mbReplace
];

echo str_replace(array_keys($articleData), array_values($articleData), $article);



/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$endPoint = "name=Robson&email=cursos@upinside.com.br";
mb_parse_str($endPoint, $parseEndPoint);

var_dump([
    $endPoint,
    $parseEndPoint,
    (object) $parseEndPoint
]);
















