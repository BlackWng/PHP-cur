<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Joana";
$userLastName = "Banana";
echo "<h3>{$userFirstName} {$userLastName}</h3>";

$user_firt_name = $userFirstName;
$user_last_name = $userLastName;
echo "<h3>{$user_firt_name} {$user_last_name}</h3>";

$userAge = 32;
echo "<h3>{$user_firt_name} {$user_last_name},<p> idade é {$userAge}</p></h3>";

//Variável variável

$company = "UpInside";
$$company = "Treinamentos";

echo "<h3>{$company}: {$UpInside}</h3>";

$calcA = 10;
$calcB = 20;
$calcB = &$calcA;
$calcB = 50;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);
$true = true;
$false = false;

var_dump($true, $false);

$bestAge = ($userAge > 50);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = array();
$e = null;
var_dump($a ,$b ,$c ,$d ,$e);

if($a || $b || $c || $d || $e){
    var_dump(true);
}
else{
    var_dump(false);
}

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call User Function!</h1></article>";
$codeClear = call_user_func("strip_tags", $code);

echo $code;
echo $codeClear;

$codeMore = function ($code){
    var_dump($code);
};
$codeMore('#BoraProgramar');


/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Hello, world!!!";
$array = [$string];
$object = new StdClass();
$object -> hello = $string;
$null = null;
$int = 322;
$float = 3.14159295;

var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);

