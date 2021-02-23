CREATE DATABASE starbuck;
USE starbuck;

CREATE TABLE coffee(
                       id varchar (100) PRIMARY KEY ,
                       name varchar (100),
                       type varchar (250),
                       size char (2),
                       price float (4),
                       image varchar (200)
);

INSERT INTO coffee VALUES
('01','colombia','Frappuccino','M',7.5,'img src=\"meeow.jpg\" height=\"250\" width=\"250\"/>'),
('02','kenya','Frappuccino','L',10.5,'img src=\"meeow.jpg\" height=\"250\" width=\"250\"/>'),
('03','house blend','Frappuccino','XL',11.5,'img src=\"meeow.jpg\" height=\"250\" width=\"250\"/>'),
('04','french roast','Frappuccino','L',20.5,'img src=\"meeow.jpg\" height=\"250\" width=\"250\"/>'),
('05','sumatra','Frappuccino','M',14.5,'img src=\"meeow.jpg\" height=\"250\" width=\"250\"/>');