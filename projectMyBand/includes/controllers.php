<?php

function homepage() {
  $title = "Home | Xtravel";
  $style = "home.css";
  $steden = haalStedenOp();
  include 'views/home.php';
}

function map() {
  $title = "Map | Xtravel";
  $style = "map.css";
  include 'views/map.php';
}

function feestdagen() {
  $title = "Feestdagen | Xtravel";
  $style = "feestdagen.css";
  $feestdagen = haalFeestdagenOp();
  include 'views/feestdagen.php';
}

function contact() {
  $title = "Contact | Xtravel";
  $style = "contact.css";
  include 'views/contact.php';
}

function about() {
  $title = "About | Xtravel";
  $style = "about.css";
  include 'views/about.php';
}

function search() {
  $title = "Search | Xtravel";
  $style = "search.css";
  $searchterm = filter_var($_GET['q'], FILTER_SANITIZE_STRING);
  if (!empty($searchterm)) {
  $results = search_database($searchterm);
} else {
  $results = [];
}
  include 'views/search.php';
}

function info() {
  $alleInfo = alleInfo();
  $style = "info.css";
  $title = "Stad | Xtravel";
  include 'views/info.php';
}
?>
