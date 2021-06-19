<?php

/*
portal-config.php

Used to store all Kate's configuration information

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
        $title = "Home";
        $logo = 'fa-home';
        $PageID = 'Kate Stannard';
        $select = 'selected';
        $logo_color = ' style="color:#4402cf"';  
        break;

    case 'contactkate.php':
        $title = "Contact Kate";
        $logo = 'fa-square'; 
        $select = 'selected';
        $PageID = 'Contact Kate'; 
        break;

    case 'fiction.php':
        $title = "fiction";
        $logo = 'fa-camera-retro';
        $select = 'selected';
        $PageID = 'fiction';
        break;

    case 'poetry.php':
        $title = "Poetry";
        $logo = 'fa-map-marker ';
        $select = 'selected';
        $PageID = 'Poetry';
        break;
        

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}



?>
