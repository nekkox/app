<?php

//dump and die function
function dd($value){
    echo '<pr>';
    var_dump($value);
    echo '<pre>';

    die();
}

//checking URI address
function urlIs($url){
    return $url === $_SERVER['REQUEST_URI'];
}