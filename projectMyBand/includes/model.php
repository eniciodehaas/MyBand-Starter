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
  $query     = 'SELECT * FROM `feestdagen` ORDER BY `datum` ASC LIMIT 4';
  $statement = $pdo->query( $query );
  return $statement;
}

//model contact


//model Search
function search_database($searchterm) {
  $results = [];
  $pdo = dbConnect();
  $query = 'SELECT * FROM `steden` WHERE `stad` LIKE :search_term';
  $statement = $pdo->prepare( $query );
  $params = array(
    'search_term' => '%' . $searchterm . '%'
  );
  $statement->execute( $params );
  foreach ($statement as $stad) {
    $rij = array();
    $rij['type'] = 'stad';
    $rij['title'] = $stad['stad'];
    $rij['id'] = $stad['id'];
    $results[] = $rij;
  }
  return $results;
}


//model van een informatiepagina van een stad


function alleInfo() {
  $pdo = dbConnect();
  $id = $_GET['id'];
  $query = "SELECT * FROM `steden` WHERE `id` LIKE '$id'";
  $statement = $pdo->query( $query );
  return $statement;
}
?>
