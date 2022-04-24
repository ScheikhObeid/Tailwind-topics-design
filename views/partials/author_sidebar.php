<?php
if(session_status() === PHP_SESSION_NONE){
session_start();
} 

?>
<div class="bg-slate-400 w-40 text-center mt-3 ml-2">
      <img
        src= "<?php echo $_SESSION['project_path'] ."/public/img/profile.jpg"?>"
        class="rounded-full w-32 px-1 pt-3 pb-2 mx-auto"
        alt="Avatar"
      />
      <h5 class="text-lg font-medium px-2 leading-tight">
        John Doe ben John Doe
      </h5>
      <span class="text-gray-500">Web designer</span>
      <div class="flex flex-wrap justify-between m-3 py-4">
        <div class="text-xs">BOCKM</div>
        <div class="text-xs">SHERE</div>
      </div>
    </div>
