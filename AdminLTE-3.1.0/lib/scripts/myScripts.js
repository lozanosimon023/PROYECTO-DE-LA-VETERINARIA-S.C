function cargar(url ){
    if(menu = "")
    var url="tabla.php"
    $.ajax({   
        type: "POST",
        url:url,
        data:{},
        success: function(datos){       
            $('#tabla').html(datos);
        }
    });
}