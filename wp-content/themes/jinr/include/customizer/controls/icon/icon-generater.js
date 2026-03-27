jQuery(document).ready(function ($) {
  "use strict";

  $(document).on("click", 'input[type="font"]', function () {
    if ($(this).siblings(".font-awesome-list").length < 1) {
      var $iconlist = $(".font-awesome-list-template").clone();
      $(this).after($iconlist.html());
      $(this).siblings(".font-awesome-list").fadeIn("slow");
    }
  });

  $(document).on("click", ".font-group li", function (event) {
    var val = $(this).data("font");
    $(this).parent().parent().siblings('input[type="font"]').attr("value", val);
    $(this).parent().parent().siblings('input[type="font"]').trigger("change");
    $(this)
      .parent()
      .parent()
      .fadeOut("slow", function () {
        $(this).remove();
      });
    event.preventDefault();
  });

  $(document).on("click", "#close", function (event) {
    $(this)
      .parent()
      .fadeOut("slow", function () {
        $(this).remove();
      });
  });

  $(document).on("keyup", 'input[type="font"]', function () {
    var value = $(this).val();
    var matcher = new RegExp(value, "gi");
    $(this)
      .next(".font-awesome-list")
      .children(".font-group")
      .children("li")
      .show()
      .not(function () {
        return matcher.test($(this).find("svg").attr("class"));
      })
      .hide();
  });
});
