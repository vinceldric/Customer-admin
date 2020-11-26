<?php

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'aviano-db');

// check connection
if(!$conn){
  header("Location: error.php");
  exit;
}

// Site-wide config
$site_title = "Vincent Inc.";
$site_owner = "Vincent Miranda";

?>