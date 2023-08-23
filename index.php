<?php
require "functions.php";
require "router.php";
require "Database.php";

$config = require('config.php');
$db = new Database($config['database']);
$id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);

if($id){
    $query = "select * from posts where PostId = :id";

    $posts = $db->query($query, [':id' => $id])->fetch();
    dd($posts);
}