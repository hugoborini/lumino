let $scrollingMenu = document.querySelector("#genre");
let $ul = document.querySelector("#genre__ul");

$scrollingMenu.addEventListener("click", () => {
  $ul.classList.toggle("appear");
});
