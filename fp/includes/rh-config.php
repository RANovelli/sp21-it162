<?php

/*
rh-config.php

Used to store all of our Ridin' Home configuration information

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
        $title = "About Ridin' Home";
        $logo = '';
        $logo_color = '';
        $PageID = "About Ridin' Home";
    break;
        
    case 'handmade.php':
    $title = "Handmade Items";
    $logo = '';
    $logo_color = '';
    $PageID = "Handmade Items";    
    break;
    
    case 'vintage.php':
    $title = "Vintage Items";
    $logo = '';
    $logo_color = '';
    $PageID = "Vintage Items";    
    break;
        
    case 'faq.php':
    $title = "Frequently Asked Questions";
    $logo = '';
    $logo_color = '';
    $PageID = "Frequently Asked Questions";    
    break; 
    
    case 'contact.php':
        $title = "Ridin' Home Contact/Order Form";
        $logo = '';
        $logo_color = '';
        $PageID = "Ridin' Home Contact/Order Form";
    break;
        
    case 'disclaimer.php':
        $title = "Ridin' Home Disclaimer";
        $logo = '';
        $logo_color = '';
        $PageID = "Ridin' Home Disclaimer";
    break;    

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}

?>