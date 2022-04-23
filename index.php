
<?php
  //  Creating project directory
$foldersPathToRootDirectory =  __DIR__;

$exploded = explode("\\", $foldersPathToRootDirectory);

$fromHostToProjectDirectory = '';

for ($i = 3; $i < count($exploded); $i++)
{
  $fromHostToProjectDirectory .= "/". $exploded [$i];
}

$rootDirectory = "http://".$_SERVER['SERVER_NAME'].$fromHostToProjectDirectory;

?>
<?php
  include __DIR__ . "/views/partials/header.php";
  include __DIR__ . "/views/partials/author_sidebar.php"
?>

    <!--  npx tailwindcss -i ./src/css/input.css -o ./public/css/style.css --watch   -->
  </body>
  <div class="h-12 bg-red-400">
      Home
  </div>


</html>
