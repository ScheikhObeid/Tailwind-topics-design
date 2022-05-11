// Begin Dropdown from user profile picture
function show_list() {
  var courses = document.getElementById("courses_id");

  if (courses.style.display == "block") {
    courses.style.display = "none";
  } else {
    courses.style.display = "block";
  }
}
window.onclick = function (event) {
  if (!event.target.matches(".dropdown_button")) {
    document.getElementById("courses_id").style.display = "none";
  }
};

// End Dropdown from user profile picture
