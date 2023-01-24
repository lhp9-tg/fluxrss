<?php
if (isset($_COOKIE['user'])) {
    $mode = $_COOKIE['user']['mode'];
}
else {
    $mode = 'light';
}

foreach ($rss->channel->item as $item) {
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
    }

}


require_once('../helpers/helpers.php');

include('../views/home.php');

?>