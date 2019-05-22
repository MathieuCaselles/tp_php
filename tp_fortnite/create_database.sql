create database fortnite;
use fortnite;

CREATE TABLE user (
    id INT AUTO_INCREMENT,
    login VARCHAR(255),
    password VARCHAR(255),
    PRIMARY KEY (id)
);

CREATE TABLE spawn (
    id INT AUTO_INCREMENT,
    name VARCHAR(255),
    PRIMARY KEY (id)
);

insert into spawn (name)
values ('pleasant park'), ('tomato town'), ('wailing woods'), ('anarchy acres');

insert into user (login)
values ('mathieu');

insert into user (password)
values ('mathieu');
