<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$currentUserId = 1;

var_dump($_GET);

// Its going to be refactored
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $db->query('select * from notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    $_GET['xxxx']='ppp';

    authorize($note['user_id'] === $currentUserId);

    $db->query('delete from notes where id = :id', [
        'id' => $_GET['id']
    ]);

    header('location: /notes');
    exit();
} else {
    $note = $db->query('select * from notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    view("notes/show.view.php", [
        'heading' => "...",
        'note' => $note
    ]);
}
