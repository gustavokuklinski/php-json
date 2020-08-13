<?php 

// index
$getfile = file_get_contents($db);
$jdb = json_decode($getfile);

// view
if (isset($_GET["v"])) {
  $id = (int) $_GET["v"];
  $getfile = file_get_contents($db);
  $jsonfile = json_decode($getfile, true);
  $jsonfile = $jsonfile[$module];
  $jsonfile = $jsonfile[$id];
}

// edit
if (isset($_GET["e"])) {
  $id = (int) $_GET["e"];
  $getfile = file_get_contents($db);
  $jsonfile = json_decode($getfile, true);
  $jsonfile = $jsonfile[$module];
  $jsonfile = $jsonfile[$id];
}

if (isset($_POST["e"])) {
  $id = (int) $_POST["e"];
  $getfile = file_get_contents($db);
  $all = json_decode($getfile, true);
  $jsonfile = $all[$module];
  $jsonfile = $jsonfile[$id];

  foreach ($dbFields as $value) {
    $post[$value] = isset($_POST[$value]) ? $_POST[$value] : "";
  }

  if ($jsonfile) {
    unset($all[$module][$id]);
    $all[$module][$id] = $post;
    $all[$module] = array_values($all[$module]);
    file_put_contents($db, json_encode($all));
  }
  header("Location: index.php");
}

// add
if (isset($_POST["add"])) {
  $file = file_get_contents($db);
  $data = json_decode($file, true);
  unset($_POST["add"]);
  $data[$module] = array_values($data[$module]);
  array_push($data[$module], $_POST);
  file_put_contents($db, json_encode($data));
  header("Location: index.php");
}

// delete
if (isset($_GET["d"])) {
  $id = (int) $_GET["id"];
  $all = file_get_contents($db);
  $all = json_decode($all, true);
  $jsonfile = $all[$module];
  $jsonfile = $jsonfile[$id];

  if($jsonfile) {
    unset($all[$module][$id]);
    $all[$module] = array_values($all[$module]);
    file_put_contents($db, json_encode($all));
  }
  header("Location: index.php");
}