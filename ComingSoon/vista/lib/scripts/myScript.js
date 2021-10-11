function cargar(urlMenu){
    $.ajax({   
        type: "POST",
        url:urlMenu,
        data:{},
        success: function(datos){       
            $('#qCarga').html(datos);
        }
    });
}

function guardarCliente(){
    if($('#Edad').val() != ''){
        $.ajax({
            type: "POST",
            url: "../Controlador/ctrolClientes.php",
            data: {
                'Usuario': $('#Usuario').val(),
                'Contrasena': $('#Contrasena').val(),
                'Nombre': $('#Nombre').val(),
                'Telefono': $('#Telefono').val(),
                'Dirección': $('#Dirección').val(),
                'Ciudad': $('#Ciudad').val(),
                'Barrio': $('#Barrio').val(),
                'Correo': $('#Correo').val(),
                'Edad': $('#Edad').val(),
                'Tipodedocumento': $('#Tipodedocumento').val(),
                'Numerodedocumento': $('#Numerodedocumento').val(),
                
                'metodo': 'g'
            },
            success: function(data){
                alert(data);
                $('#Usuario').val('');
                $('#Contrasena').val('');
                $('#Nombre').val('');
                $('#Telefono').val('');
                $('#Direccion').val('');
                $('#Ciudad').val('');
                $('#Barrio').val('');
                $('#Correo').val('');
                $('#Edad').val('');
                $('#Tipodedocumento').val('');
                $('#Numerodedocumento').val('');
        
          }  
        });
    }else{
        alert('Llene todos los campos del formulario.');
    }
    
}

function listarClientes(){
    $.ajax({   
        type: "POST",
        url:'../Controlador/ctrolClientes.php',
        data:{'metodo':"l"},
        success: function(datos){       
            $('tbody').text("");
            $('tbody').append(datos);
        }
    });
}

function eliminarCliente(idCliente){
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolClientes.php",
        data: {'x': idCliente,
                'metodo': "e"},
        success: function(data){
            alert(data);
            listarClientes();
        }        
    });
}
function guardarProducto(){
    if($('#Precio_Unitario').val() != ''){
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolProductos.php",
        data: {
            'nombre': $('#nombre').val(),
            'cantidadvolumen': $('#Cantidad_Volumen').val(),
            'preciounitario': $('#Precio_Unitario').val(),
            'proveedor': $('#proveedor').val(),
            'metodo': 'g'
        },
        success: function(data){
            alert(data);
            $('#Nombre').val('');
            $('#Cantidad_Volumen').val('');
            $('#Precio_Unitario').val('');       
      }  
    });
}else{
    alert('Llene todos los campos del formulario.');
} 
}

function listarProductos(){
    $.ajax({   
        type: "POST",
        url:'../Controlador/ctrolProductos.php',
        data:{'metodo':"l"},
        success: function(datos){       
            $('tbody').text("");
            $('tbody').append(datos);
        }
    });
  
}




function guardarProveedores(){
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolProveedores.php",
        data: {
            'Nombre': $('#Nombre').val(),
            'Telefono': $('#Telefono').val(),
            'Correo': $('#Correo').val(),
            'Ciudad': $('#Ciudad').val(),
            'metodo': 'g'
        },
        success: function(data){
            alert(data);
            $('#Nombre').val('');
            $('#Telefono').val('');
            $('#Correo').val('');
            $('#Ciudad').val('');
            listarProveedores();
    
      }  
    });
}

function listarProveedores(){
    $.ajax({   
        type: "POST",
        url:'../Controlador/ctrolProveedores.php',
        data:{'metodo':"l"},
        success: function(datos){       
            $('tbody').text("");
            $('tbody').append(datos);
        }
    });
}

function listarComboProveedores(){
    $.ajax({   
        type: "POST",
        url:'../Controlador/ctrolProveedores.php',
        data:{'metodo':"lc"},
        success: function(datos){       
            $('#proveedor').text("");
            $('#proveedor').append(datos);
        }
    });
}

function listarComboPedidos(){
    $.ajax({   
        type: "POST",
        url:'../Controlador/ctrolPedidos.php',
        data:{'metodo':"lc"},
        success: function(datos){       
            $('#pedido').text("");
            $('#pedido').append(datos);
        }
    });
}

function listarComboProductos(){
    $.ajax({   
        type: "POST",
        url:'../controlador/ctrolProductos.php',
        data:{'metodo':"lc"},
        success: function(datos){       
            $('#producto').text("");
            $('#producto').append(datos);
        }
    });
}

function listarComboClientes(){
    $.ajax({   
        type: "POST",
        url:'../controlador/ctrolClientes.php',
        data:{'metodo':"lc"},
        success: function(datos){       
            $('#cliente').text("");
            $('#cliente').append(datos);
        }
    });
}

function listarPedidos(){
    $.ajax({   
        type: "POST",
        url:'../Controlador/ctrolPedidos.php',
        data:{'metodo':"l"},
        success: function(datos){       
            $('tbody').text("");
            $('tbody').append(datos);
        }
    });
}

function guardarPedidos(){
    if($('#Total').val() != ''){
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolPedidos.php",
        data: {
            'Fecha': $('#Fecha').val(),
            'Total': $('#Total').val(),
            'cliente': $('#cliente').val(),
            'metodo': 'g'
        },
        success: function(data){
            alert(data);
            $('#Fecha').val('');
            $('#Total').val('');
                 
      }  
    });
}else{
    alert('Llene todos los campos del formulario.');
}
}

function guardarAdministradores(){
    if($('#Correo').val() != ''){
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolAdministradores.php",
        data: {
            'Usuario': $('#Usuario').val(),
            'Contrasena': $('#Contrasena').val(),
            'Nombre': $('#Nombre').val(),
            'Telefono': $('#Telefono').val(),
            'Correo': $('#Correo').val(),
            'metodo': 'g'
        },
        success: function(data){
            alert(data);
            $('#Usuario').val('');
            $('#Contrasena').val('');
            $('#Nombre').val('');
            $('#Telefono').val('');
            $('#Correo').val('');
           
    
      }  
    });
}else{
    alert('Llene todos los campos del formulario.');
}
}

function listarAdministradores(){
    $.ajax({   
        type: "POST",
        url:'../Controlador/ctrolAdministradores.php',
        data:{'metodo':"l"},
        success: function(datos){       
            $('tbody').text("");
            $('tbody').append(datos);
        }
    });
}

function listarDetallePedido(){
    $.ajax({   
        type: "POST",
        url:'../Controlador/ctrolDetallePedido.php',
        data:{'metodo':"l"},
        success: function(datos){       
            $('tbody').text("");
            $('tbody').append(datos);
        }
    });
}

function guardarDetallePedido(){
    if($('#Subtotal').val() != ''){

    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolDetallePedido.php",
        data: {
            'Cantidad': $('#Cantidad').val(),
            'Subtotal': $('#Subtotal').val(),
            'pedido': $('#pedido').val(),
            'producto': $('#producto').val(),
            'metodo': 'g'
        },
        success: function(data){
            alert(data);
            $('#Cantidad').val('');
            $('#Subtotal').val('');  
            listarDetallePedido();     
      }  
    });
}else{
    alert('Llene todos los campos del formulario.');
}
}

function eliminarAdministradores (id_Administrador){
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolAdministradores.php",
        data: {'x': id_Administrador,
                'metodo': "e"},
        success: function(data){
            alert(data);
            listarAdministradores();
        }        
    });
}

function eliminarProductos (idProducto){
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolProductos.php",
        data: {'x': idProducto,
                'metodo': "e"},
        success: function(data){
            alert(data);
            listarProductos();
        }        
    });
}

function eliminarProveedores (idProveedor){
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolProveedores.php",
        data: {'x': idProveedor,
                'metodo': "e"},
        success: function(data){
            alert(data);
            listarProveedores();
        }        
    });
}

function eliminarDetallePedido (idDetallepedido){
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolDetallePedido.php",
        data: {'x': idDetallepedido,
                'metodo': "e"},
        success: function(data){
            alert(data);
            listarDetallePedido();
        }        
    });
}

function guardarDatos(){
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolProveedores.php",
        data: {
            'Nombre': $('#Nombre').val(),
            'Telefono': $('#Telefono').val(),
            'Correo': $('#Correo').val(),
            'Ciudad': $('#Ciudad').val(),
            'metodo': 'g'
        },
        success: function(data){
            alert(data);
            $('#Nombre').val('');
            $('#Telefono').val('');
            $('#Correo').val('');
            $('#Ciudad').val('');
            listarProveedores();
    
      }  
    });
}
function modificarUsuarios() {
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolClientes.php",
        data: {
            'idCliente': $('#idClienteM').val(),
            'Usuario': $('#UsuarioM').val(),
            'Contrasena': $('#ContrasenaM').val(),
            'Nombre': $('#NombreM').val(),
            'Telefono': $('#TelefonoM').val(),
            'Direccion': $('#DireccionM').val(),
            'Ciudad': $('#CiudadM').val(),
            'Barrio': $('#BarrioM').val(),
            'Correo': $('#BarrioM').val(),
            'Edad': $('#EdadM').val(),
            'Tipodedocumento': $('#TipodedocumentoM').val(),
            'Numerodedocumento': $('#NumerodedocumentoM').val(),
            'metodo': "m"
        },
        success: function (data) {
            alert(data);
            listarClientes();
                $('#UsuarioM').val('');
                $('#ContrasenaM').val('');
                $('#NombreM').val('');
                $('#DireccionM').val('');
                $('#CiudadM').val('');
                $('#TelefonoM').val('');
                $('#BarrioM').val('');
                $('#CorreoM').val('');
                $('#EdadM').val('');
                $('#TipodedocumentoM').val('');
                $('#NumerodedocumentoM').val('');
        }
    });
}

function cargarClientes(idCliente){
    $('#modalModificarClientes').modal("show");
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolClientes.php",
        data: {
            'idCliente': idCliente,
            'metodo': "cc"
        },
        success: function (data) {
            $('#bodyModificarUsuario').text('');
            $('#bodyModificarUsuario').append(data);
        }
    });
}
function modificarProductos() {
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolClientes.php",
        data: {
            'idProducto': $('#idProductoM').val(),
            'NombreM': $('#NombreM').val(),
            'Cantidad_VolumenM': $('#Cantidad_VolumenM').val(),
            'Precio_UnitarioM': $('#Precio_UnitarioM').val(),
            
            'metodo': "m"
        },
        success: function (data) {
            alert(data);
            listarClientes();
                $('#NombreM').val('');
                $('#Cantidad_VolumenM').val('');
                $('#Precio_UnitarioM').val('');        
        }
    });
}

function cargarProductos(idProducto){
    $('#modalModificarProductos').modal("show");
    $.ajax({
        type: "POST",
        url: "../Controlador/ctrolProductos.php",
        data: {
            'idProducto': idProducto,
            'metodo': "cc"
        },
        success: function (data) {
            $('#bodyModificarProducto').text('');
            $('#bodyModificarProducto').append(data);
        }
    });
}