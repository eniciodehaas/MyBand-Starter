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
    <div class="div-scroll">
      <a href="#steden" class="scroll" id="scroll">
        <svg width="60" height="60" xmlns="http://www.w3.org/2000/svg">
          <path fill="none" stroke-width="6" stroke="black" d="M 25 20 H 12 L 30 38 L 48 20 H 35"/>
        </svg>
      </a></div>
    <div class="steden" id="steden">
      <?php foreach ($steden as $stad): ?>
        <div class="stad">
          <img class="stadImg" src="img/<?php echo $stad['image'] ?>" alt="<?php echo $stad['stad'] ?>">
          <a href="index.php?page=info&id=<?php echo $stad['id'] ?>"><?php echo $stad['stad'] ?> <img src="img/airplane_icon.png" alt="icon" style="height: 1em; vertical-align: middle;"></a>
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
