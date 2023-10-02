<?php
//$heading = "";

$config = require base_path('config.php');
$db = new Database($config['database']);

$id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
$currentUser = 4;


$note = $db->query('SELECT * FROM notes WHERE id = :id',[':id'=> $id])->findOrFail();
//$note = $note->find();

authorize($note['user_id'] === $currentUser);

// If there is no note with such id then 404 page
/*if(!$note){
    abort(Response::NOT_FOUND);
}*/

//If there is a note with such id but the user is not its author then 403 page
/*if($note['user_id'] !== $currentUser ){
    abort(Response::FORBIDDEN);
}*/

view("notes/show.view.php", ['heading' => "...", 'note' => $note ]);
