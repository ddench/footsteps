<?php

include "dbconnect.php"

 create database if not exists footsteps character set=utf8;


create table user(id integer not null auto_increment primary key, username varchar(50) not null, firstname varchar(50) not null, surname varchar (50) not null, email varchar(80) not null, usertype varchar(50) not null, sex char(1) not null, password blob not null);


INSERT INTO user (password) VALUES (sha2(password)),(sha2(password)),sha2(password));

?>