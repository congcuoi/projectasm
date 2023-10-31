var menu = document.getElementById("list-menu");
var dropdown = document.getElementById("dropdown-menu");

menu.addEventListener("click", function () {
  if (dropdown.style.visibility === "hidden") {
    dropdown.style.visibility = "visible";
    dropdown.style.height = "300px";
  } else {
    dropdown.style.visibility = "hidden";
    dropdown.style.height = "0px";
  }
});
