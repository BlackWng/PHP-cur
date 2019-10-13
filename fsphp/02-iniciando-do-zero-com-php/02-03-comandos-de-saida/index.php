<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<h3> Hello, world!!!</h3>" ;
echo "<p>Olá Mundo!!!", " ", "<span class='tag'>#BoraProgramar!</span>", "</p>";

$hello = "Hello, world!!!";
$code = "<span class='tag'>#BoraProgramar!</span>";

echo "<p>$hello</p>";
echo '<p>$hello</p>';

$day = "dia";

echo  "<p>Falta 1 $day p/ o evento</p>";
echo "<p>Flatam 2 {$day}s p/ o evento</p>";

echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";
echo "<h4>".$hello." ".$code."</h4>";
?>

HTML
<h4><?=$hello;?><?=$code;?></h4>

<?php

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print $hello;
print $code;

print "<h3>{$hello} {$code}</h3>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$array = [
    "company" => "UpInside",
    "course" => 'FSPHP',
    "class" => "Comndos de saída"
];

print_r($array);
echo "<pre>", print_r($array, true), "</pre>";


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "Lorem ipsum dolor sit amet.";
$subtitle = "Donec placerat mollis nunc quis dapibus. Nulla ante sapien, posuere nec porta eu, consequat nec nibh. 
    Suspendisse dictum dapibus metus, vitae rhoncus massa interdum ac. Duis sit amet nisi facilisis, sollicitudin 
    ipsum vel, placerat justo. Curabitur pulvinar orci eget velit ornare suscipit. Quisque eu felis vitae nisi placerat 
    scelerisque condimentum sed tortor. Suspendisse hendrerit tincidunt sem eget dictum. Duis vulputate vitae sem at 
    facilisis. Ut pharetra placerat enim non efficitur. Duis a magna sed lorem placerat iaculis. 
    Aliquam eu placerat mi. Etiam lobortis risus nisl, a malesuada lacus rutrum eu. Mauris ut rhoncus dolor. 
    Aliquam pellentesque nulla vel feugiat vestibulum. Morbi tempor lobortis aliquam." ;

printf($article, $title, $subtitle);
echo sprintf($article, $title, $subtitle);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, aula <b>%s</b></p></h1></article>";
vprintf($company, $array);
echo vsprintf($company, $array);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump($array);

var_dump(
    $array,
    $code,
    $hello
);