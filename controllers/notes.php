<?php
$heading = "My Notes";

$config = require('config.php');
$db = new Database($config['database']);

$id = 3;

$notes = $db->query('SELECT * FROM `notes` WHERE `user_id` = 3')->fetchAll();

require "views/notes.view.php";
