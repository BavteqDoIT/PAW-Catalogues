{{extends file="../templates/main.tpl"}}

{block name=footer}przykładowa treść stopki wpisana do szablonu głównego z szablonu kalkulatora {/block}

{block name=content}
    
<h2>Prosty kalkulator</h2>
    <form action="{$app_url}/app/credit_calc.php" method="post" class="pure-form pure-form-stacked">
    <fieldset>
        <label for="id_years">Liczba lat: </label>
        <input id="id_years" type="text" placeholder="Np.'8'" name="years" value="{$form['years']}"><br>

        <label for="id_cost">Kwota kredytu: </label>
        <input id="id_cost" type="text" placeholder="Np. '400000'" name="cost" value="{$form['cost']}"><br>

        <label for="id_percent">Oprocentowanie: </label>
        <input id="id_percent" type="text" placeholder="Np. '6.76'" name="percent" value="{$form['percent']}"><br>
    </fieldset>

    <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
    </form>

    <div class="messages">

    {if isset($messages) }
        {if count($messages) > 0 }
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
            {foreach $messages as $msg}
            {strip}
                <li>{$msg}</li>
            {/strip}
            {/foreach}
            </ol>
        {/if}
    {/if}

    {if isset($infos) }
        {if count($infos) > 0 }
            <h4>Informacje: </h4>
            <ol class="inf">
            {foreach $infos as $msg}
            {strip}
                <li>{$msg}</li>
            {/strip}
            {/foreach}
            </ol>
        {/if}
    {/if}

    {if isset($result)} 
        <h4>Wynik</h4>
        <p class="res">
        {$result}
        </p>
    {/if}

    </div>

{/block}

