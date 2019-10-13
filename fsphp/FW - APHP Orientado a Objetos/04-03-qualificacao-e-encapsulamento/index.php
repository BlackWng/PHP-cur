<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__."/Classes/App/Template.php";
require __DIR__."/Classes/Web/Template.php";

$app = new \App\Template();
$web = new \Web\Template();

var_dump(
    $web,
    $web
);

use App\Template;
use Web\Template as WebTemplate;

$appUseTemplate = new Template();
$webUseTemplate = new WebTemplate();

$appUseTemplate->app = pow(125, (1/3));
$webUseTemplate->web = pow(2, 10);

var_dump($webUseTemplate, $appUseTemplate);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__."/Source/Qualifeld/User.php";

$user = new \Source\Qualifeld\User();

/*$user->firstName = "Ulisses";
$user->lastName = "C";*/

var_dump($user);




/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$robson = $user->setUser("Robson", "Leite", "cursos@upinside.com.br");

if(!$robson)
{
    echo "<p class='trigger error'>{$user->getError()}</p>";
}

var_dump($user);

$kaue = new \Source\Qualifeld\User();
$kaue->setUser("Kaue", "Cardoso", "cursos@upinside.com.br");

$uli = new \Source\Qualifeld\User();
$uli->setUser("Ulisses", "C", "tempestwos@outlook.com");

var_dump($kaue, $uli);


























