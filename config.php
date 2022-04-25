<?php
if(session_status() === PHP_SESSION_NONE){
session_start();
} 

?>
<?php

$foldersPathToRootDirectory =  __DIR__;
$exploded = explode("\\", $foldersPathToRootDirectory);

$yourProjectDirectory = '';

for ($i = 3; $i < count($exploded); $i++)
{
  $yourProjectDirectory .= "/". $exploded [$i];
}


$rootDirectory = "http://".$_SERVER['SERVER_NAME'].$yourProjectDirectory;

$_SESSION['project_path']=$rootDirectory ;
$_SESSION['pro_inc_path']=__DIR__;


?>