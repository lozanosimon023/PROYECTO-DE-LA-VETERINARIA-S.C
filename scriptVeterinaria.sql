 CREATE TABLE tbl_cliente(
     idCliente INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
     Nombre VARCHAR (30) NOT NULL,
     Celular VARCHAR (10) NOT NULL,
     Correo VARCHAR (75) NOT NULL
 );
 
 CREATE TABLE tbl_pedido(
     idPedido INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
     idCliente INT (11) NOT NULL,
     NombreCliente VARCHAR (30) NOT NULL,
     Direccion VARCHAR (15) NOT NULL,
     Celular VARCHAR (10) NOT NULL
 );
 
 CREATE TABLE tbl_detalle_pedido(
     idDetallePed INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
     idPedido INT (11) NOT NULL,
     idProducto INT (11) NOT NULL,
     Precio DOUBLE NOT NULL,
     Cantidad INT (30) NOT NULL
 );
 
 CREATE TABLE tbl_productos(
     idProducto INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
     NombreProcuto VARCHAR (25) NOT NULL,
     Precio DOUBLE NOT NULL
 );
 
 CREATE TABLE tbl_citas(
     idCitas INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
     idPaciente INT (11) NOT NULL,
     idCliente INT (11) NOT NULL,
     idVeterinaria INT (11) NOT NULL,
     TipoConsulta VARCHAR (10) NOT NULL,
     Fecha_Hora DATETIME NOT NULL,
     Estado BOOLEAN NOT NULL 
 );
 
 CREATE TABLE tbl_paciente(
     idPaciente INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
     NombrePaciente VARCHAR (10) NOT NULL,
     Edad INT (11) NOT NULL,
     Sexo VARCHAR (10) NOT NULL,
     NombreAcompañante Varchar (30),
     Estado BOOLEAN 
 );
 
 CREATE TABLE tbl_clinicas_veterinarias(
     idVeterinaria INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
     Estado BOOLEAN 
 );

 CREATE TABLE tbl_tipo_Consulta(
     idTipoConsulta INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
     Vacunacion VARCHAR (10) NOT NULL,
     Profilaxis VARCHAR (10) NOT NULL,
     Ecografias VARCHAR (9) NOT NULL,
     Cirugias Varchar (8) NOT NULL
 );

 CREATE TABLE tbl_tipo_producto(
   idTipoProducto INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   idProducto INT (11) NOT NULL,
   Tipo VARCHAR (20) NOT NULL
);
 
 ALTER TABLE tbl_pedido
 ADD CONSTRAINT FK_cliente_pedido FOREIGN KEY (idCliente)
 REFERENCES tbl_cliente (idCliente);

 ALTER TABLE tbl_citas
 ADD CONSTRAINT Fk_cliente_citas FOREIGN KEY (idCliente)
 REFERENCES tbl_cliente (idCliente);

 ALTER TABLE tbl_detalle_pedido
 ADD CONSTRAINT Fk_detalle_pedido FOREIGN KEY (idPedido)
 REFERENCES tbl_pedido (idPedido);

 ALTER TABLE tbl_detalle_pedido
 ADD CONSTRAINT Fk_detalle_productos FOREIGN KEY (idProducto)
 REFERENCES tbl_productos (idProducto);

 ALTER TABLE tbl_citas
 ADD CONSTRAINT Fk_citas_paciente FOREIGN KEY (idPaciente)
 REFERENCES tbl_paciente (idPaciente);

 ALTER TABLE tbl_citas
 ADD CONSTRAINT Fk_citas_clinicasVeterinarias FOREIGN KEY (idVeterinaria)
 REFERENCES tbl_clinicas_veterinarias (idVeterinaria);

 ALTER TABLE tbl_paciente
 ADD CONSTRAINT Fk_citas_paciente FOREIGN KEY (idCliente)
 REFERENCES tbl_cliente (idCliente);

 ALTER TABLE tbl_citas
 ADD CONSTRAINT Fk_citas_tipoConsulta FOREIGN KEY (idTipoConsulta)
 REFERENCES tbl_tipo_Consulta (idTipoConsulta);

 ALTER TABLE tbl_productos
 ADD CONSTRAINT Fk_productos_tipoProducto FOREIGN KEY (idTipoProducto)
 REFERENCES tbl_tipo_producto (idTipoProducto);


 









 