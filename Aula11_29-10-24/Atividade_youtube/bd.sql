create database video_php_pdo;

use video_php_pdo;

create table video(
    id_video int primary key auto_increment, 
    nome varchar(100), 
    link varchar(500)
);

show tables;

desc video;