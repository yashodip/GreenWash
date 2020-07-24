$(document).ready(function () {
  /*index.php*/
  $('[data-toggle="popover"]').popover();
  $('[data-toggle="tooltip"]').tooltip();
  /*price list file*/
  $("[href='#wash-and-iron']").click(function () {
    $("#ironing, #dry-cleaning").hide();
    $("#wash-and-iron").show();
    $("#w").addClass("active lead");
    $("#i").removeClass("active lead");
    $("#d").removeClass("active lead");
  });
  $("[href='#ironing']").click(function () {
    $("#wash-and-iron, #dry-cleaning").hide();
    $("#ironing").show();
    $("#i").addClass("active lead");
    $("#w").removeClass("active lead");
    $("#d").removeClass("active lead");
  });
  $("[href='#dry-cleaning']").click(function () {
    $("#wash-and-iron,#ironing").hide();
    $("#dry-cleaning").show();
    $("#d").addClass("active lead");
    $("#i").removeClass("active lead");
    $("#w").removeClass("active lead");
  });
});
$.fn.formToggle = function (chkbx, name) {
  $(name).toggle(500, function () {
    if ($(this).is(":hidden")) {
      $(this).find(":input").val("");
    }
  });
};
