<?php
use Core\Response;

//dump and die function
function dd($value)
{
    echo '<pr>';
    var_dump($value);
    echo '<pre>';

    die();
}

//checking URI address
function urlIs($url)
{
    return $url === $_SERVER['REQUEST_URI'];
}

function rightHeading()
{

    $headings = [
        '/app/notes' => 'Notes',
        '/app/note' => 'Note',
        '/app/about' => 'About',
        '/app/' => 'Home',
        '/app/contact' => 'Contact',
        '/app/note/create' => 'Note Creator',
    ];

    $uri = parse_url($_SERVER['REQUEST_URI']);

    if (array_key_exists($uri['path'], $headings)) {
        return $headings[$uri['path']];
    } else {
        return "Home";
    }

}


function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);

    }
}


/*if($note['user_id'] !== $currentUser ){
    abort(Response::FORBIDDEN);
}*/


function fibbo($number)
{

    $arrayx = [0, 1];

    if ($number < 2) {
        return $arrayx;

    } else {

        for ($i = 0; $i < $number - 1; $i++) {
            $result = $arrayx[count($arrayx) - 1] + $arrayx[count($arrayx) - 2];
            array_push($arrayx, $result);
        }
        return $arrayx;
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}


function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/' . $path);
}