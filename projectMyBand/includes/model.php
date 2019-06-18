<?php
// model Home
function haalStedenOp() {
  $pdo = dbConnect();
  $query     = 'SELECT * FROM `steden` ORDER BY `id` DESC';
  $statement = $pdo->query( $query );
  return $statement;
}

//model map

//model feestdagen
function haalFeestdagenOp() {
  $pdo = dbConnect();
  $query     = 'SELECT * FROM `feestdagen` ORDER BY `datum` DESC LIMIT 4';
  $statement = $pdo->query( $query );
  return $statement;
}

//model contact


//model Search
function zoeken($q) {
  $pdo   = dbConnect();
  $query = "SELECT * FROM `steden` WHERE `stad` LIKE '$q%'";
  $statement = $pdo->query( $query );
  echo "test";
  return $statement;
}
?>
