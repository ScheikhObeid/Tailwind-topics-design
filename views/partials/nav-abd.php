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
			<img class="inline-block w-8 h-8 rounded-full ml-2 mr-4 " id="profile_img_id" onclick="show_list()" src="<?php echo $_SESSION['project_path'] ."/public/img/profile.jpg"?>" alt="">
			<div id="profile_dropdown_id" class="absolute top-2 right-14 bg-slate-300 py-2 px-6  divide-y-2 divide-blue-700">
				<ul >
                <li class="py-1"><a href="#">Your prifile</a></li>
                <li class="py-1"><a href="#">Settings</a></li>
                <li class="py-1"><a href="#">Creat content</a></li>
                <li class="py-1" ><a href="#">Data mining</a></li>
				</ul>
				<ul>
                <li><a href="#">Logout</a></li>
				</ul>
            </div>
		</div>

		
		<div class="hidden text-blue-500 font-medium px-2 py-1 mr-4">
			<a class="px-1">Login</a>
			<a class="px-1">Register</a>
		</div>
	

	</div>
	<div class="flex flex-wrap md:hidden border-2 mt-1 ml-3 mr-5 w-full">
			<div class=" bg-white m-auto  w-[95%]">
			<span class=" bg-white py-2 pl-0 pr-3"><i class="fa-solid fa-magnifying-glass"></i></span><input type="text" class="ml-0 px-2 h-9 w-[90%]" placeholder="Search...">
			</div>
		</div>
</nav>
<br><br><br><br><br><br>


    <script>
        function show_list() {
            var courses = document.getElementById("profile_dropdown_id");
 
            if (courses.style.display == "block") {
                courses.style.display = "none";
            } else {
                courses.style.display = "block";
            }
        }
        window.onclick = function (event) {
            if (!event.target.matches('#profile_img_id')) {
                document.getElementById('courses_id')
                    .style.display = "none";
            }
        }   
    </script>


	<!-- Navbar goes here -->
	<nav class="bg-red-100 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
		<div class="container flex flex-wrap justify-between items-center mx-auto">
			<a href="https://flowbite.com" class="flex items-center">
				<img src="<?php echo $_SESSION['project_path'] ."/public/img/logo.png"?>" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
				<!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
			</a>
		<div class="flex md:order-2">
			<button type="button" data-collapse-toggle="mobile-menu-3" aria-controls="mobile-menu-3" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" >
			<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
			</button>
			<div class="hidden relative md:block">
			<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
				<svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
			</div>
			<input type="text" id="search-navbar" class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
			</div>
			<button data-collapse-toggle="mobile-menu-3" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-3" aria-expanded="false">
			<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
			<svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
			</button>
		</div>
			<div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-3">
			<div class="relative mt-3 md:hidden">
				<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
				<svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
				</div>
				<input type="text" id="search-navbar" class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
			</div>
			<ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
				<li>
				<a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
				</li>
				<li>
				<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
				</li>
				<li>
				<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
				</li>
			</ul>
			</div>
		</div>
	</nav>

<br><br><br><br>

<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
	<div class="container flex flex-wrap justify-between items-center mx-auto">
		<a href="https://flowbite.com" class="flex items-center">
			<img src="<?php echo $_SESSION['project_path'] ."/public/img/logo.png"?>" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
			<!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
		</a>
		<div class="flex items-center md:order-2">
			<button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
				<span class="sr-only">Open user menu</span>
				<img class="w-8 h-8 rounded-full" src="<?php echo $_SESSION['project_path'] ."/public/img/profile.jpg"?>" alt="user photo">
			</button>

			<div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1063.2px, 1010.4px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
				<div class="py-3 px-4">
				<span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
				<span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
				</div>
				<ul class="py-1" aria-labelledby="dropdown">
					<li>
						<a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
					</li>
					<li>
						<a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
					</li>
					<li>
						<a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
					</li>
					<li>
						<a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
					</li>
				</ul>
			</div>
			<button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
				<span class="sr-only">Open main menu</span>
				<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
				<svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
			</button>
		</div>
		<div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
			<ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
				<li>
					<a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
				</li>
				<li>
					<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
				</li>
				<li>
					<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
				</li>
				<li>
					<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
				</li>
				<li>
					<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

	</body>
</html>