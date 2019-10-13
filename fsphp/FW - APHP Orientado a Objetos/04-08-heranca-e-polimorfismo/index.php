<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);

require __DIR__."/source/Inheritance/Event/Event.php";

$event = new Source\Inheritance\Event\Event(
    "workshop FSPHP",
    new DateTime("2019-12-09 18:30:00"),
    20.457,
    5
);

var_dump($event);

$event->register("Ana", "meldulus@outlook.com");
$event->register("Robson", "cursos@upinside.com.br");
$event->register("Gah", "cursos@upinside.com.br");
$event->register("Kaue", "cursos@upinside.com.br");
$event->register("Uli", "tempestwos@outlook.com");
$event->register("Rubens", "mel@outlook.com");
$event->register("Joana Bananna", "mel@outlook.com");


/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);

require __DIR__."/source/Inheritance/Adress.php";
require __DIR__."/source/Inheritance/Event/EventLive.php";

$adress = new \Source\Inheritance\Adress("Cidade Aleatória", "Rua dos Eventos", "2654");
$eventLive = new Source\Inheritance\Event\EventLive(
    "workshop FSPHP",
    new DateTime("2019-12-09 18:30:00"),
    20.457,
    5,
    $adress
);

var_dump($eventLive);

$eventLive->register("Ana", "meldulus@outlook.com");
$eventLive->register("Robson", "cursos@upinside.com.br");
$eventLive->register("Gah", "cursos@upinside.com.br");
$eventLive->register("Kaue", "cursos@upinside.com.br");
$eventLive->register("Uli", "tempestwos@outlook.com");
$eventLive->register("Rubens", "mel@outlook.com");
$eventLive->register("Joana Bananna", "mel@outlook.com");

/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

require __DIR__."/source/Inheritance/Event/EventOnline.php";

$eventOn = new Source\Inheritance\Event\EventOnline(
    "workshop FSPHP",
    new DateTime("2019-12-09 18:30:00"),
    20.457,
    5,
    "http:/upinside.com.br/aovivo"
);

var_dump($eventOn);

$eventOn->register("Ana", "meldulus@outlook.com");
$eventOn->register("Robson", "cursos@upinside.com.br");
$eventOn->register("Gah", "cursos@upinside.com.br");
$eventOn->register("Kaue", "cursos@upinside.com.br");
$eventOn->register("Uli", "tempestwos@outlook.com");
$eventOn->register("Rubens", "mel@outlook.com");
$eventOn->register("Joana Bananna", "mel@outlook.com");

