<?php include 'templates/header.php'; ?>

<main>
  <div class="feestdagen">
    <?php foreach ($feestdagen as $feestdag): ?>
      <div class="feestdag">
        <h2 class="feestdagTitel"> <?php echo $feestdag['naam']; ?> </h2>
        <img class="feestdagImg" src="img/feestdagen/<?php echo $feestdag['image'] ?>" alt="<?php echo $feestdag['naam'] ?>">
        <p class="feestdagP"><?php echo $feestdag['info'] ?></p>
        <h3 class="feestdagDate"><?php echo $feestdag['datum'] ?><h3>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php include 'templates/footer.php'; ?>
