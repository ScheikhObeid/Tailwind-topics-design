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
    <script src="https://kit.fontawesome.com/525d308838.js" crossorigin="anonymous"></script>
	<!-- <link href="../../../public/css/test.css" rel="stylesheet" /> -->
</head>
<!-- My Navbar goes here -->
<nav>
	<div class="w-full flex flex-wrap justify-between items-center bg-blue-100">
		<div>
			<a class="py-1 ml-4" href="#">
			<img class="h-8 w-8 inline-block" src="<?php echo $_SESSION['project_path'] ."/public/img/logo4.png"?>" alt="Topics">
			</a>
			<button class="ml-2 md:hidden inline-block">
			<span class="font-bold px-2">Topics</span><i class="fa-solid fa-caret-down"></i>
			</button>
		</div>
		<div class="md:flex md:flex-wrap hidden w-[40%]">
			<div class=" bg-blue-100 border-2 w-[89%]">
			<span class=" bg-white py-2 px-2 mr-0"><i class="fa-solid fa-magnifying-glass"></i></span><input type="text" class="ml-0 px-2 h-9 w-[85%]" placeholder="Search...">
			</div>
		</div>

		<div class="   px-2 py-1">
			<a class="px-2"><i class="fa-regular fa-pen-to-square"></i></a>
			<a class="px-2"><i class="fa-regular fa-star"></i></a>
			<a class="px-2"><i class="fa-regular fa-bell"></i></a>
			<img class="inline-block w-8 h-8 rounded-full ml-2 mr-4 " id="profile_img_id" onclick="showProfileImageListe()" src="<?php echo $_SESSION['project_path'] ."/public/img/profile.jpg"?>" alt="">
			<div id="profile_dropdown_id" class="hidden absolute top-9 right-8 rounded-sm bg-slate-100 py-2 px-6  divide-y-2 divide-blue-200">
				<ul class="mb-1">
                <li class="py-1"><a href="#">Your profile</a></li>
                <li class="py-1"><a href="#">Settings</a></li>
                <li class="py-1" ><a href="#">Manage bookmarks</a></li>
				</ul>
				<ul class="mb-1">
                <li class="py-1"><a href="#">Create content</a></li>
                <li class="py-1"><a href="#">Manage articles</a></li>
				</ul>
				<ul>
                <li><a href="#">Sign out</a></li>
				</ul>
            </div>
		</div>
		<div class="hidden text-blue-500 font-medium px-2 py-1 mr-4">
			<a class="px-1">Sign in</a>
			<a class="px-1">Create account</a>
		</div>
	</div>
	<div class="flex flex-wrap md:hidden border-2 mt-1 ml-3 mr-5 w-full">
			<div class=" bg-white m-auto  w-[95%]">
			<span class=" bg-white py-2 pl-0 pr-3"><i class="fa-solid fa-magnifying-glass"></i></span><input type="text" class="ml-0 px-2 h-9 w-[90%]" placeholder="Search...">
			</div>
		</div>
</nav>


<script src="<?php echo $_SESSION['project_path'] ."/public/js/abd.js"?>"></script>
	</body>
</html>