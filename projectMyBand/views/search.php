<?php include 'templates/header.php'; ?>
<input type="text" id="question" name="q" placeholder="Zoek..." onfocus="this.value=''">
<div id="antwoorden">
  <?php
  foreach ($zoekresultaten as $zoekresultaat):
    echo $zoekresultaat['stad'];
  endforeach; ?>
</div>
<script>
let antwoorden = document.getElementById('antwoorden');
let question = document.getElementById('question');

question.addEventListener('keyup', ajax);

function ajax() {
  let str = question.value;
  console.log(str);
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      antwoorden.innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "includes/index.php?page=search&q="+str, true);
  xmlhttp.send();
}
</script>
<?php include 'templates/footer.php'; ?>
