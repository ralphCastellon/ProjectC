SET GLOBAL log_bin_trust_function_creators = 1;
drop database if exists ppv;
create database ppv;
use ppv;
create table users(
	id int not null auto_increment,
	user_name varchar(50),
    last_name_1 varchar(50),
    last_name_2 varchar(50),
    nick varchar(50) unique not null,
    pass text,
    email varchar(50) unique,
    age int,
    phone int,
    connect int,
    url varchar(500),
    primary key (id)
);
create table admins(
	id int not null auto_increment,
	user_name varchar(50),
    last_name_1 varchar(50),
    last_name_2 varchar(50),
    nick varchar(50) unique not null,
    pass text,
    email varchar(50) unique,
    age int,
    phone int,
    connect int,
    url varchar(500),
    primary key (id)
);
create table floor(
	id int not null auto_increment,
	title varchar(100),
    n_rooms int,
    price float,
    n_bathdrooms int,
    m2 float,
    statusOfFloor varchar(100),
    kindOfHeating enum('electrica', 'gas', 'biomasa', 'geotermica', 'solar'),
    isHaveFurniture int,
    dcmkm float,
    contact int,
    F_status enum ('rent', 'sell'),
    kind_of_floor enum ('duplex', 'attached', 'penhouse'),
    id_admin int,
    primary key(id),
    foreign key(id_admin) references admins (id)
);
create table f_picture(
	id int not null auto_increment,
    url varchar(100),
    id_floor int,
    primary key (id),
    foreign key (id_floor) references floor (id) on delete cascade
);
create table opinion(
	id int not null auto_increment,
	id_admin int,
    id_floor int,
    id_user int,
    opinion varchar(100),
    primary key(id),
	foreign key(id_floor) references floor (id) on delete cascade,
	foreign key(id_user) references users (id) on delete cascade,
	foreign key(id_admin) references admins (id) on delete cascade
);
create table favorite(
	id int not null auto_increment,
	id_user int,
    id_floor int,
    primary key(id),
	foreign key(id_user) references users(id) on delete cascade,
	foreign key(id_floor) references floor(id) on delete cascade
);
create table message(
	id int not null auto_increment,
	id_admin int,
    id_user int,
    message varchar(240),
    isread int,
    times timestamp,
    primary key(id),
	foreign key(id_admin) references admins (id) on delete cascade,
    foreign key(id_user) references users(id) on delete cascade
);