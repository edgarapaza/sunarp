CREATE DATABASE sunarp DEFAULT CHARSET utf8 COLLATE utf8_spanish_ci;
USE sunarp;

CREATE TABLE acreditar(
id int not null auto_increment PRIMARY KEY,
nomAcred varchar(250) not null,
dniAcred char(8) not null,
address  varchar(250) not null,
idyear int not null,
idlocation int not null,
idzonal int not null,
idescritura int not null,
idpersonal int not null,
fecCreate timestamp default current_timestamp
)

CREATE TABLE escritura(
idesc int not null auto_increment PRIMARY KEY,
tipoesc varchar(100) not null,
numesc int not null,
fecesc date not null,
otorgesc varchar(250) not null,
favoresc varchar(250) not null,
notario varchar(100) not null,
protocolo int not null,
folio varchar(20) not null,
fecCreate timestamp default current_timestamp
)

CREATE TABLE zonal(
idzonal int not null auto_increment PRIMARY KEY,
oficina varchar(200) not null,
zonareg varchar(200) not null,
fecCreate timestamp default current_timestamp
)

CREATE TABLE personal(
codpersonal int not null auto_increment PRIMARY KEY,
abreviatura varchar(10) not null,
nomper varchar(200) not null,
dniper char(8) not null,
cargo varchar(100) not null,
fecCreate timestamp default current_timestamp
)

CREATE TABLE anio(
idanio int not null auto_increment PRIMARY KEY,
anio char(4) not null,
fecCreate timestamp default current_timestamp
)

