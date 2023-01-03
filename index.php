<?php

require('functions.php');
require('router.php');
require('Database.php');


$db = new Database(require('config.php'));
$posts = $db -> query('SELECT * FROM gunpla WHERE id = :id', [':id' => $_GET['id']]) -> fetchAll();


foreach($posts as $post){

    echo "<h1> {$post['name']}, {$post['grade']} {$post['scale']} ({$post['collection']}) </h1>";

}

