SET GLOBAL log_bin_trust_function_creators = 1;
drop database if exists ppv;
create database ppv;
use ppv;
create table users(
	id int not null auto_increment,
	user_name varchar(50),
    last_name_1 varchar(50),
    last_name_2 varchar(50),
    nick varchar(50) unique,
    pass varchar(6) unique,
    email varchar(50) unique,
    age int,
    phone int,
    connect int,
    primary key (id)
);
insert into users (user_name, last_name_1, last_name_2, nick, pass, email, age, phone, connect) values ("pepe", "pepe","pepe","pepe","pepe","pepe@gmail.com",20,123456789,0);
create table floor(
	id int not null auto_increment,
	title varchar(100),
    n_rooms int,
    price float,
    descriptions varchar(200),
    dcmkm float,
    contact int,
    primary key(id)
);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 5, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 4, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 3, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 2, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 3, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 5, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 6, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 8, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 4, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 5, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 5, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 5, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 8, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 5, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 6, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 5, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 6, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 3, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 5, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
insert into floor (title, n_rooms, price, descriptions, dcmkm, contact) values ("Piso barato", 4, 20000.00, "Es un piso muy cómodo", 10.00, 123456789);
create table f_picture(
	id int not null auto_increment,
    url varchar(100),
    id_floor int not null,
    primary key (id),
    foreign key (id_floor) references floor (id)
);
insert into f_picture (url, id_floor) values ("a.jpg",1);
insert into f_picture (url, id_floor) values ("a.jpg",2);
insert into f_picture (url, id_floor) values ("a.jpg",3);
insert into f_picture (url, id_floor) values ("a.jpg",4);
insert into f_picture (url, id_floor) values ("a.jpg",5);
insert into f_picture (url, id_floor) values ("a.jpg",6);
insert into f_picture (url, id_floor) values ("a.jpg",7);
insert into f_picture (url, id_floor) values ("a.jpg",8);
insert into f_picture (url, id_floor) values ("a.jpg",9);
insert into f_picture (url, id_floor) values ("a.jpg",10);
insert into f_picture (url, id_floor) values ("a.jpg",11);
insert into f_picture (url, id_floor) values ("a.jpg",12);
insert into f_picture (url, id_floor) values ("a.jpg",13);
insert into f_picture (url, id_floor) values ("a.jpg",14);
insert into f_picture (url, id_floor) values ("a.jpg",15);
insert into f_picture (url, id_floor) values ("a.jpg",16);
insert into f_picture (url, id_floor) values ("a.jpg",17);
insert into f_picture (url, id_floor) values ("a.jpg",18);
insert into f_picture (url, id_floor) values ("a.jpg",19);
insert into f_picture (url, id_floor) values ("a.jpg",20);
/*create table opinion(
	id int not null auto_increment,
	id_user int,
	foreign key(id_user) references users(id),
    primary key(id)
);
create table likes(
	id int not null auto_increment,
	id_user int,
	foreign key(id_user) references users(id),
    primary key(id)
);
create table favorite(
	id int not null auto_increment,
	id_user int,
	foreign key(id_user) references users(id),
    primary key(id)
);
create view login as select nick as 'nick', pass as 'pass' from users;
*/