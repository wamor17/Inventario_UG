drop database if exists inventarioUG;
create database inventarioUG; 
use  inventarioUG;

CREATE TABLE IF NOT EXISTS login (
id_login int NOT NULL auto_increment,
correo varchar(100) NOT NULL,
password varchar(100),
primary key(id_login)
);

CREATE TABLE IF NOT EXISTS puesto (
id_puesto int NOT NULL auto_increment,
nombre varchar(50) NOT NULL,
descripcion varchar(100),
fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
primary key(id_puesto)
);

CREATE TABLE IF NOT EXISTS campus (
id_campus int NOT NULL auto_increment,
nombre varchar(50) NOT NULL,
primary key(id_campus)
);

CREATE TABLE IF NOT EXISTS sede (
id_sede int NOT NULL auto_increment,
id_campus int NOT NULL,
nombre varchar(50) NOT NULL,
primary key(id_sede),
foreign key(id_campus) references campus(id_campus)
);

CREATE TABLE IF NOT EXISTS entidad (
id_entidad int NOT NULL auto_increment,
id_sede int NOT NULL,
nombre varchar(50) NOT NULL,
primary key(id_entidad),
foreign key(id_sede) references sede(id_sede)
);

CREATE TABLE IF NOT EXISTS empleado (
id_empleado int NOT NULL auto_increment,
id_login int NOT NULL,
id_puesto int NOT NULL,
id_entidad int NOT NULL,
nombre varchar(50) NOT NULL,
ape_paterno varchar(50) NOT NULL,
ape_materno varchar(50) NOT NULL,
NUE int NOT NULL,
fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
primary key(id_empleado),
foreign key(id_login) references login(id_login),
foreign key(id_puesto) references puesto(id_puesto),
foreign key(id_entidad) references entidad(id_entidad)
);

CREATE TABLE IF NOT EXISTS contacto (
id_contacto int NOT NULL auto_increment,
id_empleado int NOT NULL,
pais varchar(50) NOT NULL,
estado varchar(50) NOT NULL,
calle varchar(50) NOT NULL,
colonia varchar(50) NOT NULL,
CP varchar(10) NOT NULL,
telefono varchar(15),
primary key(id_contacto),
foreign key(id_empleado) references empleado(id_empleado)
);

CREATE TABLE IF NOT EXISTS categoria (
id_categoria int NOT NULL auto_increment,
nombre varchar(50) NOT NULL,
descripcion varchar(500) NOT NULL,
primary key(id_categoria)
);

CREATE TABLE IF NOT EXISTS sub_categoria (
id_subcategoria int NOT NULL auto_increment,
id_categoria int NOT NULL,
nombre varchar(50) NOT NULL,
descripcion varchar(500) NOT NULL,
primary key(id_subcategoria),
foreign key(id_categoria) references categoria(id_categoria)
);

CREATE TABLE IF NOT EXISTS sub_division (
id_subdivision int NOT NULL auto_increment,
id_subcategoria int NOT NULL,
nombre varchar(50) NOT NULL,
descripcion varchar(500) NOT NULL,
primary key(id_subdivision),
foreign key(id_subcategoria) references sub_categoria(id_subcategoria)
);

CREATE TABLE IF NOT EXISTS objeto (
	id_objeto int NOT NULL auto_increment,
	id_categoria int NOT NULL,
	id_subcategoria int NOT NULL,
	id_subdivision int NOT NULL,
	id_empleado int NOT NULL,
	no_inventario bigint NOT NULL,
	no_activofijo bigint NOT NULL,
	marca varchar(200) NOT NULL,
	modelo varchar(200) NOT NULL,
	no_serie varchar(500) NOT NULL,
	descripcion varchar(500) NOT NULL,
	precio double NOT NULL,
	fecha_compra DATE,
	foto varchar(1000) NOT NULL,
	observaciones varchar(500),
	primary key(id_objeto),
	foreign key(id_categoria) references categoria(id_categoria),
	foreign key(id_subcategoria) references sub_categoria(id_subcategoria),
	foreign key(id_subdivision) references sub_division(id_subdivision),
	foreign key(id_empleado) references empleado(id_empleado)
);

CREATE TABLE IF NOT EXISTS accesorio(
id_accesorio int NOT NULL auto_increment,
id_objeto int NOT NULL,
nombre_categoria varchar(50) NOT NULL,
descripcion varchar(100) NOT NULL,
fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
primary key(id_accesorio),
foreign key(id_objeto) references objeto(id_objeto)
);

CREATE TABLE IF NOT EXISTS finalidad(
id_finalidad int NOT NULL auto_increment,
descripcion varchar(500) NOT NULL,
primary key(id_finalidad)
);

CREATE TABLE IF NOT EXISTS finalidad_objeto(
id_movimiento int NOT NULL auto_increment,
id_finalidad int NOT NULL,
id_objeto int NOT NULL,
primary key(id_movimiento),
foreign key(id_finalidad) references finalidad(id_finalidad),
foreign key(id_objeto) references objeto(id_objeto)
);

CREATE TABLE IF NOT EXISTS ubicacion(
id_ubicacion int NOT NULL auto_increment,
nombre_ubicacion varchar(50) NOT NULL,
movilidad varchar(15) NOT NULL,
latitud varchar(50) NOT NULL,
longitud varchar(50) NOT NULL,
primary key(id_ubicacion)
);

CREATE TABLE IF NOT EXISTS objeto_ubicacion(
id_movimiento int NOT NULL auto_increment,
id_objeto int NOT NULL,
id_ubicacion int NOT NULL,
primary key(id_movimiento),
foreign key(id_ubicacion) references ubicacion(id_ubicacion),
foreign key(id_objeto) references objeto(id_objeto)
);