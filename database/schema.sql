create database if not exists library;
use library;

create table livros (
    id int auto_increment primary key,
    title varchar(50),
    author varchar(40),
    publisher varchar(50),
    year smallint,
    pages smallint,
    pdf varchar(255) null,
    synopsis text,
    cover varchar(255),
    isbm varchar(20)
);