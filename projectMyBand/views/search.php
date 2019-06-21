<?php include 'templates/header.php'; ?>
<main>
<div class="search"><form action="index.php" method="GET">
  <input type="hidden" name="page" value="search">
  <input autocomplete="off" value="<?php if (!empty($searchterm)): ?><?php echo $searchterm ?>
  <?php endif; ?>" type="text" name="q" placeholder="Zoekterm..." onfocus="this.value=''">
  <input type="hidden" name="headerAnimation" value="off"><br>
  <button type="submit" id= "txtHint">Zoek</button>
</form>
<?php if (!empty($results)): ?>
  <?php if (count($results) >= 2): ?>
    <p class="aantal">Er zijn <?php echo count($results) ?> zoekresultaten</p>
  <?php elseif (count($results) == 1): ?>
    <p class="aantal">Er is 1 zoekresultaat</p>
  <?php endif; ?>
  <?php else: ?>
    <p class='aantal'>Er zijn geen zoekresultaten</p>
<?php endif; ?>
<div class="results">
  <?php foreach ($results as $result): ?>
    <div class="result">
      <h2><a class="naamVanStad" href="index.php?page=info&id=<?php echo $result['id'] ?>"><?php echo $result['title'] ?><img src="img/airplane_icon.png" alt="icon" style="height: 1em; vertical-align: middle;"></a></h2>
    </div>
  <?php endforeach; ?>
</div></div>
</main>
<script>
var alleListItems = document.querySelectorAll(".li");
var animation = <?php echo json_encode($_GET['headerAnimation']) ?>;
var divs = document.querySelectorAll(".result");
for(var i = 0; i < divs.length; i++){
 var delay = 250 * i;
 delay.toString();
 divs[i].style.animationDelay = delay + "ms";
}

if (animation == "off" && window.innerWidth > 800) {
  for (var i = 0; i < alleListItems.length; i++) {
    alleListItems[i].style.animation = "none";
    alleListItems[i].style.marginTop = "-20px";
  }
}

</script>
<?php include 'templates/footer.php'; ?>
