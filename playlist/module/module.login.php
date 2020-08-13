<?php 
ob_start();
session_start();

if (isset($_POST["login"])) {
  $getfile = file_get_contents($dbAdmin);
  $jsonfile = json_decode($getfile);

  foreach ($jsonfile->$moduleAdmin as $index => $obj) {
    if($obj->email == $_POST['email'] && $obj->password == $_POST['password']) {
      $_SESSION['log'] = $_POST['email'];
      header("Location: index.php");
    } else {
      echo "<strong>E-mail ou senha estão errados</strong>";
    }
  }
}

if (isset($_GET["logout"])) {
  session_destroy();
  header("Location: index.php");
}
?>