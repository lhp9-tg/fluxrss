<?php
function rss_reader($rss_feed) // Fonction qui prend en paramètre l'URL du flux RSS et l'image de la console
{
    $rss = simplexml_load_file($rss_feed);

    foreach ($rss->channel->item as $item) {
      

        echo '
        <div class="container">
         <div class="row actus my-2 ">

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
?>



<?php

include('../views/home.php');
?>