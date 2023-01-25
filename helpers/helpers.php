<?php

function navbarlist($param)
{

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

function rss_reader($rss_feed) // Fonction qui prend en paramètre l'URL du flux RSS et l'image de la console
{

    if (isset($_COOKIE['user']['article'])) {
        $numbers = [6, 9, 12];
        $numberstring = ['six', 'nine', 'twelve'];
        $_COOKIE['user']['article'] = str_replace($numberstring, $numbers, $_COOKIE['user']['article']);
        $maxarticle = $_COOKIE['user']['article'];
    } else {
        $maxarticle = 6;
    }

    $rss = simplexml_load_file($rss_feed);
    $i = 1;

    foreach ($rss->channel->item as $item) {
        if ($i <= $maxarticle) {
            $i++;

            if ($rss->channel->link == 'https://www.lemonde.fr/rss/une.xml') {

                $originalDate = $item->pubDate;
                $newDate = date('d/m/Y H:i', strtotime($originalDate));

                echo '
            <div class="container mx-auto">
            <div class="row actus my-2 mx-0">

                <div class="actus-img col-4"><img src="../assets/img/news-paper.png" alt=""></div>
                <div class="actus-article col-8">
                <p class="text-center"> <a class="title" href="' . $item->link . '" target="_blank">' . $item->title . '</a></p>
                    <p class="date text-center">' . $newDate . '</p>
                </div>
            </div>
            </div>
            <hr>
            ';
            } elseif ($rss->channel->link == 'https://www.lemonde.fr/culture/rss_full.xml') {

                $originalDate = $item->pubDate;
                $newDate = date('d/m/Y H:i', strtotime($originalDate));
                echo '
                <div class="container mx-auto">
                <div class="row culture my-2 mx-0">

                    <div class="actus-img col-4"><img src="../assets/img/culture.png" alt=""></div>
                    <div class="actus-article col-8">
                    <p class="text-center"> <a class="title" href="' . $item->link . '" target="_blank">' . $item->title . '</a></p>
                        <p class="date text-center">' . $newDate . '</p>
                    </div>
                </div>
                </div>
                <hr>
                ';
            } elseif ($rss->channel->link == 'https://www.lemonde.fr/pixels/rss_full.xml') {

                $originalDate = $item->pubDate;
                $newDate = date('d/m/Y H:i', strtotime($originalDate));
                echo '
                <div class="container mx-auto">
                <div class="row pixels my-2 mx-0">

                    <div class="actus-img col-4"><img src="../assets/img/parametres-web.png" alt=""></div>
                    <div class="actus-article col-8">
                    <p class="text-center"> <a class="title" href="' . $item->link . '" target="_blank">' . $item->title . '</a></p>
                        <p class="date text-center">' . $newDate . '</p>
                    </div>
                </div>
                </div>
                <hr>
                ';
            } elseif ($rss->channel->link == 'https://www.lemonde.fr/economie/rss_full.xml') {

                $originalDate = $item->pubDate;
                $newDate = date('d/m/Y H:i', strtotime($originalDate));
                echo '
                <div class="container mx-auto">
                <div class="row economie my-2 mx-0">

                    <div class="actus-img col-4"><img src="../assets/img/croissance.png" alt=""></div>
                    <div class="actus-article col-8">
                    <p class="text-center"> <a class="title" href="' . $item->link . '" target="_blank">' . $item->title . '</a></p>
                        <p class="date text-center">' . $newDate . '</p>
                    </div>
                </div>
                </div>
                <hr>
                ';
            } elseif ($rss->channel->link == 'https://www.lemonde.fr/sport/rss_full.xml') {

                $originalDate = $item->pubDate;
                $newDate = date('d/m/Y H:i', strtotime($originalDate));

                echo '
                <div class="container mx-auto">
                <div class="row sport my-2 mx-0">

                    <div class="actus-img col-4"><img src="../assets/img/sports-de-balles.png" alt=""></div>
                    <div class="actus-article col-8">
                    <p class="text-center"> <a class="title" href="' . $item->link . '" target="_blank">' . $item->title . '</a></p>
                        <p class="date text-center">' . $newDate . '</p>
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
}

function displaycategory($param)
{

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
        } elseif (empty($param)) {
            echo 'Aucun flux RSS sélectionné';
        } else {
            header('Location: ../404.php');
        }
    }
}

function displayhome($param)
{
    if (isset($_COOKIE['user']['article'])) {
        $numbers = [6, 9, 12];
        $numberstring = ['six', 'nine', 'twelve'];
        $_COOKIE['user']['article'] = str_replace($numberstring, $numbers, $_COOKIE['user']['article']);
        $maxarticle = $_COOKIE['user']['article'];
    } else {
        $maxarticle = 6;
    }

    $flux1 = [
        'actualites' => 'https://www.lemonde.fr/rss/une.xml'
    ];
    $flux2 = [
        'culture' => 'https://www.lemonde.fr/culture/rss_full.xml'
    ];
    $flux3 = [
        'pixels' => 'https://www.lemonde.fr/pixels/rss_full.xml'
    ];
    $flux4 = [
        'economie' => 'https://www.lemonde.fr/economie/rss_full.xml'
    ];
    $flux5 = [
        'sport' => 'https://www.lemonde.fr/sport/rss_full.xml'
    ];

    $allflux = $flux1 + $flux2 + $flux3 + $flux4 + $flux5;

    //Associe les adresses des flux RSS aux catégories de $param
    $flux = array_intersect_key($allflux, array_flip($param));

    $homeflux = [];

    foreach ($flux as $value) {
        $rss = simplexml_load_file($value);
        foreach ($rss->channel->item as $item) {
            $homeflux[] = $item;
        }
    }

    //Trie les articles par date
    usort($homeflux, function ($a, $b) {
        return strtotime($b->pubDate) - strtotime($a->pubDate);
    });

    $i = 1;
    $testdate = [];

    foreach ($homeflux as $item) {
        if ($i <= $maxarticle) {
            $i++;

            $originalDate = $item->pubDate;
            $newDate = date('d/m/Y H:i', strtotime($originalDate));
            
            array_push($testdate, $newDate);

            if (in_array($newDate, $testdate)) {
                continue;
            }

            echo '
            <div class="container mx-auto">
            <div class="row actus my-2 mx-0">

                <div class="actus-img col-4"><img src="../assets/img/news-paper.png" alt=""></div>
                <div class="actus-article col-8">
                <p class="text-center"> <a class="title" href="' . $item->link . '" target="_blank">' . $item->title . '</a></p>
                    <p class="date text-center">' . $newDate . '</p>
                </div>
            </div>
            </div>
            <hr>
            ';
            
        }
    }
}

?>