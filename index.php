<?php

require('router.php');

$dsn = "mysql:host=localhost;port=3306;dbname=gundam;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from gunpla");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

?>