call addAdmin("pepe", "pepe","pepe","pepe","pepe","pepe@gmail.com",20,123456789,"/Ralph_Laguna_RA3_ES/views/Dashboard/img/profile/admin/ui-divya.jpg");
call addAdmin("Ralph", "Castellon","Laguna","whoami","toor","whoami@gmail.com",20,121556789,"/Ralph_Laguna_RA3_ES/views/Dashboard/img/profile/admin/ui-sherman.jpg");
call addAdmin("Vicente", "Frolay","de todos los santos","vicente","pepe","vicente@gmail.com",20,123488789,"/Ralph_Laguna_RA3_ES/views/Dashboard/img/profile/admin/ui-sam.jpg");
call addUser("Vicente", "Frolay","de todos los santos","vicente","pepe","vicente@gmail.com",20,123488789,"/Ralph_Laguna_RA3_ES/views/Dashboard/img/profile/users/ui-sherman.jpg");
call addUser("Ralph", "Castellon","Laguna","whoami","toor","laguna@gmail.com",21,123456789,"/Ralph_Laguna_RA3_ES/views/Dashboard/img/profile/users/ui-sam.jpg");
call addFloor("Piso barato", 6, 20000.00, 3, 600.00, "como nuevo",'electrica',1, 10.00, 123456789,"rent","penhouse",1);
call addFloor("Piso barato", 6, 20000.00, 3, 600.00, "como nuevo",'electrica',1, 10.00, 123456789,"sell","penhouse",1);
call addFloor("Piso barato", 6, 20000.00, 3, 600.00, "como nuevo",'electrica',1, 10.00, 123456789,"rent","penhouse",1);
call addFloor("Piso barato", 6, 20000.00, 3, 600.00, "como nuevo",'electrica',1, 10.00, 123456789,"sell","penhouse",1);
call addFloor("Piso barato", 6, 20000.00, 3, 600.00, "como nuevo",'electrica',1, 10.00, 123456789,"rent","penhouse",1);
call addFloor("Piso barato", 6, 20000.00, 3, 600.00, "como nuevo",'electrica',1, 10.00, 123456789,"sell","penhouse",1);
call addFloor("Piso barato", 6, 20000.00, 3, 600.00, "como nuevo",'electrica',1, 10.00, 123456789,"rent","penhouse",1);
call addFloor("Piso barato", 6, 20000.00, 3, 600.00, "como nuevo",'electrica',1, 10.00, 123456789,"sell","penhouse",1);
call addFloor("Piso barato", 6, 20000.00, 3, 600.00, "como nuevo",'electrica',1, 10.00, 123456789,"rent","penhouse",1);
call addFloor("Piso barato", 6, 20000.00, 3, 600.00, "como nuevo",'electrica',1, 10.00, 123456789,"sell","penhouse",1);
insert into f_picture (url, id_floor) values ("/Ralph_Laguna_RA3_ES/views/Dashboard/img/floor/piso_barato.jpg",1);
insert into f_picture (url, id_floor) values ("/Ralph_Laguna_RA3_ES/views/Dashboard/img/floor/img2.jpg",2);
insert into f_picture (url, id_floor) values ("/Ralph_Laguna_RA3_ES/views/Dashboard/img/floor/img3.jpg",3);
insert into f_picture (url, id_floor) values ("/Ralph_Laguna_RA3_ES/views/Dashboard/img/floor/img4.jpg",4);
insert into f_picture (url, id_floor) values ("/Ralph_Laguna_RA3_ES/views/Dashboard/img/floor/img5.jpg",5);
insert into f_picture (url, id_floor) values ("/Ralph_Laguna_RA3_ES/views/Dashboard/img/floor/img6.jpg",6);
insert into f_picture (url, id_floor) values ("/Ralph_Laguna_RA3_ES/views/Dashboard/img/floor/img7.jpg",7);
insert into f_picture (url, id_floor) values ("/Ralph_Laguna_RA3_ES/views/Dashboard/img/floor/img8.jpg",8);
insert into f_picture (url, id_floor) values ("/Ralph_Laguna_RA3_ES/views/Dashboard/img/floor/img9.jpg",9);
insert into f_picture (url, id_floor) values ("/Ralph_Laguna_RA3_ES/views/Dashboard/img/floor/img10.jpg",10);

-- insert into message (id_admin,id_user,message,isread,times) values (1,1,"Hola",0,current_timestamp());
select * from admins;
select * from users;
select * from floor;
delete from f_picture where id_floor = 1;