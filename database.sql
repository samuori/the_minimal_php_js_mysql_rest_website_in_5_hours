CREATE DATABASE IF NOT EXISTS esempio;
USE esempio;

CREATE TABLE IF NOT EXISTS utente (id integer primary key,
                                   username varchar(32) unique,
                                   password varchar(32),
                                   nome varchar(32),
                                   cognome varchar(32));

CREATE TABLE IF NOT EXISTS posizione (user_id integer primary key,
                                      datetime timestamp,
                                      lat float,
                                      lon float,
                                      msg varchar(256),
                                      FOREIGN KEY (user_id)
                                      REFERENCES utente(id)
                                      ON DELETE CASCADE
                                      ON UPDATE CASCADE); 
