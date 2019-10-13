<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);
$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge"
];
$assoc = [
    'band_1' => "AC/DC",
    'band_2' => "Nirvana",
    'band_3' => "Alter Bridge"
];

/*echo "<h4>Array (size=", count($index), ")</h4>";
foreach ($index as $key => $value){
    echo "<p>{$key} => {$value}</p>";
}
echo " ";
echo " ";
echo "<h4>Array (size=", count($index), ")</h4>";
foreach ($assoc as $key => $value){
    echo "<p>{$key} => {$value}</p>";
}*/
array_unshift($index, "", "Pearl Jam");
$assoc = ["band_4" => "Pearl Jam", "band_5" => ""] + $assoc;
array_push($index, "");
$assoc += ['banda_6' => ""];

array_shift($index);
array_shift($assoc);
array_pop($assoc);
array_pop($index);

array_unshift($index, "");

$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump($index);
echo "<p></p>";
var_dump($assoc);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$bands = array_reverse($index);
$ban = array_reverse($assoc);

asort($bands);
asort($ban);

ksort($bands);
ksort($ban);

sort($bands);
rsort($bands);


var_dump($bands);
echo '<p></p>';
var_dump($ban);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump([
    array_keys($assoc),
    array_values($assoc)
]);

if(in_array("AC/DC", $assoc)){
    echo "<p>Cuz I'm back!</p>";
}

$arrToString = implode(", ", $assoc);
echo "<p>Eu gosto {$arrToString} e muitas outras</p>";
echo "<p>{$arrToString}</p>";

var_dump(explode(", ", $arrToString));

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name" => "Robson",
    "company" => "UpInside",
    "email" => "cursos@upinside.com.br"
];

$templete = <<<TPL
    <h3>{{name}}</h3>
    <h4>{{company}}</h4>
    <p><a href="{{email}}" title="Enviar email p/ {{email}}">Enviar E-mail</a></p>
TPL;

echo $templete;
echo str_replace(array_keys($profile), array_values($profile), $templete);

$replace = "{{" . implode("}}&{{", array_keys($profile)). "}}";
//var_dump(explode("&", $replace));

echo str_replace(explode("&", $replace), array_values($profile), $templete);
