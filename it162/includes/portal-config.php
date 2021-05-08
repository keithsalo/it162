<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

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
        $title = "Keith's it162 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        break;

    case 'contactme.php':
        $title = "Keith's it162 Contact Page";
        $logo = 'fa-wechat';
        $PageID = 'Contact Keith';
        $logo_color = ' style="color:#0f0"';
        break;

    case 'fp/index.php':
        $title = "Keith's Final Project Page";
        $logo = 'fa-pencil-square';
        $PageID = 'Final Project';
        break;

    case 'big/index.php':
        $title = "Keith's BIG Project Page";
        $logo = 'fa-pencil-square';
        $PageID = 'BIG project';
        break;
        
    case 'aia.php':
        $title = "Keith's AIA Page";
        $logo = 'fa-pencil-square';
        $PageID = 'AIA';
        $logo_color = ' style="color:#00f"';
        break;

    case 'flowchart.php':
        $title = "Flowchart Page";
        $logo = 'fa-bar-chart-o';
        $PageID = 'Flowchart';
        break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}

    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Keith";
    

/* 
creating a function to generate links and keel the highlight on the current page 
<li><a href="index.php" class="selected">Welcome</a></li> 
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Keith</a></li>

*/

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?>
