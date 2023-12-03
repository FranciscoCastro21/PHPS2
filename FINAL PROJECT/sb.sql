create database crud_project;

use crud_project;

create table user(
    user_ID int primary key AUTO_INCREMENT
username varchar(20) NOT NULL, user_passwordvarchar(20) NOT NULL, email varchar(50) NOT NULL);

create table art_gallery(
artID int primary key AUTO_INCREMENT,
artName varchar(20) NOT NULL,
artPrice varchar(20) NOT NULL,
artAuthor varchar (20) NOT NULL,
artPhoto varchar(255));
