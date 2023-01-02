<?php

require('router.php');
require('Database.php');


$db = new Database();
$posts = $db -> query('select * from gunpla');


foreach($posts as $post){

    echo "<h1> {$post['name']}, {$post['grade']} {$post['scale']} ({$post['collection']}) </h1>";

}

