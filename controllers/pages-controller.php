<?php
function rss_reader($rss_feed) // Fonction qui prend en paramètre l'URL du flux RSS et l'image de la console
{
    $rss = simplexml_load_file($rss_feed);
    
    foreach ($rss->channel->item as $item) {
      

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
    }
}
include('../views/pages.php');

if (isset($_GET['actualites'])) {
    rss_reader('https://www.lemonde.fr/rss/une.xml');
} elseif (isset($_GET['culture'])) {
    rss_reader('https://www.lemonde.fr/culture/rss_full.xml');
} elseif (isset($_GET['pixels'])) {
    rss_reader('https://www.lemonde.fr/pixels/rss_full.xml');
} elseif (isset($_GET['economie'])) {
    rss_reader('https://www.lemonde.fr/economie/rss_full.xml');
} elseif (isset($_GET['sport'])) {
    rss_reader('https://www.lemonde.fr/sport/rss_full.xml');
} elseif(empty($_GET)) {
    header('Location: ../controllers/home-controller.php');
} else {
    header('Location: ../404.php');
}
?>