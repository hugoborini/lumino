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
  let movieId = movie.id;
  modal.innerHTML =
    '<div class="test"><p>This movie is the movie ' +
    movieId +
    '</p><button class="butt">hello</button></div>';
}

let categories = document.querySelectorAll(".category");

for (let i = 0; i < categories.length; i++) {
  let category = categories[i];

  let movies = category.querySelectorAll(".movie");
  let modal = category.querySelector(".category__modal");
  for (let j = 0; j < movies.length; j++) {
    let movie = movies[j];
    movie.addEventListener("click", function () {
      checkModals();
      modal.classList.replace(
        "category__modal--close",
        "category__modal--open"
      );
      addHTML(movie, modal);
      modal.querySelector(".butt").addEventListener("click", function () {
        closeModal(modal);
      });
    });
  }
}
