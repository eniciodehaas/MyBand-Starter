<?php
function dbConnect() {
  require 'dbVars.php';
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
?>
