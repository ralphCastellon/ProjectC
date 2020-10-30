delimiter //
create procedure login(nickP varchar(50), pswP varchar(50))
begin
	select * from users where nick = nickP and pass = pswP;
    update users set connect = 1 where nick = nickP;
end;
// delimiter ;
drop procedure login;
delimiter //
create procedure logout(nickP varchar(50), pswP varchar(50))
begin
	select * from users where nick = nickP and pass = pswP;
    update users set connect = 0 where nick = nickP;
end;
// delimiter ;
drop procedure logout;
delimiter //
create procedure addUser(user_nameP varchar(50),last_name_1P varchar(50),last_name_2P varchar(50),nickP varchar(50),pswP varchar(50),emailP varchar(50),age int,phone int)
begin
	if ((select count(*) from users where nick = nickP) = 0)then
	insert into users (user_name,last_name_1,last_name_2,nick,pass,email,age,phone,connect) values (user_nameP,last_name_1P,last_name_2P,nickP,pswP,emailP,age,phone,0);
    select * from users where nick = nickP;
    end if;
end;
// delimiter ;
drop procedure addUser;
