// ハンバーガーメニューがクリックされたら、openクラスを付与/削除する
const hamburgerMenu = document.querySelector(".hamburger_menu");
const overlay = document.querySelector(".global_menu");
hamburgerMenu.addEventListener("click", function () {
  this.classList.toggle("open");
  overlay.classList.toggle("open");
});
