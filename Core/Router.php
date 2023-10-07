<?php

namespace Core;

use Core\Middleware\Authenticated;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;

class Router
{
    protected $routes = [];

    # Add a new route to the router
    /*Parameters:
    $method: The HTTP method (e.g., 'GET', 'POST', 'DELETE', 'PATCH', 'PUT') for the route.
    $uri: The URI pattern to match for the route.
    $controller: The controller that should handle the request for this route. */

    public function add(string $method, string $uri, string $controller): self
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];

        return $this;

    }

    #Add a new GET request route to the router.
    public function get(string $uri, string $controller): self
    {
       return $this->add('GET', $uri, $controller);
    }

    #Add a new POST request route to the router.
    public function post(string $uri, string $controller): self
    {
       return $this->add('POST', $uri, $controller);
    }

    #Add a new DELETE request route to the router.
    public function delete(string $uri, string $controller): self
    {
        return $this->add('DELETE', $uri, $controller);
    }

    #Add a new PATCH request route to the router.
    public function patch(string $uri, string $controller): self
    {
        return $this->add('PATCH', $uri, $controller);
    }

    #Add a new PUT request route to the router.
    public function put(string $uri, string $controller): self
    {
        return  $this->add('PUT', $uri, $controller);
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }


    /* Method used to match a requested URI and HTTP method to a registered route.
    It iterates through the registered routes and returns the appropriate controller if a match is found.
    If no match is found, it calls the abort method with a default HTTP response code of 404.
    Parameters:
    $uri: The requested URI to match against registered routes.
    $method: The HTTP method of the requested route (e.g., 'GET', 'POST').*/

    public function route(string $uri, string $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);

                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }


    /*
     method that is called when no matching route is found.
    It sets the HTTP response code to the specified code (default is 404),
    includes an error view based on the code, and terminates script execution with die(). */

    protected function abort($code = 404): void
    {
        http_response_code($code);

        require base_path("views/{$code}.view.php");

        die();
    }
}