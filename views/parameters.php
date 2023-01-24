<h1>Paramètres</h1>

<form method='GET' action=''>

    <fieldset>
        <legend>Veuillez choisir 3 flux à suivre</legend>

            
            <input type="checkbox" name="flux1" value="actualites" id="actualites" <?php if (isset($_COOKIE['user']['flux']) && str_contains($_COOKIE['user']['flux'] , 'actualites')) echo 'checked' ?> ><label for='actualites'> Actualités </label><br>
            <input type="checkbox" name="flux2" value="economie" id="economie" <?php if (isset($_COOKIE['user']['flux']) && str_contains($_COOKIE['user']['flux'] , 'economie')) echo 'checked' ?> ><label for='economie'> Economie </label><br>
            <input type="checkbox" name="flux3" value="culture" id="culture" <?php if (isset($_COOKIE['user']['flux']) && str_contains($_COOKIE['user']['flux'] , 'culture')) echo 'checked' ?> ><label for='culture'> Culture </label><br>
            <input type="checkbox" name="flux4" value="sport" id="sport" <?php if (isset($_COOKIE['user']['flux']) && str_contains($_COOKIE['user']['flux'] , 'sport')) echo 'checked' ?> ><label for='sport'> Sport </label><br>
            <input type="checkbox" name="flux5" value="pixels" id="pixels" <?php if (isset($_COOKIE['user']['flux']) && str_contains($_COOKIE['user']['flux'] , 'pixels')) echo 'checked' ?> ><label for='pixels'> Pixels </label><br>

            <input type="submit" name='input1' value="Choisir">
    </fieldset>
</form>

<form method='POST' action=''>

    <fieldset>
        <legend>Choisir votre mode d'affichage</legend>

            <input type="radio" name="mode" value="light" id="light" <?php if (isset($_COOKIE['user']) && ($_COOKIE['user']['mode'] === 'light'))  echo 'checked' ?>><label for="light"> Affichage clair </label><br>
            <input type="radio" name="mode" value="dark" id="dark" <?php if (isset($_COOKIE['user']) && ($_COOKIE['user']['mode'] === 'dark'))  echo 'checked' ?>><label for="dark"> Affichage sombre </label><br>

            <input type="submit" name='input2' value="Choisir">
    </fieldset>
</form>

<form method='POST' action=''>

    <fieldset>
        <legend>Nombre d'articles affichés par page</legend>

            <input type="radio" name="article" value="six" id="six" <?php if (isset($_COOKIE['user']) && ($_COOKIE['user']['article'] === 'six')) echo 'checked' ?>><label for="light"> 6 articles / pages </label><br>
            <input type="radio" name="article" value="nine" id="nine" <?php if (isset($_COOKIE['article']) && ($_COOKIE['user']['article'] === 'nine')) echo 'checked' ?>><label for="nine"> 9 articles / pages </label><br>
            <input type="radio" name="article" value="twelve" id="twelve" <?php if (isset($_COOKIE['article']) && ($_COOKIE['user']['article'] === 'twelve')) echo 'checked' ?>><label for="twelve"> 12 articles / pages </label><br>

            <input type="submit" name='input3' value="Choisir">
    </fieldset>
</form>