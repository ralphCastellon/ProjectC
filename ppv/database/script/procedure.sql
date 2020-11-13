/*************************
		Logins
*************************/
delimiter //
create procedure login(nickP varchar(50), pswP varchar(50))
begin
	select * from users where nick = nickP and pass = pswP;
    update users set connect = 1 where nick = nickP;
end;
// delimiter ;
-- drop procedure login;
delimiter //
create procedure loginAdmin(nickP varchar(50), pswP varchar(50))
begin
	select * from admins where nick = nickP and pass = pswP;
    update admins set connect = 1 where nick = nickP;
end;
// delimiter ;
-- drop procedure loginAdmin;
delimiter //
create procedure logout(nickP varchar(50), pswP varchar(50))
begin
	select * from users where nick = nickP and pass = pswP;
    update users set connect = 0 where nick = nickP;
end;
// delimiter ;
-- drop procedure logout;
delimiter //
create procedure logoutAdmin(nickP varchar(50), pswP varchar(50))
begin
	select * from admins where nick = nickP and pass = pswP;
    update admins set connect = 0 where nick = nickP;
end;
// delimiter ;
-- drop procedure logoutAdmin;
delimiter //
create procedure signUp(user_nameP varchar(50),last_name_1P varchar(50),last_name_2P varchar(50),nickP varchar(50),pswP varchar(50),emailP varchar(50),ageP int,phoneP int)
begin
	if ((select count(*) from users where nick = nickP) = 0)then
	insert into users (user_name,last_name_1,last_name_2,nick,pass,email,age,phone,connect,url)
    values (user_nameP,last_name_1P,last_name_2P,nickP,pswP,emailP,ageP,phoneP,0,"/Ralph_Laguna_RA3_ES/images/profile/users/default.jpg");
    select * from users where nick = nickP;
    end if;
end;
// delimiter ;
-- drop procedure signUp;

/*******************************
			Users
*******************************/
delimiter //
create procedure updateUser(user_nameP varchar(50),last_name_1P varchar(50),last_name_2P varchar(50),oldnickP varchar(50),emailP varchar(50),ageP int,phoneP int, urlP varchar(100), newNickP varchar(50))
begin
	if ((select count(*) from users where nick = oldnickP) = 1)then
	update users set user_name = user_nameP,last_name_1=last_name_1P,last_name_2=last_name_2P,email=emailP,age=ageP,phone=phoneP,connect=1,url=urlP,nick=newNickP where nick = oldnickP;
    select * from users where nick = newNickP;
    end if;
end;
// delimiter ;
-- drop procedure updateAdmin;
delimiter //
create procedure updateUserPass(nickP varchar(50),passP text, newPassP text)
begin
	if ((select count(*) from usesrs where nick = nickP and pass = passP) = 1)then
	update usesrs set pass = newPassP where nick = nickP;
    select * from usesrs where nick = nickP;
    end if;
end;
// delimiter ;
-- drop procedure updateUserPass;
delimiter //
create procedure delUser(idP int, pswP varchar(50))
begin
	if ((select count(*) from users where id = idP and pass = pswP) = 1)then
		select * from users where id = idP;
		delete from users where id = idP;
    end if;
end;
// delimiter ;
-- drop procedure delUser;
delimiter //
create procedure addFavorite(idP int, idFP int)
begin
	if ((select count(*) from favorite where id_floor = idFP)=0) then
	insert into favorite (id_user, id_floor) value (idP,idFP);
    select * from favorite where id = last_insert_id();
    else 
	  select * from favorite where id_floor = idFP;
	 delete from favorite where id_floor = idFP;
    end if;
end;
// delimiter ;
-- drop procedure addFavorite;
delimiter //
create procedure sendMessage(idUserP int, idAdminP int, messageP varchar(240))
begin
    insert into message (id_admin,id_user,message,isread,times) values (idAdminP,idUserP,messageP,0,current_timestamp());
end;
// delimiter ;
-- drop procedure sendMessage;

/**************************
		Admins
*************************/
delimiter //
create procedure addUser(user_nameP varchar(50),last_name_1P varchar(50),last_name_2P varchar(50),nickP varchar(50),pswP varchar(50),emailP varchar(50),ageP int,phoneP int, urlP varchar(500))
begin
	if ((select count(*) from users where nick = nickP) = 0)then
	insert into users (user_name,last_name_1,last_name_2,nick,pass,email,age,phone,connect,url) values (user_nameP,last_name_1P,last_name_2P,nickP,pswP,emailP,ageP,phoneP,0,urlP);
    select * from users where nick = nickP;
    end if;
end;
// delimiter ;
-- drop procedure addUser;
delimiter //
create procedure addAdmin(user_nameP varchar(50),last_name_1P varchar(50),last_name_2P varchar(50),nickP varchar(50),pswP varchar(50),emailP varchar(50),ageP int,phoneP int, urlP varchar(500))
begin
	if ((select count(*) from admins where nick = nickP) = 0)then
	insert into admins (user_name,last_name_1,last_name_2,nick,pass,email,age,phone,connect,url) values (user_nameP,last_name_1P,last_name_2P,nickP,pswP,emailP,ageP,phoneP,0,urlP);
    select * from admins where nick = nickP;
    end if;
end;
// delimiter ;
-- drop procedure addAdmin;
delimiter //
create procedure updateAdmin(user_nameP varchar(50),last_name_1P varchar(50),last_name_2P varchar(50),oldnickP varchar(50),emailP varchar(50),ageP int,phoneP int, urlP varchar(100), newNickP varchar(50))
begin
	if ((select count(*) from admins where nick = oldnickP) = 1)then
	update admins set user_name = user_nameP,last_name_1=last_name_1P,last_name_2=last_name_2P,email=emailP,age=ageP,phone=phoneP,connect=1,url=urlP,nick=newNickP where nick = oldnickP;
    select * from admins where nick = newNickP;
    end if;
end;
// delimiter ;
-- drop procedure updateAdmin;
delimiter //
create procedure updateAdminPass(nickP varchar(50),passP text, newPassP text)
begin
	if (((select count(*) from admins where nick = nickP and pass = passP) = 1))then
	update admins set pass = newPassP where nick = nickP;
    select * from admins where nick = nickP;
    end if;
end;
// delimiter ;
-- drop procedure updateAdminPass;
delimiter //
create procedure delUserByAdmin(idP int)
begin
	if ((select count(*) from users where id = idP) = 1)then
		select * from users where id = idP;
		delete from users where id = idP;
    end if;
end;
// delimiter ;
-- drop procedure delUserByAdmin;
delimiter //
create procedure delAdmin(idP int)
begin
	if ((select count(*) from admins where id = idP) = 1)then
		select * from admins where id = idP;
		delete from admins where id = idP;
    end if;
end;
// delimiter ;
-- drop procedure delAdmin;

/***************************************
				Floor
****************************************/
delimiter //
create procedure addFloor(titleP varchar(50),n_roomsP int,priceP float,n_bathdroomsP int,m2P float,statusOfFloorP varchar(100),kindOfHeatingP varchar(12),
isHaveFurnitureP int,dcmkm float, contact int,F_statusP varchar(20),kind_of_floorP varchar(20),nickP varchar(50),opinionP varchar(100))
begin
	declare id int;
    set id = (select id from admins where nick = nickP);
	if ((select count(*) from floor where title = titleP) = 0)then
	insert into floor (title,n_rooms,price,n_bathdrooms,m2,statusOfFloor,kindOfHeating,isHaveFurniture,dcmkm,contact,F_status,kind_of_floor,id_admin)
    values (titleP,n_roomsP,priceP,n_bathdroomsP,m2P,statusOfFloorP,kindOfHeatingP,isHaveFurnitureP,dcmkm,contact,F_statusP,kind_of_floorP,1);
    insert into opinion (id_admin,id_floor,id_user,opinion) value (1,last_insert_id(),null,opinionP);
    select * from floor where title = titleP;
    end if;
end;
// delimiter ;
-- drop procedure addFloor;
delimiter //
create procedure delFloor(idP int)
begin
	if ((select count(*) from floor where id = idP) = 1)then
    select * from floor where id = idP;
    delete from floor where id = idP;
    end if;
end;
// delimiter ;
-- drop procedure delFloor;
delimiter //
create procedure updateFloor(titleP varchar(50),n_roomsP int,priceP float,n_bathdroomsP int,m2P float,statusOfFloorP varchar(100),kindOfHeatingP varchar(12),isHaveFurnitureP int,dcmkm float, contact int,F_statusP varchar(20),kind_of_floorP varchar(20),nickP varchar(50),opinionP varchar(100), oldTitle varchar(50))
begin
	declare idF int;
	if ((select count(*) from floor where title = oldTitleP) = 0)then
	update floor set title = titleP,n_rooms=n_roomsP,price=priceP,n_bathdrooms=n_bathdroomsP,m2=m2P,statusOfFloor=statusOfFloorP,kindOfHeating=kindOfHeatingP,isHaveFurniture=isHaveFurnitureP,dcmkm=dcmkmP,contact=contactP,F_status =F_statusP,kind_of_floor = kind_of_floorP where title = oldTitle;
    set idF = (select id from floor where title = titleP);
    update opinion set opinion = opinionP where id_floor = idF;
    select * from floor where title = titleP;
    end if;
end;
// delimiter ;
-- drop procedure updateFloor;
create view showNoAuthFloor as select floor.id,floor.title,floor.F_status,f_picture.url from floor inner join f_picture on floor.id = f_picture.id_floor group by floor.id;
-- drop view showNoAuthFloor;