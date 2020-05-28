Create Database Aguiar;

use Aguiar;

Drop Database Aguiar;

truncate Cliente;

Create Table Cliente( 
id_cliente int primary key not null auto_increment,
nome_cliente varchar(100) not null,
cpf_cliente  varchar (100) not null,
creci_cliente varchar(100) not null,
data_cadastro date not null 
);

Select * from Cliente;