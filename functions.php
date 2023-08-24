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

function rightHeading(){

    $headings = [
      '/app/notes' => 'Notes',
      '/app/note' => 'Note',
      '/app/about' => 'About',
      '/app/' => 'Home',
      '/app/contact' => 'Contact',
    ];

    $uri = parse_url($_SERVER['REQUEST_URI']);

    if(array_key_exists($uri['path'],$headings)){
        return $headings[$uri['path']];
    }else{
        return "Home";
    }

}