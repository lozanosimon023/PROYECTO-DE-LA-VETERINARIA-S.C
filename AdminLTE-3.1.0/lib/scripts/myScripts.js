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
    url: "../../../Controlador/CtrolUsuarios.php",
    data: {
      nombre: $("#nombre").val(),
      precio: $("#precio").val(),
    },
    success: function (data) {
      alert(data);
      $("#nombre").val("");
      $("#precio").val("");
    },
  });
}
