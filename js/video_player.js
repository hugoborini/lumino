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
const $backArrow = document.querySelector(".video_backArrow");
const $container = document.querySelector(".container");

const steps = 10;

$play.style.display = "block";
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
  if ($volume.value == 0) {
  }
});

$minimizesvg.style.display = "none";

$fullscreen.addEventListener("click", () => {
  $minimizesvg.style.display = "block";
  $fullscreensvg.style.display = "none";
  $backArrow.style.display = "none";
  $video_full.requestFullscreen();

  if (document.fullscreenElement) {
    $minimizesvg.style.display = "none";
    $fullscreensvg.style.display = "block";
    $backArrow.style.display = "block";
    document.exitFullscreen();
  }
});

$video.addEventListener("timeupdate", () => {
  $step = ($bar.offsetWidth / $video.duration) * $video.currentTime;
  $progressBar.style.width = $step + "px";
  // $progressBar.innerHTML ='<p class="timer">' + Math.round(($video.currentTime / 60) * 100) / 100;
  //   +"</p>";
});

$bar.addEventListener("click", (e) => {
  var x = e.pageX - $bar.offsetLeft;
  x = $video.duration * (x / $bar.offsetWidth);
  $video.currentTime = x;
});

$mutesvg.style.display = "none";

$sound.addEventListener("click", () => {
  if ($video.volume > 0) {
    $mutesvg.style.display = "block";
    $soundsvg.style.display = "none";
    $video.volume = 0;
    $volume.value = "0";
  } else {
    $mutesvg.style.display = "none";
    $soundsvg.style.display = "block";
    $video.volume = 0.5;
    $volume.value = "50";
  }
});

$container.addEventListener("mousemove", () => {
  $video_container.style.opacity = "1";
});

$container.addEventListener("mouseleave", () => {
  $video_container.style.opacity = "0";
});
