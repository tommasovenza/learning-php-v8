<?php

namespace App\Routing;

// Router Class
class Router
{
    // routes
    private array $routes = [];

    // register
    public function register(string $path, callable $action): self
    {
        $this->routes[$path] = $action;
        return $this;
    }

    public function execute(): string
    {
        // get path from server
        $path = explode('?', $_SERVER['REQUEST_URI'])[0];
        // find action lookin into array
        $action = $this->routes[$path] ?? null;

        if (!$action) {
            throw new \Exception('404 route not found!');
        }

        // action
        return call_user_func($action);
    }
}
