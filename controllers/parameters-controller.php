<?php

if (isset($_POST['mode'])) {
    
}
elseif (isset($_COOKIE['user'])) {
    
}

$flux1 = 'https://www.lemonde.fr/rss/une.xml';
$flux2 = 'https://www.lemonde.fr/economie/rss_full.xml';
$flux3 = 'https://www.lemonde.fr/culture/rss_full.xml';
$flux4 = 'https://www.lemonde.fr/sport/rss_full.xml';
$flux5 = 'https://www.lemonde.fr/pixels/rss_full.xml';


// Choix des flux

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['input1'])) {
        $fluxchosen = [];
        if (isset($_GET['flux1'])) {
            $fluxchosen1 = $_GET['flux1'];
            array_push($fluxchosen, $fluxchosen1);
        }
        if (isset($_GET['flux2'])) {
            $fluxchosen2 = $_GET['flux2'];
            array_push($fluxchosen, $fluxchosen2);
        }
        if (isset($_GET['flux3'])) {
            $fluxchosen3 = $_GET['flux3'];
            array_push($fluxchosen, $fluxchosen3);
        }
        if (isset($_GET['flux4'])) {
            $fluxchosen4 = $_GET['flux4'];
            array_push($fluxchosen, $fluxchosen4);
        }
        if (isset($_GET['flux5'])) {
            $fluxchosen5 = $_GET['flux5'];
            array_push($fluxchosen, $fluxchosen5);
        }

        if (count($fluxchosen) === 0) {
            echo 'Aucun flux choisit. Vous devez choisir 3 flux';
        }
        elseif (count($fluxchosen) > 3) {
            echo 'Vous avez choisi trop de flux. Vous devez choisir 3 flux';
        }
        elseif (count($fluxchosen) < 3) {
            echo 'Vous n\'avez pas choisi assez de flux. Vous devez choisir 3 flux';
        }
        else {
            echo 'Vous avez choisi les flux suivants : <br>';
            foreach ($fluxchosen as $flux) {
                echo $flux . ' <br>';
            }
        }
    }
}

// Dark mode

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['input2'])) {
        if (!isset($_POST['mode'])) {
            echo 'Vous devez choisir un mode d\'affichage';
        }
        else {
            $mode = $_POST['mode'];
            setcookie('user[mode]', $mode, time() + 24*3600);
            header ('Location: ../controllers/parameters-controller.php');
        }
    }
}

// Articles par page

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['input3'])) {
        if (!isset($_POST['article'])) {
            echo 'Vous devez choisir un nombre d\'articles';
        }
        else {
            $article = $_POST['article'];
            setcookie('user[article]', $article, time() + 24*3600);
            header ('Location: ../controllers/parameters-controller.php');
        }
    }
}

require_once '../views/parameters.php';
?>