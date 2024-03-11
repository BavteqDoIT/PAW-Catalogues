<?php
require_once dirname(__FILE__).'/../config.php';

$y = $_REQUEST ['y'];
$c = $_REQUEST ['c'];
$p = $_REQUEST ['p'];

if (!(isset($y) && isset($c) && isset($p))) {
    $messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ($y == "") {
    $messages [] = 'Nie podano okresu kredytowania';
}
if ($c == "") {
    $messages [] = 'Nie podano kwoty kredytu';
}
if ($p == "") {
    $messages [] = 'Nie podano oprocentowania kredytu';
}

if (empty($messages)) {
    if (! is_numeric($y)) {
        $messages [] = 'Okres kredytowania nie jest liczbą całkowitą';
    }

    if (! is_numeric($c)) {
        $messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
    }

    if (! is_numeric($p)) {
        $messages [] = 'Oprocentowanie kredytu nie jest liczbą rzeczywistą';
    }
}

if (empty($messages)) {
    $y = intval($y);
    $c = intval($c);
    $p = floatval($p);

    $result = ($c * (1 + ($p / 100))) / ($y * 12);
}

include 'credit_calc_view.php';