<?php include 'big-config.php'?>
<!doctype html>
<html>
<head>
<title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/8665c732d2.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</head>

<body>
<!-- START Wrapper -->
<div class="wrapper">
<header>
  <h1><a href="index.php" id="main_header"><i class="fas <?=$logo?>"<?=$logo_color?>></i> Web Dev Examples by Ryan Novelli</a></h1>
  <nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> IT162 Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
     <li><a href="flexbox.php"><span><i class="fas fa-th fa-fw"></i>Flexbox</span></a></li>
     <li><a href="galleries.php"><span><i class="fas fa-camera-retro"></i> Galleries</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="map.php"><span><i class="fas fa-map-marker-alt fa-fw"></i>Map</span></a></li>
           <li><a href="calendar.php"><span><i class="far fa-calendar-alt fa-fw"></i>Calendar</span></a></li>
           <li><a href="youtube.php"><span><i class="fab fa-youtube fa-fw"></i>YouTube</span></a></li>
        </ul>
     </li>
     <li><a href="shoppingcarts.php"><span><i class="fas fa-shopping-cart fa-fw"></i>Shopping Carts</span></a></li>
     <li><a href="siteapp.php"><span><i class="fas fa-mobile-alt fa-fw"></i>Responsive vs Mobile</span></a></li>
     <li><a href="webcam.php"><span><i class="fas fa-video fa-fw"></i>Web Cam</span></a></li>
  </ul>
</nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>