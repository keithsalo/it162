<?php

/*
big-config.php

Used to store all of our it162 configuration information

*/



//prevents data from being sent early
ob_start();
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Web Dev Examples by Keith Salo";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
        break;

    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa-square'; 
        $PageID = 'Flexbox Research'; 
        break;

    case 'galleries.php':
        $title = "Galleries and Sliders";
        $logo = 'fa-camera-retro';
        $PageID = 'Galleries and Sliders';
        break;

    case 'map.php':
        $title = "Google Map";
        $logo = 'fa-map-marker ';
        $PageID = 'Google Map';
        break;
        
    case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa-calendar';
        $PageID = 'Google Calendar';
        $logo_color = ' style="color:#00f"';
        break;

    case 'youtube.php':
        $title = "Google Youtube";
        $logo = 'fa-youtube';
        $PageID = 'Google Youtube';
        break;

    case 'shoppingcarts.php':
        $title = "Shopping Cart Research";
        $logo = 'fa-shopping-cart';
        $PageID = 'Shopping Cart Research';
        break;
        
    case 'siteapp.php':
        $title = "Responsive Site vs Native App.";
        $logo = 'fa-globe';
        $PageID = 'Responsive Site vs Native App.';
        break;

    case 'webcam.php':
        $title = "Live Web Cameras";
        $logo = 'fa-youtube-play';
        $PageID = 'Live Web Cameras';
        break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}



?>
