CREATE DATABASE IF NOT EXISTS esempio;
USE esempio;

CREATE TABLE IF NOT EXISTS utente (
    id integer primary key AUTO_INCREMENT,
    username varchar(32) unique,
    password varchar(256),
    nome varchar(32),
    cognome varchar(32));

CREATE TABLE IF NOT EXISTS posizione (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_id integer,
    datetime timestamp,
    lat float,
    lon float,
    msg varchar(256),
    FOREIGN KEY (user_id) REFERENCES utente(id) ON DELETE CASCADE ON UPDATE CASCADE);
