let txtHint = document.getElementById('txtHint');
let question = document.getElementById('question');

question.addEventListener('keyup', ajax);

function ajax() {
  let str = question.value;
  console.log(str);
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      txtHint.innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "ajaxDB.php?q="+str, true);
  xmlhttp.send();
}
