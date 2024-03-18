<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Calculator</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<div style="width:90%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<body>
    <form action="<?php print(_APP_ROOT);?>/app/credit_calc.php" method="post" class="pure-form pure-form-stacked">
    <legend>Credit Calculator</legend>
    <fieldset>
        <label for="id_years">Liczba lat: </label>
        <input id="id_years" type="text" name="years" value="<?php isset($years) ? print($years):''?>"><br>
        <label for="id_cost">Kwota kredytu: </label>
        <input id="id_cost" type="text" name="cost" value="<?php isset($cost) ? print($cost):''?>"><br>
        <label for="id_percent">Oprocentowanie: </label>
        <input id="id_percent" type="text" name="percent" value="<?php isset($percent) ? print($percent) : ''?>"><br>
    <input type="submit" value="Oblicz" class="pure-button pure-button-primary">
    </form>

    <?php
    if(isset($messages)) {
        if(count($messages) > 0) {
            echo '<ol style="margin-top: 1em; padding: 1em; border-radius: 1em; background-color: #f88; width:25em;">';
            foreach($messages as $key => $msg) {
                echo'<li>'.$msg.'</li>';
            }
            echo '</ol>';
        }
    }
    ?>

    <?php if(isset($result)) { ?>
    <div style="margin-top: 1em; padding: 1em; border-radius: 1em; background-color: #ff0; width:25em;">
        <?php echo 'Wynik: '.$result; ?>
    </div>
    <?php } ?>

    </div>

</body>
</html>
