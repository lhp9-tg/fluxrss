<?php
if (isset($_COOKIE['user'])) {
    $mode = $_COOKIE['user']['mode'];
}
else {
    $mode = 'light';
}

require_once('../helpers/helpers.php');

include('../views/home.php');
?>