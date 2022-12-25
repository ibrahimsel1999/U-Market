<?php

//routes
include 'connect.php';
$tpl='includes/templates/'; //templates Dire
$lang='includes/lang/';
$func='includes/functions/'; //functions Dir
$css="layout/css/"; //CSS dire
$js="layout/js/"; //js dire


//include the important files
include $func . 'functions.php';
include $lang .'en.php';
include $tpl . 'header.php';

if(!isset($noNavbar)){ include $tpl . 'navbar.php';}

