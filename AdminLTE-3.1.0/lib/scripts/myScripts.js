function cargar(UrlMenu) {
  $.ajax({
    type: "POST",
    url: UrlMenu,
    data: {},
    success: function (datos) {
      $("#tabla").html(datos);
    },
  });
}
