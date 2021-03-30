/******/ (() => { // webpackBootstrap
/*!******************************!*\
  !*** ./resources/js/todo.js ***!
  \******************************/
function Btn() {
  const status = document.getElementsByName('status');
  const all = document.querySelectorAll('.tasks');
  const work = document.querySelectorAll('.work');
  const complete = document.querySelectorAll('.complete');

  if (status[1].checked) {
    work.forEach(function (item) {
      item.closest('.tasks').style.display = "";
    });
    complete.forEach(function (item) {
      item.closest('.tasks').style.display = "none";
    });
  } else if (status[2].checked) {
    work.forEach(function (item) {
      item.closest('.tasks').style.display = "none";
    });
    complete.forEach(function (item) {
      item.closest('.tasks').style.display = "";
    });
  } else if (status[0].checked) {
    all.forEach(function (item) {
      item.closest('.tasks').style.display = "";
    });
  }
}

;
window.Btn = Btn;
/******/ })()
;