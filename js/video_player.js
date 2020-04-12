const $video = document.querySelector("video");
const $video_full = document.querySelector(".video");
const $video_container = document.querySelector(".video__container");
const $play = document.querySelector(".container__play");
const $backward = document.querySelector(".container__backward");
const $forward = document.querySelector(".container__forward");
const $sound = document.querySelector(".container__sound");
const $volume = document.querySelector(".volume");
const $fullscreen = document.querySelector(".container__fullscreen");
const $progressBar = document.querySelector(".progressBar");
const $bar = document.querySelector(".bar");
const $body = document.querySelector("body");
const $pause = document.querySelector(".pause");
const $playsvg = document.querySelector(".play");
const $soundsvg = document.querySelector(".sound");
const $mutesvg = document.querySelector(".mute");
const $fullscreensvg = document.querySelector(".fullscreen");
const $minimizesvg = document.querySelector(".minimize");

console.log($video);
console.log($play);
console.log($backward);
console.log($forward);
console.log($volume);
console.log($fullscreen);
console.log($video.offsetWidth);
console.log($video_container);
$pause.style.display = "none";

$play.addEventListener("click", function () {
  if ($video.paused) {
    $pause.style.display = "block";
    $playsvg.style.display = "none";
    $video.play();
  } else {
    $playsvg.style.display = "block";
    $pause.style.display = "none";
    $video.pause();
  }
});

$backward.addEventListener("click", () => {
  $video.currentTime -= 5;
});

$forward.addEventListener("click", () => {
  $video.currentTime += 5;
});

$volume.addEventListener("change", () => {
  $video.volume = $volume.value / 100;
});
$minimizesvg.style.display = "none";
$fullscreen.addEventListener("click", () => {
  $minimizesvg.style.display = "block";
  $fullscreensvg.style.display = "none";
  $video_full.requestFullscreen();
  if (document.fullscreenElement) {
    $minimizesvg.style.display = "none";
    $fullscreensvg.style.display = "block";
    document.exitFullscreen();
  }
});

$video.addEventListener("timeupdate", () => {
  $step = ($video.offsetWidth / $video.duration) * $video.currentTime;
  $progressBar.style.width = $step + "px";
  //   $progressBar.innerHTML =
  //     '<p class="timer">' + Math.round(($video.currentTime / 60) * 100) / 100;
  //   +"</p>";
});

$bar.addEventListener("click", (e) => {
  var x = e.pageX;
  x = $video.duration * (x / $video.offsetWidth);
  $video.currentTime = x;
});
$mutesvg.style.display = "none";
$sound.addEventListener("click", () => {
  if ($video.volume > 0) {
    $mutesvg.style.display = "block";
    $soundsvg.style.display = "none";
    $video.volume = 0;
  } else {
    $mutesvg.style.display = "none";
    $soundsvg.style.display = "block";
    $video.volume = 0.5;
  }
});

$video_container.addEventListener("mousemove", () => {
  $video_container.style.opacity = "1";
});

$video_container.addEventListener("mouseleave", () => {
  $video_container.style.opacity = "1";
});
