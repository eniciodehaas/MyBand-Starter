<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="author" content="Enicio de Haas">
    <meta name="keywords" content="xtravel, steden, feestdagen">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="css/<?php echo $style ?>">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Hairline&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="header"><h1>Xtravel</h1></div>
      <nav>
        <ul>
          <li class="li"><a href="index.php?page=homepage">home</a></li>
          <!-- <li><a href="index.php?page=map">map</a></li> -->
          <li class="li"><a href="index.php?page=feestdagen">feestdagen</a></li>
          <li class="li"><a href="index.php?page=contact">contact</a></li>
          <li class="li"><a href="index.php?page=about">about</a></li>
          <li class="li"><a href="index.php?page=search&q=">search</a></li>
        </ul>
      </nav>
    </header>
    <script>
    var li = document.querySelectorAll(".li");
    for(var i = 0; i < li.length; i++){
     var delay = 250 * i;
     delay.toString();
     li[i].style.animationDelay = delay + "ms";
    }
    </script>
