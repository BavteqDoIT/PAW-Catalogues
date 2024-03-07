<?php require_once dirname(__FILE__).'/../config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Calculator</title>
</head>
<style>
    ol  {
        margin : 20px;
        padding : 10px 10px 10px 30px;
        border-radius : 5px;
        background-color : #f88;
        width : 300px;
    }

    div {
        margin : 20px;
        padding : 10px;
        border-radius : 5px;
        background-color : #ff0;
        width : 300px;
    }
</style>
<body>
    <form action="<?php print(_APP_URL);?>/app/credit_calc.php" method="post">
        <label for="id_years">Liczba lat: </label>
        <input id="id_years" type="text" name="y" value="<?php isset($y) ? print($y):''?>"><br>
        <label for="id_cost">Kwota kredytu: </label>
        <input id="id_cost" type="text" name="c" value="<?php isset($c) ? print($c):''?>"><br>
        <label for="id_percent">Oprocentowanie: </label>
        <input id="id_percent" type="text" name="p" value="<?php isset($p) ? print($p) : ''?>"><br>
        <input type="submit" value="Oblicz">
    </form>

    <?php
    if(isset($messages)) {
        if( count($messages) > 0) {
            echo '<ol>';
            foreach($messages as $key => $msg) {
                echo'<li>'.$msg.'</li>';
            }
            echo '</ol>';
        }
    }
    ?>

    <?php if(isset($result)) { ?>
    <div>
        <?php echo 'Wynik: '.$result; ?>
    </div>
    <?php } ?>
</body>
</html>