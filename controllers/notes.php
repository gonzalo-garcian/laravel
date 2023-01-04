<?php

require_once ('src/Standard52.php');
$deck = new Standard52();

$deck->cardsToString();

$db = new Database(require('config.php'));
$notes = $db -> query('SELECT * FROM note WHERE id = 1') -> fetchAll();

$header = 'Notes';

require "views/notes.view.php";

?>