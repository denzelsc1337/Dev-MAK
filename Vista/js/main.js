// ONLY LOGIN
const toForgot = document.querySelector("#toForgot");
toForgot.addEventListener("click", () => {
  const contentLogin = document.querySelectorAll(".content");
  contentLogin.forEach((element) => {
    if (element.classList.contains("forgot")) {
      element.classList.remove("hide");
    } else {
      element.classList.add("hide");
    }
  });
});
const toLogin = document.querySelector("#toLogin");
toLogin.addEventListener("click", () => {
  const contentLogin = document.querySelectorAll(".content");
  contentLogin.forEach((element) => {
    if (!element.classList.contains("forgot")) {
      element.classList.remove("hide");
    } else {
      element.classList.add("hide");
    }
  });
});
// ONLY LOGIN

$(function () {
  "use strict";

  $(".form-control").on("input", function () {
    var $field = $(this).closest(".form-group");
    if (this.value) {
      $field.addClass("field--not-empty");
    } else {
      $field.removeClass("field--not-empty");
    }
  });
});
