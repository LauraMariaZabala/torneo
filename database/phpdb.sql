create database phpdb;
use phpdb;

CREATE TABLE empleado (
  id_Empleado int(10)  NOT NULL AUTO_INCREMENT,
   username varchar(25) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(100) NOT NULL,
  PRIMARY KEY (id_Empleado),
  UNIQUE KEY username (username)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

