create database crud_prontuario_pdo;

use crud_prontuario_pdo;

create table paciente(idPaciente int primary key auto_increment, Registro_agenda DATETIME, histotico varchar(1000), receituario varchar(500), exames varchar(500));

