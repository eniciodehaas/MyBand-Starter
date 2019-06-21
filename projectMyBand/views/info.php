<!DOCTYPE html>
<html lang="en">
<?php foreach ($alleInfo as $info): ?>
  <head>
    <meta charset="utf-8">
    <title><?php echo $info['stad'] . " " . "| Xtravel" ?></title>
    <link rel="stylesheet" href="css/<?php echo $style ?>">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Hairline&display=swap" rel="stylesheet">
  </head>
  <body>
<header>
  <img src="img/<?php echo $info['image'] ?>" alt="<?php echo $info['image'] ?>">
</header>
<main>
  <a class="home" href="index.php?page=homepage"><img src="img/airplane_icon.png" alt="icon" style="vertical-align: middle;">Home</a>
  <div class="onderaan">
    <h1>Welkom in <?php echo $info['stad'] ?>!</h1>
    <a href="#text" class="scroll" id="scroll">&#129175;</a>
  </div>
  <div class="text" id="text">
    <p><?php echo $info['tekst']; ?></p>
  </div>
  <div class="bron">
    Bron: <a href="<?php echo $info['bron'] ?>" target="_blank"><?php echo $info['bron'] ?></a>
  </div>
</main>
<?php include 'templates/footer.php'; ?>
<script>
window.onscroll = function () {
  let opacity = 90 - window.pageYOffset;
  if (opacity < 20) {
    document.getElementById('scroll').style.opacity = '0';
  } else {
  document.getElementById('scroll').style.opacity = '0.' + opacity;
};
  if (window.pageYOffset > 100) {
    document.getElementById('scroll').className = 'scroll-verberg';
  } else {
    document.getElementById('scroll').className = 'scroll';
  }
};
</script>
<?php endforeach; ?>
