<?php
require "functions.php";
require "router.php";


class Database{

    public function query(){

        // Connect to the MySQL database.
        $dsn = "mysql:host=localhost;port=3306;dbname=app;user=root;charset=utf8mb4";

        // Tip: This should be wrapped in a try-catch.
        $pdo = new PDO($dsn);

        $statement = $pdo->prepare("select * from posts");
        $statement->execute();

        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $posts;
    }
}

$db = new Database();
dd($db->query());
