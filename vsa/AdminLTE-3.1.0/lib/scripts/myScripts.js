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
      listarUsuarios();
    },
  });
}

function eliminarUsuario(idUsuario) {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolEliminarUsuarios.php",
    data: {
      idUsuario: idUsuario,
    },
    success: function (data) {
      alert(data);
      listarUsuarios();
    },
  });
}

function buscarUsuario(id) {
  $("#ModificarUsuario").modal("show");
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolBuscarUsuario.php",
    data: {
      id: id,
    },
    success: function (data) {
      $("#bodyModificarUsuario").text("");
      $("#bodyModificarUsuario").append(data);
    },
  });
}

function actualizarUsuario() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolModificarUsuarios.php",
    data: {
      id: $("#idUsuario").val(),
      nombre: $("#nombre").val(),
      apellido: $("#apellido").val(),
      correo: $("#correo").val(),
      Contrasena: $("#Contrasena").val(),
    },
    success: function (data) {
      $("#ModificarUsuario").modal("hide");
      alert(data);
      $("#idUsuario").val("");
      $("#nombre").val("");
      $("#apellido").val("");
      $("#correo").val("");
      $("#Contrasena").val("");
      listarUsuarios();
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
      listarPedidos();
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

function buscarProducto(idProducto) {
  $("#ModificarProducto").modal("show");
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolBuscarProducto.php",
    data: {
      idProducto: idProducto,
    },
    success: function (data) {
      $("#bodyModificarProducto").text("");
      $("#bodyModificarProducto").append(data);
      listarTipoProductos();
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
      listarPedidos();
    },
  });
}

function eliminarPedido(idPedido) {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolEliminarPedidos.php",
    data: {
      idPedido: idPedido,
    },
    success: function (data) {
      alert(data);
      listarPedidos();
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

function guardarCitas() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolCitas.php",
    data: {
      Paciente: $("#paciente").val(),
      Cliente: $("#cliente").val(),
      TipoConsulta: $("#tipoConsulta").val(),
      Fecha_Hora: $("#Fecha").val(),
    },
    success: function (data) {
      alert(data);
      $("#paciente").val(""),
        $("#cliente").val(""),
        $("#tipoConsulta").val(""),
        $("#fecha").val("");
      listarCitas();
    },
  });
}

function listarCitas() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolListarCitas.php",
    data: {},
    success: function (data) {
      $("tbody").text("");
      $("tbody").append(data);
    },
  });
}

function listarTipoProductos() {
  $.ajax({
    type: "GET",
    url: "../../../VSA/Controlador/CtrolListarTipoProductos.php",
    data: {},
    success: function (data) {
      let select = document.querySelector("#tipo_producto");
      $("#tipo_producto").text("");
      $("#tipo_producto").append(data);
      $("#tipo_producto_Modal").text("");
      $("#tipo_producto_Modal").append(data);
      if (select.dataset.valueid !== "") {
        select.value = select.dataset.valueid;
      }
    },
  });
}

function actualizarProducto() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolModificarProductos.php",
    data: {
      nombre: $("#nombreModal").val(),
      Precio: $("#PrecioModal").val(),
      idTipoProducto: $("#tipo_producto").val(),
      idProducto: $("#idProducto").val(),
    },
    success: function (data) {
      $("#ModificarProducto").modal("hide");
      alert(data);
      $("#nombre").val(),
        $("#Precio").val(),
        $("#tipo_producto").val(),
        listarProductos();
    },
  });
}
