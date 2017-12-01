CREATE DATABASE login;
USE login;
CREATE TABLE users(
	id int(8) PRIMARY KEY AUTO_INCREMENT,
	username varchar(32),
	email varchar(32),
	name varchar(32),
	creation timestamp default current_timestamp,
	date varchar(32),
	password varchar(32)
);
