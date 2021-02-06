/******/ (() => { // webpackBootstrap
/*!******************************!*\
  !*** ./resources/js/todo.js ***!
  \******************************/
function Btn() {
  check0 = document.RadioForm.all.checked;
  check1 = document.RadioForm.work.checked;
  check2 = document.RadioForm.complete.checked;
  var form = document.getElementsByName('status');
  console.log(form);
  var all = document.querySelectorAll('.all');
  console.log(all);
  var work = document.querySelectorAll('.work');
  console.log(work);
  var complete = document.querySelectorAll('.complete');
  console.log(complete);

  if (check1 == true) {
    work.forEach(function (item) {
      item.closest('.all').style.display = "";
    });
    complete.forEach(function (item) {
      item.closest('.all').style.display = "none";
    });
  } else if (check2 == true) {
    work.forEach(function (item) {
      item.closest('.all').style.display = "none";
    });
    complete.forEach(function (item) {
      item.closest('.all').style.display = "";
    });
  } else if (check0 == true) {
    all.forEach(function (item) {
      item.closest('.all').style.display = "";
    });
  }
}

;
window.Btn = Btn;
/******/ })()
;