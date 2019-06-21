<?php
$config = [
  "db_host" => "localhost",
  "db_name" => "myband",
  "db_user" => "root",
  "db_pass" => "",
  ];

$searchterm = filter_var($_GET['q'], FILTER_SANITIZE_STRING);
if (!empty($searchterm)) {
    $results = search_database2($searchterm);
    } else {
    $results = [];
}
function dbConnect() {
  $config = [
    "db_host" => "localhost",
    "db_name" => "myband",
    "db_user" => "root",
    "db_pass" => "",
  ];

  try {
     $dsn = "mysql:host=" . $config['db_host'] . ';dbname=' . $config['db_name'];
     $pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
	   $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	   $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
     return $pdo;
  } catch ( PDOException $e ) {
   echo $e->getFile() . ' on line ' . $e->getLine() . ': ' . $e->getMessage();
  exit();
 }
}
function search_database($searchterm) {

  $results = [];
  $pdo = dbConnect();

  $query = 'SELECT * FROM `steden` WHERE `stad` LIKE :search_term';
  $statement = $pdo->prepare( $query );

  $params = [
    'search_term' => '%' . $searchterm . '%'
  ];
  $statement->execute( $params ) or die(print_r($statement->errorInfo(), true));//??
  foreach ($statement as $stad) {
    $rij = [];
    $rij['type'] = 'stad';
    $rij['title'] = $stad['stad'];
    $rij['id'] = $stad['id'];
    $results[] = $rij;
  }
  print_r($results);
  return $results;
}

function search_database2($searchterm){
  $con = mysqli_connect( "localhost", "root", "", "myband");
  if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
  }
  $sql = "SELECT * FROM steden WHERE stad LIKE '%$searchterm%'";
  echo $sql;
  $statement = mysqli_query($con, $sql);
  foreach ($statement as $stad) {
    $rij = [];
    $rij['type'] = 'stad';
    $rij['title'] = $stad['stad'];
    $rij['id'] = $stad['id'];
    $results[] = $rij;
  }
  print_r($results);

  return $results;
}
?>
