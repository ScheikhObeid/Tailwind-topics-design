<?php
session_start();
$foldersPathToRootDirectory =  __DIR__;

$exploded = explode("\\", $foldersPathToRootDirectory);

$fromHostToProjectDirectory = '';

for ($i = 3; $i < count($exploded); $i++)
{
  $fromHostToProjectDirectory .= "/". $exploded [$i];
}

$rootDirectory = "http://".$_SERVER['SERVER_NAME'].$fromHostToProjectDirectory;

$_SESSION['project_path']=$rootDirectory;
?>
