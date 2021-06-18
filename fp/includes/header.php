<?php include 'rh-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/ridin.css" />
  <link rel="stylesheet" href="css/rh-nav.css" />
  <link rel="stylesheet" href="css/lightbox.css" />
  <link rel="stylesheet" href="css/form.css" />
       <!-- Google Fonts -->
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
       <!-- jQuery -->
       <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
       <!-- MenuMaker Plugin -->
       <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
       <!-- Icon Library -->
       <script src="https://kit.fontawesome.com/8665c732d2.js" crossorigin="anonymous"></script>
 </head>
 <body>
    <main>
    <header>
         <h1 class="header"><a href="index.php">
         <img src="images/rh-logo_300x300.png" alt="Ridin' Home"></a></h1>
         <nav id="cssmenu">
          <ul class="menu">
             <li class="item"><a href="index.php"> About</a></li>
             <li class="item"><a href="handmade.php"> Handmade</a></li>
             <li class="item"><a href="vintage.php"> Vintage</a></li>
             <li class="item"><a href="faq.php"> FAQ</a></li>
             <li class="item"><a href="contact.php"> Contact/Order</a></li>
             <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>            
          </ul>
         </nav>
    </header>
    
        <!-- START LEFT COLUMN -->
        <section>
            <h2 class="subheader"><?=$PageID?></h2>