ALTER USER 'root'@'localhost' IDENTIFIED BY 'gmmml123456' PASSWORD EXPIRE NEVER;
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'gmmml123456';

drop database if exists `ctf`;
create database ctf;
use ctf;

create table admin(
`id` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(40) NOT NULL,
`password` varchar(40) NOT NULL,
PRIMARY KEY (`id`)
);

insert into admin value (1, 'admin','b4bc4c343ed120df3bff56d586e6d617');

create table f11114g(
`f1lllaggg` varchar(100) NOT NULL
);

insert into f11114g values ('This_is_not_Flag');
insert into f11114g values ('flag{test}');

