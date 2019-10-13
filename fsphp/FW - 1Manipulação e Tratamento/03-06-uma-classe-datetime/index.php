<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

define("DATE_BR", "d/m/Y H:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime('2001-01-08');
$dateStatic = DateTime::createFromFormat(DATE_BR, "11/10/2019");

var_dump([
    $dateNow,
    $dateBirth,
    $dateStatic
]);
echo "<p> </p>";
var_dump([
    $dateNow->format(DATE_BR),
    $dateNow->format("d")
]);

echo "<p>Hoje é dia {$dateNow->format("d")} do mês {$dateNow->format("m")} e do ano de {$dateNow->format("Y")}</p>";

$newTmeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTmeZone);

var_dump([
    $newTmeZone,
    $newDateTime,
    $dateNow
]);

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2M5DT2H20M");
var_dump($dateInterval);



/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);
