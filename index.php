<?php
require "Response.php";
require "Database.php";
require "functions.php";
require "router.php";





/*$id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);

if($id){
    $query = "select * from posts where PostId = :id";

    $posts = $db->query($query, [':id' => $id])->fetch();
    dd($posts);
}*/