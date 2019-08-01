const nav = document.querySelector("header nav");
const btn = document.querySelector(".btn-menu");
// const nav = document.querySelector("head nav");

btn.addEventListener("click", function() {
  nav.classList.toggle("show");
});
