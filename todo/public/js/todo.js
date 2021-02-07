/******/ (() => { // webpackBootstrap
/*!******************************!*\
  !*** ./resources/js/todo.js ***!
  \******************************/
function Btn() {
  // check0 = document.RadioForm.all.checked;
  // check1 = document.RadioForm.work.checked;
  // check2 = document.RadioForm.complete.checked;
  var status = document.getElementsByName('status');
  var all = document.querySelectorAll('.tasks');
  var work = document.querySelectorAll('.work');
  var complete = document.querySelectorAll('.complete');

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