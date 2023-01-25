<?php

require_once ('src/Regicide.php');
$deck = new Regicide(1);

$db = new Database(require('config.php'));
$notes = $db -> query('SELECT * FROM note WHERE id = 1') -> fetchAll();

$header = 'Notes';

require "views/notes.view.php";

?>