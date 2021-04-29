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
        $title = "Ryan Novelli's IT162 About Page";
        $logo = 'fa-record-vinyl';
        $logo_color = '';
        $PageID = "About Ryan Novelli";
    break;
        
    case 'big/index.php':
    $title = "BIG Project";
    $logo = "fa-city";
    $logo_color = '';
    $PageID = "BIG Project";    
    break;
    
    case 'aia.php':
    $title = "Audience, Issues and Approach Research";
    $logo = "fa-universal-access";
    $logo_color = ' style="color:#00f"';
    $PageID = "AIA";    
    break;
        
    case 'flowchart.php':
    $title = "Flowchart";
    $logo = "fa-ship";
    $logo_color = '';
    $PageID = "Flowchart";    
    break;
        
    case 'fp/index.php':
    $title = "Final Project";
    $logo = "fa-motorcycle";
    $logo_color = ' style="color:#00f"';
    $PageID = "Final Project";    
    break;    
    
    case 'contactme.php':
        $title = "Ryan Novelli's IT162 Contact Page";
        $logo = 'fa-comments';
        $logo_color = ' style="color:#037d50"';
        $PageID = "Contact Ryan";
    break;   

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = 'About';
}

$nav1['index.php'] = 'About';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = 'Flowchart';
$nav1['fp/index.php'] = 'Final Project';
$nav1['contactme.php'] = 'Contact Ryan';

/*
Here we're creating a function to generate links and keep the highlight on the current page

<a href="index.php" class="active">About</a>
       <a href="big/index.php">Big</a>
       <a href="aia.php">AIA</a>
       <a href="flowchart.php">Flowchart</a>
       <a href="fp/index.php">Final Project</a>
       <a href="contactme.php">Contact Ryan</a>
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<a class=\"active\" href=\"$url\">$text</a>";
        }else{
            $myReturn .= "<a href=\"$url\">$text</a>"; 
        }
    }
    
    return $myReturn;
}








?>

