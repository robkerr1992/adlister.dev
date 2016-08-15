<?php

//$_ENV = include __DIR__ . '/.env.php';
//require_once '../db_connect.php';

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    NAME VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);


DROP TABLE IF EXISTS classes;

CREATE TABLE classes (
    NAME VARCHAR(240) NOT NULL,
    PRIMARY KEY (NAME)
);
DROP TABLE IF EXISTS decks;

CREATE TABLE decks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    deck_name VARCHAR(240) NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    class_name VARCHAR(240) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id),
    FOREIGN KEY (class_name) REFERENCES classes (NAME)
);

DROP TABLE IF EXISTS cards;

CREATE TABLE cards (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    card_id INT UNSIGNED NOT NULL,
    NAME VARCHAR(240) NOT NULL,
    deck_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (deck_id) REFERENCES decks (id),
    PRIMARY KEY (id)
);





