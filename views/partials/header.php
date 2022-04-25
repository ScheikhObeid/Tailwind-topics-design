<?php
if(session_status() === PHP_SESSION_NONE){
session_start();
} 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo $_SESSION['project_path'] ."/public/css/style.css"?>" rel="stylesheet" />
    <!-- <link href="../../../public/css/test.css" rel="stylesheet" /> -->
  </head>
  <body>
 

       <div class="bg-red-500 h-20">
       <h1 class="text-6xl">Navbaro</h1>
       </div>
       <div class="bg-slate-400 w-40 text-center mt-3 ml-2">
      <img
        src=  "<?php echo $_SESSION['project_path'] . "/public/img/profile.jpg"?>"
        class="rounded-full w-32 px-1 pt-3 pb-2 mx-auto"
        alt="Avatar"
      />
 
 