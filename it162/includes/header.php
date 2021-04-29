<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
      <title><?=$title?></title>
      <meta name="robots" content="noindex,nofollow" />
      <meta name="viewport" content="width=device-width" />
      <meta charset="utf-8" />
      <script src="https://kit.fontawesome.com/8665c732d2.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/portal.css" />
      <link rel="stylesheet" href="css/nav.css" />
      <link rel="stylesheet" href="css/form.css" />
 </head>
 
 <body>
     <header>
     <h1 class="pageID"><a href="index.php"><i class="fas <?=$logo?>"<?=$logo_color?>></i> Ryan Novelli's IT162 Portal Website</a></h1>
     <nav class="topnav" id="myTopnav">
     <?=makeLinks($nav1)?>     
  <!-- <a href="index.php" class="active">About</a>
       <a href="big/index.php">Big</a>
       <a href="aia.php">AIA</a>
       <a href="flowchart.php">Flowchart</a>
       <a href="fp/index.php">Final Project</a>
       <a href="contactme.php">Contact Ryan</a> -->
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <main class="wrapper">
    <!--header ends here -->   