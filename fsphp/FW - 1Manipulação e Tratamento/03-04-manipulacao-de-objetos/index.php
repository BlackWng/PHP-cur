<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$aprofile = [
    "name" => "Robson",
    "company" => "UpInside",
    "email" => "cursos@upinside.com.br"
];

$objprofile = (object)$aprofile;//Transforma um array em um objeto
//var_dump($objprofile);

echo "<p>{$aprofile["name"]} trabalha no {$aprofile["company"]}</p>";
echo "<p>{$objprofile->name} trabalha no {$objprofile->company}</p>";

$ceo = $objprofile;
unset($ceo->company);
var_dump($ceo);

$company = new stdClass();
$company->company = "UpInside";
$company->ceo = $ceo;
$company->manager = new stdClass();
$company->manager->name = 'Kaue';
$company->manager->email = $aprofile['name'];

var_dump($company);

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime")
]);

echo "<P></P>";

$expetion = new PDOException();

var_dump([
    "class" => get_class($expetion),
    "methods" => get_class_methods($expetion),
    "vars" => get_object_vars($expetion),
    "parent" => get_parent_class($expetion),
    "subclass" => is_subclass_of($expetion, "Exception")
]);












