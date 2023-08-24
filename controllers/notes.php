<?php
$heading = "Recent Notes";

$config = require('config.php');
$db = new Database($config['database']);

$id = 3;

$notes = $db->query('SELECT * FROM `notes` WHERE `user_id` = 1')->fetchAll();

require "views/notes.view.php";
