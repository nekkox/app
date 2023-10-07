<?php
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php')->only('auth');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');

$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');

$router->get('/note/edit', 'controllers/notes/edit.php'); //Get the site /note/edit where you can edit the chosen note
$router->patch('/note', 'controllers/notes/update.php'); //Update the note with patch method

$router->get('/register', 'controllers/registration/create.php')->only('guest'); //Get the site /register where you can create new user
$router->post('/register', 'controllers/registration/store.php'); //Store user in database if email does not exist