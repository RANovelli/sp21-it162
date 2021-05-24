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

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Web Dev Examples by Ryan Novelli";
        $logo = 'fa-home';
        $logo_color = '';
        $PageID = "Web Client Questionnaire";
    break;
        
    case 'flexbox.php':
    $title = "Flexbox Research";
    $logo = 'fa-home';
    $logo_color = '';
    $PageID = "Flexbox Research";    
    break;
    
    case 'galleries.php':
    $title = "Galleries Research";
    $logo = 'fa-home';
    $logo_color = '';
    $PageID = "Galleries Research";    
    break;
        
    case 'map.php':
    $title = "Google Map";
    $logo = 'fa-home';
    $logo_color = '';
    $PageID = "Google Map";    
    break;
        
    case 'calendar.php':
    $title = "Google Calendar";
    $logo = 'fa-home';
    $logo_color = '';
    $PageID = "Google Calendar";    
    break;    
    
    case 'youtube.php':
        $title = "YouTube Video";
        $logo = 'fa-home';
        $logo_color = '';
        $PageID = "YouTube Video";
    break;
        
    case 'shoppingcarts.php':
        $title = "Shopping Carts Research";
        $logo = 'fa-home';
        $logo_color = '';
        $PageID = "Shopping Carts Research";
    break;
        
    case 'siteapp.php':
        $title = "Responsive vs Mobile Research";
        $logo = 'fa-home';
        $logo_color = '';
        $PageID = "Responsive vs Mobile Research";
    break;
        
    case 'webcam.php':
        $title = "Live Web Cameras";
        $logo = 'fa-home';
        $logo_color = '';
        $PageID = "Live Web Cameras";
    break;    

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}

?>