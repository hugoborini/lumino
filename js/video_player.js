$video = document.querySelector("video");
$play = document.querySelector(".container__play");
$backward = document.querySelector(".container__backward");
$forward = document.querySelector(".container__forward");
$volume = document.querySelector(".volume");
$fullscreen = document.querySelector(".container__fullscreen");

console.log($video);
console.log($play);
console.log($backward);
console.log($forward);
console.log($volume);
console.log($fullscreen);

$video.addEventListener("click", function () {
  $video.play();
});

$backward.addEventListener("click", function () {
  $video.currentTime -= 5;
});
