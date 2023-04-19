$(function () {
  // URL BASE DO PROJETO
  getBase = $("link[rel= 'base']").attr("href");

  $(".jtheme_login").click(function (e) {
    e.preventDefault();

    if (!$(".theme_login").length) {
      var loginBox = '<div class="theme_login">';
      loginBox += '<div class="theme_login_box radius">';
      loginBox += '<header>';
      loginBox += '<h1>Fazer Login:</h1>';
      loginBox += '<p>Informe seu nome e e-mail para fazer login e acessar seus pedidos.</p>';
      loginBox += '</header>';
      loginBox += '<form>';
      loginBox += '<input class="radius" type="email" placeholder="E-mail:" />';
      loginBox += '<input class="radius" type="email" placeholder="E-mail:" />';
      loginBox += '<a class="btn transition radius icon-success" href="' + getBase + '/conta" title="Minha conta">Fazer Login</a>';
      loginBox += '</form>';
      loginBox += '<a href="#" title="Recuperar senha" class="theme_login_box_recover transition icon-alert">Esqueci minha senha</a>';
      loginBox += '</div>';
      loginBox += '</div>';

      $("body").prepend(loginBox);
      $(".theme_login").fadeIn(200).css("display", "flex");

      $("body").click(function (e) {
        if ($(e.target).attr("class") === "theme_login") {
          $(".theme_login").fadeOut(200, function () {
            $(this).remove();
          });
        }
      });
    }
  });
});