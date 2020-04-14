function closeModal(modal) {
  modal.classList.add("category__modal--closing");
  modal.innerHTML = "";
  setTimeout(function () {
    modal.classList.replace("category__modal--open", "category__modal--close");
    modal.classList.remove("category__modal--closing");
  }, 300);
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

function addHTML(movie, modal) {
  let title = movie.getAttribute("data-title");
  let synopsis = movie.getAttribute("data-synopsis");
  let released = movie.getAttribute("data-released");
  let mini = movie.getAttribute("data-mini");
  let path = movie.getAttribute("data-path");
  let id = movie.getAttribute("id");
  modal.classList.replace("category__modal--close", "category__modal--open");
  modal.style.background = "0% 25% / cover url(" + mini + ")";
  modal.innerHTML =
    '<div class="modal__icons"><div class="modal__icons--left"><a class="modal__icon--add" href="index.php?action=addListe&id_film=' +
    id +
    '"><img src="assets/icon/add.svg" class="modal__icon" /></a><div class="modal__icon modal__icon--like"></div></div><div class="modal__icons--right"><img src="assets/icon/exit.svg" class="modal__icon butt" /></div></div><a class="modal__playLink" href="index.php?action=player&film=' +
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

function likeFull(like) {
  like.style.background =
    "center / contain no-repeat url(assets/icon/like.svg)";
  like.addEventListener("click", function () {
    like.style.background =
      "center / contain no-repeat url(assets/icon/like-full.svg)";
    like.addEventListener("click", function () {
      like.style.background =
        "center / contain no-repeat url(assets/icon/like.svg)";
    });
  });
}

function hoverModal() {
  let like = document.querySelector(".element__icon--like");
  likeFull(like);
  for (let i = 0; i < categories.length; i++) {
    let category = categories[i];
    let movies = category.querySelectorAll(".movie");
    let modal = category.querySelector(".category__modal");
    for (let j = 0; j < movies.length; j++) {
      let movie = movies[j];
      let hover = movie.querySelector(".elements__hover");
      movie.addEventListener("click", function () {
        checkModals();
        addHTML(movie, modal);
        let like = document.querySelector(".modal__icon--like");
        likeFull(like);
        modal.querySelector(".butt").addEventListener("click", function () {
          closeModal(modal);
        });
      });

      addBackground(movie);
      movie.addEventListener("mouseenter", function () {
        hover.classList.replace("elements__hover", "elements__hover--in");
        movie.addEventListener("mouseleave", function () {
          hover.classList.replace("elements__hover--in", "elements__hover");
        });
      });
    }
  }
}

let categories = document.querySelectorAll(".category");
hoverModal();

let top5 = document.querySelectorAll(".movie__top");
console.log(top5);
for (let i = 0; i < top5.length; i++) {
  let top = top5[i];
  top.innerHTML = i + 1;
}
