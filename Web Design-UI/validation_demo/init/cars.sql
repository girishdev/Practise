CREATE TABLE customer (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	first_name varchar(14) NOT NULL,
	last_name varchar(50) NOT NULL,
	age varchar(50) NOT NULL,
	email varchar(30) NOT NULL,
	phone_no varchar(30) NOT NULL,
	address_one varchar(30) NOT NULL,
	adress_two varchar(30) NOT NULL,
	upload_Photo varchar(30) NOT NULL
);

CREATE TABLE customer (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	username varchar(14) NOT NULL,
	phone varchar(50) NOT NULL,
	email varchar(30) NOT NULL,
	user_pass varchar(30) NOT NULL,
	carlist varchar(30) NOT NULL,
	image_1 varchar(30) NOT NULL,
	image_2 varchar(30) NOT NULL
);

CREATE TABLE images (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	image varchar(90) NOT NULL
);
