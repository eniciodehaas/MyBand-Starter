<?php include 'templates/header.php'; ?>
<form  method="GET">
  <input type="hidden" name="page" value="search">
  <input autocomplete="off" id = "question" type="text" name="q" placeholder="Zoekterm..." onfocus="this.value=''">
  <button type="button">Zoek</button>
  <div id="txtHint"></div>
</form>

<script src="ajax.js"></script>
<script>
    var divs = document.querySelectorAll(".result");
    for(var i = 0; i < divs.length; i++){
     var delay = 250 * i;
     delay.toString();
     divs[i].style.animationDelay = delay + "ms";
    }
</script>
<!-- <?php include 'templates/footer.php'; ?> -->
