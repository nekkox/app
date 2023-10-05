<?php

use Core\App;
use Core\Database;


//$config = require base_path('config.php');
//$db = new Database($config['database']);
$db = App::resolve(Database::class);

$id = 1;

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1');
$notes = $notes->findAll();


view("notes/index.view.php", [
    'heading' => "My Notes",
    'notes' => $notes
]);
