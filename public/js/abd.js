// Begin Dropdown from user profile picture
function showProfileImageListe() {
  const buttonElement = document.getElementById("profile_img_id"); // Button id
  const elementClasslist = document.getElementById(
    "profile_dropdown_id"
  ).classList; // HTML element id
  if (elementClasslist.contains("block")) {
    elementClasslist.replace("block", "hidden");
    // buttonElement.innerHTML = "Show menu";
  } else {
    elementClasslist.replace("hidden", "block");
    // buttonElement.innerHTML = "Hide menu";
  }
}

document.addEventListener("click", function handleClickOutsideBox(event) {
  const box = document.getElementById("profile_img_id");

  if (!box.contains(event.target)) {
    const elementClasslist = document.getElementById(
      "profile_dropdown_id"
    ).classList;
    elementClasslist.replace("block", "hidden");
  }
});

// document.addEventListener("click", function handleClickOutsideBox(event) {
//   const buttonElement = document.getElementById("#profile_img_id");

//   if (!buttonElement.contains(event.target)) {
//     const elementClasslist = document.getElementById(
//       "profile_dropdown_id"
//     ).classList;
//     elementClasslist.replace("block", "hidden");
//     // buttonElement.innerHTML = "Show menu";
//   }
// });

// function show_list() {
//   var courses = document.getElementById("profile_dropdown_id");

//   if (courses.style.display == "block") {
//     courses.style.display = "none";
//   } else {
//     courses.style.display = "block";
//   }
// }
// window.onclick = function (event) {
//   if (!event.target.matches("#profile_img_id")) {
//     document.getElementById("profile_dropdown_id").style.display = "none";
//   }
// };

// End Dropdown from user profile picture
