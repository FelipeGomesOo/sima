function togglescroll() {
  $("body").on("touchstart", function (o) {
    $("body").hasClass("noscroll") && o.preventDefault();
  });
}
togglescroll(),
  $(".menu-usuario, .fechar").click(function () {
    $(".mobilenav").fadeToggle(500),
      $(".top-menu").toggleClass("top-animate"),
      $("body").toggleClass("menu-ligado"),
      $(".mid-menu").toggleClass("mid-animate"),
      $(".bottom-menu").toggleClass("bottom-animates");
  });
