<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$years,&$cost,&$percent){
    $years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $cost = isset($_REQUEST['cost']) ? $_REQUEST['cost'] : null;
    $percent = isset($_REQUEST['percent']) ? $_REQUEST['percent'] : null;
}

function validate(&$years,&$cost,&$percent,&$messages){
    if ( ! (isset($years) && isset($cost) && isset($percent))) {
        return false;
    }

    if ($years == "") {
    $messages [] = 'Nie podano okresu kredytowania';
    }

    if ($cost == "") {
    $messages [] = 'Nie podano kwoty kredytu';
    }

    if ($percent == "") {
    $messages [] = 'Nie podano oprocentowania kredytu';
    }

    if(count ($messages) != 0) return false;

    if (! is_numeric($years)) {
        $messages [] = 'Okres kredytowania nie jest liczbą całkowitą';
    }

    if (! is_numeric($cost)) {
        $messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
    }

    if (! is_numeric($percent)) {
        $messages [] = 'Oprocentowanie kredytu nie jest liczbą rzeczywistą';
    }

    if(count ($messages) != 0) return false;
    else return true;
}

function process(&$years,&$cost,&$percent,&$messages,&$result){
    global $role;
    
    $years = intval($years);
    $cost = intval($cost);
    $percent = floatval($percent);

    if(($cost > 650000 || $percent < 6.5) && $role != "admin"){
         $messages [] ='Tylko administrator może udzielić tak atrakcyjnego kredytu';
    } else {
        $result = ($cost * (1 + ($percent / 100))) / ($years * 12);
    }
}

$years = null;
$cost = null;
$percent = null;
$result = null;
$messages = array();

getParams($years, $cost, $percent);
if ( validate($years, $cost, $percent, $messages) ) {
    process($years, $cost, $percent, $messages, $result);
}

include 'credit_calc_view.php';