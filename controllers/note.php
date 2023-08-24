<?php
$heading = "";

$config = require('config.php');
$db = new Database($config['database']);

$id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);

$note = $db->query('SELECT * FROM `notes` WHERE `id` = :id',[':id'=> $id])->fetch();


require "views/note.view.php";
