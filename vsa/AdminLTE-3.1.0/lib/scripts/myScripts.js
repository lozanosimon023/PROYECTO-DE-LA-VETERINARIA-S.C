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
      cel: $("#cel").val(),
      contrasena: $("#contrasena").val(),
    },
    success: function (data) {
      alert(data);
      $("#nombres").val("");
      $("#apellidos").val("");
      $("#email").val("");
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

function eliminarDetallePedido(idDetallePed) {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolEliminarDetallePedido.php",
    data: {
      idDetallePed: idDetallePed,
    },
    success: function (data) {
      alert(data);
      listarDetallePedido($("#idPedido").val());
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
      listarProductos();
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

function actualizarProducto() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolModificarProductos.php",
    data: {
      idProducto: $("#idProducto_Modal").val(),
      nombre: $("#nombreModal").val(),
      Precio: $("#PrecioModal").val(),
      idTipoProducto: $("#tipo_producto_Modal").val(),
    },
    success: function (data) {
      $("#ModificarProducto").modal("hide");
      alert(data);
      $("#nombre").val(),
        $("#Precio").val(),
        $("#tipo_producto_Modal").val(),
        listarProductos();
    },
  });
}

function guardarPedidos() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolPedidos.php",
    data: {
      cliente: $("#clientePedido").val(),
      celular: $("#celular").val(),
      direccion: $("#direccion").val(),
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

function ActualizarPedido() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolModificarPedido.php",
    data: {
      cliente: $("#cliente_Modal").val(),
      Direccion: $("#DireccionModal").val(),
      celular: $("#celular_Modal").val(),
      idPedido: $("#idPedido").val(),
    },
    success: function (data) {
      $("#ModificarPedido").modal("hide");
      alert(data);
      $("#cliente_Modal").val(),
        $("#DireccionModal").val(),
        $("#celular").val(),
        $("#idPedido").val(),
        listarPedidos();
    },
  });
}

function BuscarPedido(idPedido) {
  $("#ModificarPedido").modal("show");
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolBuscarPedido.php",
    data: {
      idPedido: idPedido,
    },
    success: function (data) {
      $("#bodyModificarPedido").text("");
      $("#bodyModificarPedido").append(data);
      listarTipoProductos();
      listarClientesPrincipal("#cliente_Modal");
    },
  });
}

function DetallePedido(idPedido) {
  listarDetallePedido(idPedido);
  $("#DetallePedido").modal("show");
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolDetallePedido.php",
    data: {
      idPedido: idPedido,
    },
    success: function (data) {
      $("#formAgregarProducto").text("");
      $("#formAgregarProducto").append(data);
      listadoProductos();
    },
  });
}

function listarDetallePedido(idPedido) {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolListadoDetallePedido.php",
    data: {
      idPedido: idPedido,
    },
    success: function (data) {
      $("#tablaListadoProductos").text("");
      $("#tablaListadoProductos").append(data);
    },
  });
}

function listarClientesPrincipal(idSelect) {
  $.ajax({
    type: "GET",
    url: "../../../VSA/Controlador/CtrolListarClientes.php",
    data: {},
    success: function (data) {
      $(idSelect).text("");
      $(idSelect).append(data);
      let select = document.querySelector(idSelect);
      if (select.dataset.valueid !== "") {
        select.value = select.dataset.valueid;
      }
    },
  });
}

function listadoProductos() {
  $.ajax({
    type: "GET",
    url: "../../../VSA/Controlador/CtrolListadoProductos.php",
    data: {},
    success: function (data) {
      let select = document.querySelector("#Producto_Modal");
      $("#Producto_Modal").text("");
      $("#Producto_Modal").append(data);
      if (select.dataset.valueid !== "") {
        select.value = select.dataset.valueid;
      }
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
      let selectModal = document.querySelector("#tipo_producto_Modal");
      $("#tipo_producto").text("");
      $("#tipo_producto").append(data);
      $("#tipo_producto_Modal").text("");
      $("#tipo_producto_Modal").append(data);
      if (select.dataset.valueid !== "") {
        select.value = select.dataset.valueid;
      }
      if (selectModal.dataset.valueid !== "") {
        selectModal.value = selectModal.dataset.valueid;
      }
    },
  });
}

function AgregarProducto(idPedido) {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolAgregarProducto.php",
    data: {
      idPedido: idPedido,
      idProducto: $("#Producto_Modal").val(),
      Cantidad: $("#CantidadModal").val(),
    },
    success: function (data) {
      alert(data);
      $("#Producto_Modal").val(""), $("#CantidadModal").val("");
      listarDetallePedido(idPedido);
    },
  });
}

function guardarCitas() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolCitas.php",
    data: {
      Cliente: $("#clienteCita").val(),
      Paciente: $("#paciente").val(),
      TipoConsulta: $("#tipoConsulta").val(),
      Fecha_Hora: $("#Fecha").val(),
    },
    success: function (data) {
      alert(data);
      // let select = document.querySelector("#clienteCita");
      // select.dataset.valueid = "";
      $("#paciente").val(""),
        $("#clienteCita").val(""),
        $("#tipoConsulta").val(""),
        $("#fecha").val("");
      listarCitas();
    },
  });
}

function eliminarCita(idCita) {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolEliminarCita.php",
    data: {
      idCita: idCita,
    },
    success: function (data) {
      alert(data);
      listarCitas();
    },
  });
}

function buscarCita(idCita) {
  $("#ModificarCita").modal("show");
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolBuscarCita.php",
    data: {
      idCita: idCita,
    },
    success: function (data) {
      $("#bodyModificarCita").text("");
      $("#bodyModificarCita").append(data);
      listarClientesPrincipal("#clienteCita_Modal");
      listarPacientes();
      listarTipoConsulta();
    },
  });
}

function actualizarCita() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolModificarCita.php",
    data: {
      idCita: $("#idCita").val(),
      cliente: $("#clienteCita_Modal").val(),
      paciente: $("#paciente_Modal").val(),
      tipoConsulta: $("#tipoConsulta_Modal").val(),
      fecha: $("#Fecha_Modal").val(),
    },
    success: function (data) {
      $("#ModificarCita").modal("hide");
      alert(data);
      $("#idCita").val("");
      $("#clienteCita_Modal").val("");
      $("#paciente_Modal").val("");
      $("#tipoConsulta_Modal").val("");
      $("#Fecha_Modal").val("");

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

function listarPacientes() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolListarPacientes.php",
    data: {},
    success: function (data) {
      $("#paciente").text("");
      $("#paciente").append(data);
      $("#paciente_Modal").text("");
      $("#paciente_Modal").append(data);

      let select = document.querySelector("#paciente_Modal");
      if (select.dataset.valueid !== "") {
        select.value = select.dataset.valueid;
      }
    },
  });
}

function listarTipoConsulta() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolListarTipoConsulta.php",
    data: {},
    success: function (data) {
      $("#tipoConsulta").text("");
      $("#tipoConsulta").append(data);
      $("#tipoConsulta_Modal").text("");
      $("#tipoConsulta_Modal").append(data);

      let select = document.querySelector("#tipoConsulta_Modal");
      if (select.dataset.valueid !== "") {
        select.value = select.dataset.valueid;
      }
    },
  });
}

function AgregarCliente() {
  $("#CreartCliente").modal("show");
}

function guardarCliente() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolAgregarCliente.php",
    data: {
      nombres: $("#nombres").val(),
      celular: $("#celular").val(),
      email: $("#email").val(),
      contrasena: $("#contrasena").val(),
    },
    success: function (data) {
      $("#CreartCliente").modal("hide");
      listarClientesPrincipal("#clienteCita");
      alert(data);
      $("#nombres").val("");
      $("#celular").val("");
      $("#email").val("");
      $("#contrasena").val("");
    },
  });
}

function AgregarPaciente() {
  listarClientesPrincipal("#clientePaciente");
  $("#CrearPaciente").modal("show");
}

function guardarPaciente() {
  $.ajax({
    type: "POST",
    url: "../../../VSA/Controlador/CtrolAgregarPaciente.php",
    data: {
      paciente: $("#nombrePaciente").val(),
      cliente: $("#clientePaciente").val(),
      edad: $("#edadPaciente").val(),
      sexo: $("#sexoPaciente").val(),
    },
    success: function (data) {
      $("#CrearPaciente").modal("hide");
      listarPacientes();
      alert(data);
      $("#clientePaciente").val("");
      $("#nombrePaciente").val("");
      $("#edadPaciente").val("");
      $("#sexoPaciente").val("");
    },
  });
}
