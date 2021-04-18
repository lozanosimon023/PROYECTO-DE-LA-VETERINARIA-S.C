function cargar(urlMenu) {
  $.ajax({
    type: "POST",
    url: urlMenu,
    data: {},
    success: function (datos) {
      $("#tabla").html(datos);
    },
  });
}
