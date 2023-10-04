<?php
use Core\Database;


$config = require base_path('config.php');

$db = new Database($config['database']);

$id = 3;

$notes = $db->query('SELECT * FROM notes WHERE user_id = 4');
$notes = $notes->findAll();


view("notes/index.view.php", [
    'heading' => "My Notes",
    'notes' => $notes
]);
