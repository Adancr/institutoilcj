$(window).scroll(function() {
  if ($("#menu").offset().top > 56) {
      $("#menu").addClass("bg-inverse");
  } else {
      $("#menu").removeClass("bg-inverse");
  }
});

