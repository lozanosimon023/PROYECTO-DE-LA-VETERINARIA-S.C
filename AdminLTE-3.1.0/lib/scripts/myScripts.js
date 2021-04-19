function cargar(menu) {
  $.ajax({
    type: "POST",
    url: menu,
    data: {},
    success: function (datos) {
      $("#tabla").html(datos);
    },
  });
}
