<?php
// check if its a valid url
$destination = $_POST["destination"];

//generate short version
$short_url = uniqid();

// save long + short version to DB
$pdo = new PDO('sqlite:database.sql');
$stmnt = $pdo->prepare(
    "INSERT INTO `urls` (`shorturl`, `destination`)
    VALUES (?, ?)"
);
$stmnt->execute(array($short_url, $destination));

echo $_SERVER["HTTP_HOST"] . "/$short_url";
