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
    url: "../../../VSA/Controlador/CtrolUsuarios.php",
    data: {
      nombres: $("#nombres").val(),
      apellidos: $("#apellidos").val(),
      email: $("#email").val(),
      edad: $("#edad").val(),
      cel: $("#cel").val(),
      contrasena: $("#contrasena").val(),
    },
    success: function (data) {
      alert(data);
      $("#nombres").val("");
      $("#apellidos").val("");
      $("#email").val("");
      $("#edad").val("");
      $("#cel").val("");
      $("#contrasena").val("");
    },
  });
}

function guardarProductos() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolProductos.php",
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
    url: "../../../VSA/Controlador/CtrolListarUsuarios.php",
    data: {},
    success: function (data) {
      $("tbody").text("");
      $("tbody").append(data);
    },
  });
}

function listarProductos() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolListarProductos.php",
    data: {},
    success: function (data) {
      $("tbody").text("");
      $("tbody").append(data);
    },
  });
}

function listarPedidos() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolListarPedidos.php",
    data: {},
    success: function (data) {
      $("tbody").text("");
      $("tbody").append(data);
    },
  });
}

function guardarPedidos() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolPedidos.php",
    data: {
      direccion: $("#direccion").val(),
      celular: $("#celular").val(),
      total: $("#total").val(),
    },
    success: function (data) {
      alert(data);
      $("#cliente").val("");
      $("#direccion").val("");
      $("#celular").val("");
      $("#total").val("");
    },
  });
}

function guardarCitas() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolCitas.php",
    data: {
      nombrePaciente: $("#nombrePaciente").val(),
      nombreCliente: $("#nombreCliente").val(),
      tipoConsulta: $("#tipoConsulta").val(),
      fechayHora: $("#fechayHora").val(),
      estado: $("#estado").val(),
    },
    success: function (data) {
      alert(data);
      $("#nombrePaciente").val(""),
        $("#nombreCliente").val(""),
        $("#tipoConsulta").val(),
        $("#fechayHora").val();
      $("#estado").val();
    },
  });
}
