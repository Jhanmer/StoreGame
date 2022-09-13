
drop database if exists Game;
create database Game;
use Game;

drop table if exists G_Categoria;
create table G_Categoria(
	idCategoria int not null auto_increment primary key,
	nomCate varchar(25)
	
);

drop table if exists G_Producto;
create table G_Producto(
	idProducto int not null auto_increment primary key,
	idCategoria int not null ,
	nombrePro varchar(255),
	foto varchar(255),
	precioPro decimal (7,2),
	foreign key (idCategoria) references G_Categoria(idCategoria)
	
);




drop table if exists G_Cliente;
create table G_Cliente(
	idCliente int not null auto_increment primary key,
	nombreCli varchar (25)not null,
	apellidoCli varchar (25)not null,
	correoCli varchar(25)not null,
	callecli varchar(25)not null,
	ciudadCli varchar(25)not null,
	departamentoCli varchar(25) not null,
	cpCli int not null ,
	paisCli varchar(25)not null,
	telefonoCli varchar (9) not null,
	tarjetaCli varchar(16),
	csvCli varchar(3),
	fechaCaduCli varchar(4),	
	fechaCli datetime
);

	drop procedure if exists SP_InsertarCliente;
	delimiter $$
	create procedure SP_InsertarCliente
	(in 
	nombre varchar (25),
	apellido varchar (25),
	correo varchar(25),
	calle varchar(25),
	ciudad varchar(25),
	departamento varchar(25),
	cp int ,
	pais varchar(25),
	telefono varchar (9) ,
	tarjeta varchar(16) ,
	csv varchar(3) ,
	_fechaCadu varchar(4),
	_fechaCli datetime )
	begin
	insert into G_Cliente(nombreCli,apellidoCli,correoCli,callecli,ciudadCli
	,departamentoCli,cpCli,paisCli,telefonoCli,tarjetaCli,csvCli,fechaCaduCli,fechaCli) 
	values(nombre,apellido,correo,calle,ciudad,departamento,cp,pais,telefono,tarjeta,csv
	,_fechaCadu,_fechaCli) ;
	end $$
	delimiter ;

drop table if exists G_Carrito;
create table G_Carrito (
	id int not null auto_increment primary key,
	idProducto int not null,
	idCliente int not null,
	cantidad float
);

drop table if exists G_Usuario;
create table G_Usuario(
id_usuario int primary key AUTO_INCREMENT,
nombreUsu varchar(30) not null,
apellidoUsu varchar(30)  not null,
correoUsu varchar (25),
usuario varchar(20) not null,
clave varchar(32) not null,
cargo varchar(20)default 'Usuario'not null 
);

drop procedure if exists SP_InsertarUsuario;
delimiter $$
create procedure SP_InsertarUsuario
(in 
nombre varchar (30),
apellido varchar (25),
correo varchar(25),
usuario varchar(20),
clave varchar (20)
)
begin
insert into G_Usuario(nombreUsu,apellidoUsu,correoUsu,usuario,clave) 
values(nombre,apellido,correo,usuario,clave) ;
end $$
delimiter ;

-- Procedure Login
drop procedure if exists SP_Login;
DELIMITER $$
create PROCEDURE SP_Login(in
_usuario varchar(20),
_clave varchar(32)
)
BEGIN
	DECLARE res INT;
    select count(*) into res from G_Usuario where usuario like _usuario;
	IF res = 0 THEN
		select -1;
	ELSE
		select count(*) into res from G_Usuario where clave like _clave;
		IF res = 0 THEN
			select -2;
		ELSE
			select * from G_Usuario
			where usuario like _usuario and clave like _clave;
		END IF;
	END IF;
End$$
DELIMITER ;

-- Mostrar Categoria PS4
drop procedure if exists SP_MostrarCategoriaPS4;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaPS4 ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=1;
end $$
delimiter ;

-- Mostrar Categoria PS3
drop procedure if exists SP_MostrarCategoriaPS3;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaPS3 ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=2;
end $$
delimiter ;

-- Mostrar Categoria PC GAMER
drop procedure if exists SP_MostrarCategoriaPCGAMER;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaPCGAMER ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=3;
end $$
delimiter ;

-- Mostrar Categoria Funko
drop procedure if exists SP_MostrarCategoriaFunko;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaFunko ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=4;
end $$
delimiter ;

-- Mostrar Categoria XBOX ONE
drop procedure if exists SP_MostrarCategoriaXBOXONE;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaXBOXONE ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=5;
end $$
delimiter ;

-- Mostrar Categoria XBOX 360
drop procedure if exists SP_MostrarCategoriaXBOX360;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaXBOX360 ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=6;
end $$
delimiter ;

-- Mostrar Categoria WII
drop procedure if exists SP_MostrarCategoriaWII;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaWII ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=7;
end $$
delimiter ;

-- Mostrar Categoria Juego De Mesa
drop procedure if exists SP_MostrarCategoriaJuegoDeMesa;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaJuegoDeMesa ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=8;
end $$
delimiter ;

-- Mostrar Categoria Figura de Accion
drop procedure if exists SP_MostrarCategoriaFiguradeAccion;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaFiguradeAccion ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=9;
end $$
delimiter ;

-- Mostrar Categoria Ropa
drop procedure if exists SP_MostrarCategoriaRopa;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaRopa ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=10;
end $$
delimiter ;

-- Mostrar Categoria Posters
drop procedure if exists SP_MostrarCategoriaPosters;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaPosters ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=11;
end $$
delimiter ;

-- Mostrar Categoria Tazas
drop procedure if exists SP_MostrarCategoriaTazas;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaTazas ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=12;
end $$
delimiter ;

-- Mostrar Categoria Parlantes
drop procedure if exists SP_MostrarCategoriaParlantes;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaParlantes ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=13;
end $$
delimiter ;

drop procedure if exists SP_MostrarCategoriaAudifonos;
delimiter $$
CREATE PROCEDURE SP_MostrarCategoriaAudifonos ()
BEGIN
select pr.idProducto,ga.nomCate,pr.nombrePro , pr.foto, pr.precioPro
from g_producto pr
inner join G_Categoria ga on pr.idCategoria=ga.idCategoria where 
ga.idCategoria=14;
end $$
delimiter ;


-- Insertar G_Categoria
insert into G_Categoria (idCategoria,nomCate)value (1,"PS4");
insert into G_Categoria (idCategoria,nomCate)value (2,"PS3");
insert into G_Categoria (idCategoria,nomCate)value (3,"PC GAMER");
insert into G_Categoria (idCategoria,nomCate)value (4,"Funko");
insert into G_Categoria (idCategoria,nomCate)value (5,"XBOX ONE");
insert into G_Categoria (idCategoria,nomCate)value (6,"XBOX 360");
insert into G_Categoria (idCategoria,nomCate)value (7,"WII");
insert into G_Categoria (idCategoria,nomCate)value (8,"Juego de Mesa");
insert into G_Categoria (idCategoria,nomCate)value (9,"Figura de Accion");
insert into G_Categoria (idCategoria,nomCate)value (10,"Ropa");
insert into G_Categoria (idCategoria,nomCate)value (11,"Posters");
insert into G_Categoria (idCategoria,nomCate)value (12,"Tazas");
insert into G_Categoria (idCategoria,nomCate)value (13,"Parlantes");
insert into G_Categoria (idCategoria,nomCate)value (14,"Audifonos");

-- Insertar G_Producto PS4
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"FIFA 20 CHAMPIONS",'/images/FIFA 20 CHAMPIONS.jpg',367.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"Sniper Gost Warrior 3",'/images/Sniper Gost Warrior 3.jpg',210.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"PlayStation 4",'/images/PlayStation 4.jpg',1800.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"Mario Kart tour",'/images/Mario Kart tour.jpg',69.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"Call of Duty 4",'/images/Call of Duty 4.jpg',87.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"FIFA 19",'/images/FIFA 19.jpg',341.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"FIFA 20 LEGACY",'/images/FIFA 20 LEGACY.jpg',312.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"MANDO INALAMBRICO XBOX ONE",'/images/MANDO INALAMBRICO XBOX ONE.jpg',245.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"CONTRA ROGUE CORPS",'/images/CONTRA ROGUE CORPS.jpg',169.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"NBA 2K20",'/images/NBA 2K20.jpg',239.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"SOUTH PARK STICK OF TRUTH",'/images/SOUTH PARK STICK OF TRUTH.jpg',79.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"God of war",'/images/god of war.jpg',120.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"Jump Force",'/images/jump force.jpg',120.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"Minicraft",'/images/minecraft.jpg',120.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (1,"Spider Man",'/images/spider man.jpg',120.00);

-- Insertar G_Producto PS3

insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (2,"Plants vs Zombies Garden Warfare",'/images/Plants vs Zombies Garden Warfare.jpg',69.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (2,"Dragon Ball Battle Of Z",'/images/Plants vs Zombies Garden Warfare.jpg',69.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (2,"Assassins Creed Ezio Trilogy",'/images/Assassins Creed Ezio Trilogy.jpg',79.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (2,"Grand Theft  Auto V",'/images/Grand Theft  Auto V.jpg',99.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (2,"Street Fighter X Tekken",'/images/Street Fighter X Tekken.jpg',79.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (2,"One Piece Pirate Warrions 3",'/images/One Piece Pirate Warrions 3.jpg',129.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (2,"Borderlands The Pre Sequel",'/images/Borderlands The Pre Sequel.jpg',49.00);

-- Insertar G_Producto PC GAMER
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Razer BLACKWIDOW X TOURNAMENT EDITION CHROMA",'/images/Razer BLACKWIDOW X TOURNAMENT EDITION CHROMA.jpg',351.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Razer BlackWidow Ultimate",'/images/Razer BlackWidow Ultimate.jpg',297.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Razer BlackWidow Lite",'/images/Razer BlackWidow Lite.jpg',303.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Razer BlackWidow",'/images/Razer BlackWidow.jpg',405.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Razer BlackWidow Tournament Edition Chroma V2",'/images/Razer BlackWidow Tournament Edition Chroma V2.jpg',378.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Razer Tartarus  V2",'/images/Razer Tartarus  V2.jpg',270.00	);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Vigor GK 30",'/images/Vigor GK 30.jpg',168.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"RAZER MANO'WAR",'/images/RAZER MANOWAR.jpg',671.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"RAZER KRAKEN - MERCURY EDITION",'/images/RAZER KRAKEN - MERCURY EDITION.jpg',115.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Auriculares Hyperx",'/images/Auriculares Hyperx.jpg',155.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Razer Firelly",'/images/Razer Firelly.jpg',253.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Razer Invicta",'/images/Razer Invicta.jpg',219.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Case MasterBox MS600",'/images/Case MasterBox MS600.jpg',253.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Case HALION STRINGAY",'/images/Case HALION STRINGAY.jpg',191.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Case HALION HUNTER",'/images/Case HALION HUNTER.jpg',191.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Mouse  Gamer Redragon",'/images/Mouse  Gamer Redragon.jpg',89.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Mouse  Logitech M705",'/images/Mouse  Logitech M705.jpg',89.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Monitor Teros24FHD",'/images/Monitor Teros24FHD.jpg',427.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Monitor LG 20MK400H",'/images/Mouse  Logitech M705.jpg',316.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (3,"Audifonos Razer kraken",'/images/Audifonos Razer kraken.jpg',64.00);


-- Insertar G_Producto Funko

insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (4,"Funko PoP Thanos ",'/images/funko de thanos.png',60.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (4,"Funko PoP Pokemon ",'/images/funko pokemon.jpg',60.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (4,"Funko PoP Coco ",'/images/funko coco.jpg',60.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (4,"Funko PoP Stranger Things ",'/images/funko stranger things.jpg',60.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (4,"Funko PoP Android17",'/images/Funko Pop Android17.jpg',34.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (4,"Funko Pop Chapulin Colorado",'/images/Funko Pop Chapulin Colorado.jpg',49.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (4,"Funko Pop Keychan Fairy Tail",'/images/Funko Pop Keychan Fairy Tail.jpg',17.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (4,"Funko Pop Games Monster Hunter",'/images/Funko Pop Games Monster Hunter.jpg',34.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (4,"Funko Pop Star Wars",'/images/Funko Pop Star Wars.jpg',34.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (4,"Funko Pop Mortal Kombat-Kitana",'/images/Funko Pop Mortal Kombat-Kitana.jpg',69.00);
-- Insertar G_Producto XBOX ONE

insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (5,"OVERWATCH",'/images/OVERWATCH.jpg',215.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (5,"RECORE",'/images/RECORE.jpg',139.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (5,"THIEFT",'/images/THIEFT.jpg',60.00);

-- Insertar G_Producto XBOX 360

insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (6,"Crackdown",'/images/Crackdown.jpg',215.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (6,"Halo 3",'/images/Halo 3.jpg',214.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (6,"Temporada abierta",'/images/Temporada abierta.jpg',262.00);

-- Insertar G_Producto Wii
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (7,"Rayman Legends",'/images/Rayman Legends.jpg',97.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (7,"StarFox Zero",'/images/StarFox Zero.jpg',79.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (7,"SPLATOON NINTENDO",'/images/SPLATOON NINTENDO.jpg',165.00);

-- Insertar G_Producto Juegos Mesa 
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (8,"MONOPOLY TOY STORY",'/images/MONOPOLY TOY STORY.jpg',99.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (8,"MONOPOLY STRANGER THINGS",'/images/MONOPOLY STRANGER THINGS.jpg',89.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (8,"MONOPOLY FORNITE",'/images/MONOPOLY FORNITE.jpg',79.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (8,"MONOPOLY GAME OF THRONES",'/images/MONOPOLY GAME OF THRONES.jpg',89.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (8,"MONOPOLY-BANCO ELECTRONICO",'/images/MONOPOLY-BANCO ELECTRONICO.jpg',79.00);

-- Insertar G_Producto Figura de Accion
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (9,"Figura de Accion Batman DC ",'/images/Figura de Accion Batman DC.jpg',89.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (9,"Figura de Accion Max Steel Mattel",'/images/Figura de Accion Max Steel Mattel.jpg',39.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (9,"Figura de Accion de WWE Roman Reigns",'/images/Figura de Accion de WWE Roman Reigns.jpg',164.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (9,"Figura de Accion Titan Changers",'/images/Figura de Accion Titan Changers.jpg',34.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (9,"Figura de Accion Power Ranger Rojo",'/images/Figura de Accion Power Ranger Rojo.jpg',31.00);

-- Insertar G_Producto 	Ropa
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (10,"Polo DC Comics Batman",'/images/Polo DC Comics Batman.jpg',69.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (10,"Polo DC Comics Batman Hombre",'/images/Polo DC Comics Batman Hombre.jpg',69.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (10,"Polera Marvel Avengers",'/images/Polera Marvel Avengers.jpg',99.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (10,"Polera Avengers EndGame",'/images/Polera Avengers EndGame.jpg',89.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (10,"Gorro The Legend of Zelda",'/images/Gorro The Legend of Zelda.jpg',69.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (10,"Gorro Superman -Logo Negro",'/images/Gorro Superman -Logo Negro.jpg',69.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (10,"Gorro Marvel - Spider Man Rescue Rojo",'/images/Gorro Marvel - Spider Man Rescue Rojo.jpg',69.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (10,"Gorra Pixel Mario Beige",'/images/Gorra Pixel Mario Beige.jpg',69.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (10,"Medias Mario Kart",'/images/Medias Mario Kart.jpg',24.00);
-- Insertar G_Producto Posters
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (11,"Cuadro 3D Mario Bros",'/images/Cuadro 3D Mario Bros.jpg',89.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (11,"Cuadro 3D Rick And Morty",'/images/Cuadro 3D Rick And Morty.jpg',79.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (11,"Poster Five Nights at Freddy",'/images/Poster Five Nights at Freddy.jpg',29.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (11,"Poster My hero Academia ",'/images/Poster My hero Academia.jpg',29.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (11,"Poster Call Of Duty Stronghold",'/images/Poster Call Of Duty Stronghold.jpg',29.00);

-- Insertar G_Producto Tazas
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (12,"Taza God of War",'/images/Taza God of War.jpg',59.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (12,"Taza Duffy Duck",'/images/Taza Duffy Duck.jpg',59.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (12,"Pack de Shots Rick and Morty",'/images/Pack de Shots Rick and Morty.jpg',59.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (12,"Taza Pokemon EEVEE",'/images/Taza Pokemon EEVEE.jpg',59.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (12,"Taza Batman Dark Knigth",'/images/Taza Batman Dark Knigth.jpg',59.00);

-- Insertar G_Producto Parlantes
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (13,"JBL BOOMBOX BLUETOOTH",'/images/JBL BOOMBOX BLUETOOTH.jpg',1559.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (13,"JBL BOOMBOX BLUETOOTH SQUAD",'/images/JBL BOOMBOX BLUETOOTH SQUAD.jpg',1799.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (13,"JBL FLIP 4 BLUETOOTH AZUL",'/images/JBL FLIP 4 BLUETOOTH AZUL.jpg',299.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (13,"BOSE S1 PRO",'/images/BOSE S1 PRO.jpg',2669.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (13,"BOSE SOUNDLINK REVOLVE NEGRO",'/images/BOSE SOUNDLINK REVOLVE NEGRO.jpg',899.00);

insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (14,"SONY WI-310 BLUETOOTH AZUL",'/images/SONY WI-310 BLUETOOTH AZUL.jpg',159.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (14,"Audifono Sony WI-310 NEGRO",'/images/Audifono Sony WI-310 NEGRO.jpg',159.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (14,"Sony WH-CH500 Gris",'/images/Sony WH-CH500 Gris.jpg',249.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (14,"Sony WH-CH500 AZUL",'/images/Sony WH-CH500 AZUL.jpg',249.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (14,"JBL T100 BLUETOOTH BLANCO",'/images/JBL T100 BLUETOOTH BLANCO.jpg',99.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (14,"SKULLCANDY INDY BLUETOOTH AZUL",'/images/SKULLCANDY INDY BLUETOOTH AZUL.jpg',399.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (14,"SKULLCANDY PUSH BLUETOOTH AZUL",'/images/SKULLCANDY PUSH BLUETOOTH AZUL.jpg',599.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (14,"SKULLCANDY JIB WIRELLESS",'/images/SKULLCANDY JIB WIRELLESS.jpg',169.00);
insert into G_Producto(idCategoria,nombrePro,foto,precioPro) value (14,"SKULLCANDY ICON BLUETOOTH",'/images/SKULLCANDY ICON BLUETOOTH.jpg',249.00);





