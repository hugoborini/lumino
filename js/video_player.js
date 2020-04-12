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

console.log($video);
console.log($play);
console.log($backward);
console.log($forward);
console.log($volume);
console.log($fullscreen);
console.log($video.offsetWidth);
console.log($video_container);

$play.addEventListener("click", function () {
  if ($video.paused) {
    $video.play();
  } else {
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

$fullscreen.addEventListener("click", () => {
  $video_full.requestFullscreen();
  if (document.fullscreenElement) {
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

$bar.addEventListener("click", e => {
  var x = e.pageX;
  x = $video.duration * (x / $video.offsetWidth);
  $video.currentTime = x;
});
$sound.addEventListener("click", () => {
  if ($video.volume > 0) {
    $video.volume = 0;
    $sound.innerHTML = "<img class='mute_png' src='assets/icon/mute.png'>";
  } else {
    $video.volume = 0.5;
    $sound.innerHTML =
      '<svg width="42" height="49" viewBox="0 0 42 49" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M-0.432617 14.1322V34.8678H8.61407L26.7074 49.3828V-0.382812L8.61407 14.1322H-0.432617ZM7.32168 30.7207H3.44453V18.2793H7.32168V30.7207ZM22.8303 41.0885L11.1988 31.7575V17.2425L22.8303 7.91146V41.0885Z" fill="#FFC61B"/><path d="M37.1051 11.3036L34.3633 14.2363C39.654 19.8954 39.654 29.1044 34.3633 34.7635L37.1051 37.6962C43.9077 30.4198 43.9077 18.58 37.1051 11.3036Z" fill="#FFC61B"/><path d="M31.6212 17.1691L28.8799 20.1012C31.1471 22.5269 31.1471 26.4731 28.8799 28.8988L31.6212 31.8309C35.4004 27.7885 35.4004 21.2114 31.6212 17.1691Z" fill="#FFC61B"/></g><defs><clipPath id="clip0"><rect width="42" height="49" fill="white"/></clipPath></defs></svg> ';
  }
});

$video_container.addEventListener("mousemove", () => {
  // $video_container.style.transform = "translate(0px)";
  $video_container.style.opacity = "1";
});

$video_container.addEventListener("mouseleave", () => {
  $video_container.style.opacity = "0";
});
