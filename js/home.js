function closeModal(modal) {
  modal.classList.add("category__modal--closing");
  modal.innerHTML = "";
  setTimeout(function () {
    modal.classList.replace("category__modal--open", "category__modal--close");
    modal.classList.remove("category__modal--closing");
  }, 300);
}

function closeArrows(arrows) {
  arrows.classList.replace("elements__clicked", "elements__clicked--hide");
}

function checkModals() {
  let modals = document.querySelectorAll(".category__modal--open");
  if (modals) {
    if (modals.length > 0) {
      for (let i = 0; i < modals.length; i++) {
        closeModal(modals[i]);
      }
    }
  }
}

function checkArrows() {
  let arrows = document.querySelectorAll(".elements__clicked");
  if (arrows) {
    if (arrows.length > 0) {
      for (let i = 0; i < arrows.length; i++) {
        closeArrows(arrows[i]);
      }
    }
  }
}

function addHTML(movie, modal) {
  let title = movie.getAttribute("data-title");
  let synopsis = movie.getAttribute("data-synopsis");
  let released = movie.getAttribute("data-released");
  let mini = movie.getAttribute("data-mini");
  let path = movie.getAttribute("data-path");
  modal.classList.replace("category__modal--close", "category__modal--open");
  modal.style.background = "0% 25% / cover url(" + mini + ")";
  modal.innerHTML =
    '<div class="modal__icons"><div class="modal__icons--left"><img src="assets/icon/add.svg" class="modal__icon" /><img src="assets/icon/like.svg" class="modal__icon" /></div><div class="modal__icons--right"><img src="assets/icon/exit.svg" class="modal__icon butt" /></div></div><a class="modal__playLink" href="index.php?action=player&film=' +
    path +
    "&title=" +
    title +
    '"><img src="assets/icon/big_play.svg" class="modal__icon--play" /></a><div class="modal__texts"><h1 class="modal__title">' +
    title +
    '</h1><h3 class="modal__date">' +
    released +
    '</h3><p class="modal__synopsis">' +
    synopsis +
    "</p></div>";
}

function addBackground(movie) {
  let mini = movie.getAttribute("data-mini");
  movie.style.background = "center / contain no-repeat url(" + mini + ")";
}

let categories = document.querySelectorAll(".category");

for (let i = 0; i < categories.length; i++) {
  let category = categories[i];
  let movies = category.querySelectorAll(".movie");
  let modal = category.querySelector(".category__modal");
  for (let j = 0; j < movies.length; j++) {
    let movie = movies[j];
    let hover = movie.querySelector(".elements__hover");
    let arrowsNone = movie.querySelector(".elements__clicked--hide");

    movie.addEventListener("click", function () {
      checkArrows();
      checkModals();
      addHTML(movie, modal);
      arrowsNone.classList.replace(
        "elements__clicked--hide",
        "elements__clicked"
      );
      modal.querySelector(".butt").addEventListener("click", function () {
        closeModal(modal);
        arrowsNone.classList.replace(
          "elements__clicked",
          "elements__clicked--hide"
        );
      });
    });

    addBackground(movie);
    movie.addEventListener("mouseenter", function () {
      let arrow = hover.querySelector(".elements__clicked");
      console.log(hover, arrow);
      if (arrow) {
        arrow.classList.toggle(".elements__clicked--hide");
      }
      hover.classList.replace("elements__hover", "elements__hover--in");
      movie.addEventListener("mouseleave", function () {
        hover.classList.replace("elements__hover--in", "elements__hover");
      });
    });
  }
}
