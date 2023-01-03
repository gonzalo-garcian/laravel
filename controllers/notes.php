<?php

$db = new Database(require('config.php'));
$posts = $db -> query('SELECT * FROM note WHERE id = 1') -> fetchAll();

dd($posts);

$header = 'Notes';

require "views/notes.view.php";

?>