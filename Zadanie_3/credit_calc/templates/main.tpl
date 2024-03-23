<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php out($page_description); if (!isset($page_description)){ ?> Opis domyślny ... <?php } ?>">
    <title>{$page_title|default:"Tytuł domyślny"}</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="{$app_url}/css/style.css">
</head>
<body>

<div class="header">
    <h1>{$page_title|default:"Tytuł domyślny"}</h1>
    <h1>{$page_header|default:"Tytuł domyślny"}</h1>
    <p>
        {$page_description|default:"Opis domyślny"}
    </p>
</div>

<div class = "content">
{block name=content} Domyślna treść zawartości {/block}
</div><!-- content -->

<div class="footer">
    <p>
{block name=name} Domyślna treść stopki {/block}
    </p>
    <p>
        Widok oparty na stylach <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a> (autor Bartosz Adamek)
    </p>
</div>
</body>
</html>