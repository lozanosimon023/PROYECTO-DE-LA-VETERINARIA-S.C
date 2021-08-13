function cargar(urlMenu) {
  $.ajax({
    type: "POST",
    url: urlMenu,
    data: {},
    success: function (datos) {
      $("#qCarga").html(datos);
    },
  });
}

function guardarUsuarios() {
  $.ajax({
    type: "POST",
    url: "../../../Controlador/CtrolUsuarios.php",
    data: {
      nombres: $("#nombres").val(),
      apellidos: $("#apellidos").val(),
      email: $("#email").val(),
      edad: $("#edad").val(),
      cel: $("#cel").val(),
      contraseña: $("#contraseña").val(),
    },
    success: function (data) {
      alert(data);
      $("#nombres").val("");
      $("#apellidos").val("");
      $("#email").val("");
      $("#edad").val("");
      $("#cel").val("");
      $("#contraseña").val("");
    },
  });
}

function guardarProductos() {
  $.ajax({
    type: "POST",
    url: "../../../Controlador/CtrolProductos.php",
    data: {
      nombre: $("#nombre").val(),
      precio: $("#precio").val(),
      tipo_producto: $("#tipo_producto").val(),
    },
    success: function (data) {
      alert(data);
      $("#nombre").val("");
      $("#precio").val("");
      $("#tipo_producto").val();
    },
  });
}

function listarUsuarios() {
  $.ajax({
    type: "POST",
    url: "../../../Controlador/CtrolListarUsuarios.php",
    data: {},
    success: function (data) {
      $("tbody").text("");
      $("tbody").append(data);
    },
  });
}
