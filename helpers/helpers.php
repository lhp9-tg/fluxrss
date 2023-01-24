<?php

$numbers = [6,9,12];
$numberstring = ['six','nine','twelve'];

$_COOKIE['user']['article'] = str_replace($numberstring, $numbers, $_COOKIE['user']['article']);

function rss_reader($rss_feed) // Fonction qui prend en paramètre l'URL du flux RSS et l'image de la console
{

    if (isset($_COOKIE['user']['article'])) {
        $maxarticle = $_COOKIE['user']['article'];
    }
    else {
        $maxarticle = 6;
    }

    $rss = simplexml_load_file($rss_feed);
    $i = 1;

    foreach ($rss->channel->item as $item) {
        if ($i <= $maxarticle) {
            $i++;
            echo '
            <div class="container mx-0">
            <div class="row actus my-2 mx-0">

                <div class="actus-img col-4"><img src="../assets/img/news-paper.png" alt=""></div>
                <div class="actus-article col-8">
                <p class="text-center"> <a class="title" href="' . $item->link . '" target="_blank">' . $item->title . '</a></p>
                    <p class="date text-center">' . $item->pubDate . '</p>
                </div>
            </div>
            </div>
            <hr>
            ';
        } else {
            break;
        }
    }
}

function displaynews($param) {

    foreach ($param as $flux) {
        if ($flux === 'actualites') { ?>
            <h2 class="text-center bg-dark text-white rounded my-5" id="actualites">Actualités</h2>
            <?php
            rss_reader('https://www.lemonde.fr/rss/une.xml');
        } elseif ($flux === 'culture') { ?>
            <h2 class="text-center bg-dark text-white rounded my-5" id="actualites">Culture</h2>
            <?php
            rss_reader('https://www.lemonde.fr/culture/rss_full.xml');
        } elseif ($flux === 'pixels') { ?>
            <h2 class="text-center bg-dark text-white rounded my-5" id="actualites">Pixels</h2>
            <?php
            rss_reader('https://www.lemonde.fr/pixels/rss_full.xml');
        } elseif ($flux === 'economie') { ?>
            <h2 class="text-center bg-dark text-white rounded my-5" id="actualites">Economie</h2>
            <?php
            rss_reader('https://www.lemonde.fr/economie/rss_full.xml');
        } elseif ($flux === 'sport') { ?>
            <h2 class="text-center bg-dark text-white rounded my-5" id="actualites">Sport</h2>
            <?php
            rss_reader('https://www.lemonde.fr/sport/rss_full.xml');
        } elseif(empty($param)) {
            echo 'Aucun flux RSS sélectionné';
        } else {
            header('Location: ../404.php');
        }
    }
}

function navbarlist($param) {
    
    foreach ($param as $flux) {
        if ($flux === 'actualites') { ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../controllers/pages-controller.php?actualites">Actualités</a>
            </li>
            <?php
        } elseif ($flux === 'culture') { ?>
            <li class="nav-item">
                <a class="nav-link" href="../controllers/pages-controller.php?culture">Culture</a>
            </li>
            <?php
        } elseif ($flux === 'pixels') { ?>
            <li class="nav-item">
                <a class="nav-link" href="../controllers/pages-controller.php?pixels">Pixels</a>
            </li>
            <?php
        } elseif ($flux === 'economie') { ?>
            <li class="nav-item">
                <a class="nav-link" href="../controllers/pages-controller.php?economie">Economie</a>
            </li>
            <?php
        } elseif ($flux === 'sport') { ?>
            <li class="nav-item">
                <a class="nav-link" href="../controllers/pages-controller.php?sport">Sport</a>
            </li>
            <?php
        }
    } ?>
    <li class="nav-item">
        <a class="nav-link" href="../controllers/parameters-controller.php"><img src="../assets/img/adjust.png" alt=""></a>
    </li>
    <?php
}

?>