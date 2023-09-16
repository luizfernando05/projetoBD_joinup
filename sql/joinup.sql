create database joinup;

create schema sistema;

create table sistema.administrador (
	usuarioAdm varchar(50) primary key,
	nomeAdm varchar(300),
	senhaAdm varchar(20)
);

create table sistema.empresa (
	cnpjEmpresa varchar(20),
	nomeEmpresa varchar(50),
	setorEmpresa varchar(30),
	emailEmpresa varchar(200),
	telefoneEmpresa int,
	usuarioAdm varchar(50),
	primary key(cnpjEmpresa),
	foreign key(usuarioAdm) references sistema.administrador(usuarioAdm)
);

create table sistema.oportunidade (
	idOportunidade serial,
	nomeOportunidade varchar(500),
	cep varchar(10),
	estado varchar(100),
	cidade varchar(100),
	dataInicio date,
	dataFim date,
	linkIns varchar(1000),
	usuarioAdm varchar(50),
	primary key(idOportunidade),
	foreign key(usuarioAdm) references sistema.administrador(usuarioAdm)
);

create table sistema.oporEmp (
	cnpjEmpresa varchar(20),
	idOportunidade serial,
	foreign key(cnpjEmpresa) references sistema.empresa(cnpjEmpresa),
	foreign key(idOportunidade) references sistema.oportunidade(idOportunidade)
);

create table sistema.tipoOportunidade (
	tipo varchar(100),
	idOportunidade serial,
	foreign key(idOportunidade) references sistema.oportunidade(idOportunidade)
);

create table sistema.requisitoOportunidade (
	requisito varchar(100),
	idOportunidade serial,
	foreign key(idOportunidade) references sistema.oportunidade(idOportunidade)
);

alter table sistema.administrador
add column admin boolean default true;

ALTER TABLE sistema.empresa
ADD COLUMN telefoneEmpresaNovo varchar(20);

UPDATE sistema.empresa
SET telefoneEmpresaNovo = CAST(telefoneEmpresa AS varchar(20));

ALTER TABLE sistema.empresa
DROP COLUMN telefoneEmpresa;

ALTER TABLE sistema.empresa
RENAME COLUMN telefoneEmpresaNovo TO telefoneEmpresa;

select * from sistema.empresa;

select * from sistema.oportunidade;

select * from sistema.administrador;

select * from sistema.requisitoOportunidade;

select * from sistema.tipoOportunidade;

select * from sistema.oporEmp