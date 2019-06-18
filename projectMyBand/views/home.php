<?php include 'templates/header.php'; ?>
    <div class="bgi"></div>
    <main>
      <div class="inleiding">
        <h2>In 1 klik,</h2>
        <p>Alles over jóuw stad</p>
    </div>
    <div class="latest">
      <h2>Laatst toegevoegde stad</h2>
    </div>
    <a href="#steden" class="scroll" id="scroll">&#129175;</a>
    <div class="steden" id="steden">
      <?php foreach ($steden as $stad): ?>
        <div class="stad">
          <img class="stadImg" src="img/<?php echo $stad['image'] ?>" alt="<?php echo $stad['stad'] ?>">
          <a href="#"><?php echo $stad['stad'] ?> <img src="img/airplane_icon.png" alt="icon" style="height: 1em; vertical-align: middle;"></a>
        </div>
      <?php endforeach; ?>
    </div>
    </main>
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
    <?php include 'templates/footer.php'; ?>
