<?php
include ("config.php");
include $_SESSION['pro_inc_path'] ."/views/partials/nav-abd.php";
include $_SESSION['pro_inc_path'] ."/views/partials/author_sidebar.php";
// npx tailwindcss -i ./src/css/input.css -o ./public/css/style.css --watch
?>


<div class="text-xs">
<?php echo $_SESSION['project_path'] ?>
</div>