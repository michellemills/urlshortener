<?php
$pdo = new PDO('sqlite:database.sql');
$pdo->exec("CREATE TABLE IF NOT EXISTS urls (
    id int PRIMARY KEY,
    shorturl varchar(100) NOT NULL,
    destination text NOT NULL)"
);
