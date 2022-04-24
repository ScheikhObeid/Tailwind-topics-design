<?php
if(session_status() === PHP_SESSION_NONE){
session_start();
} 
?>
<?php
  include $_SESSION['pro_inc_path'] . "/views/partials/header.php";
  include $_SESSION['pro_inc_path']. "/views/partials/author_sidebar.php"
?>