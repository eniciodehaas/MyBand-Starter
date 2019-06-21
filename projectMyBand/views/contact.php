<?php include 'templates/header.php'; ?>
<main>
  <div class="contact-text"><h2>Contact</h2>
  <p>Verstuur een bericht naar mij via het onderstaande contactformulier.</p></div>
  <form method="post" action="">
    <div class="contact">
    <input type="text" name="voornaam" placeholder="Voornaam" class="input" id="input">
    <input type="text" name="achternaam" placeholder="Achternaam" class="input">
    <input type="email" name="email" placeholder="E-mail" class="input">
    <textarea name="message" rows="8" cols="80" class="input"></textarea>
    </div>
    <div class="buttons">
      <button type="submit" name="button">Verstuur</button>
      <button type="button" name="button" id="clear">Leeg alle velden</button>
    </div>
</form>
</main>
<script>
  clear = document.getElementById('clear');
  clear.addEventListener('click', function () {
    inputs = document.getElementsByClassName("input");
    for (var i = 0; i < inputs.length; i++) {
      inputs[i].value = '';
    }
  })
</script>
<?php include 'templates/footer.php'; ?>
