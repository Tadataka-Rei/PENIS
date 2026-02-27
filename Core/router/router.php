<?php
declare(strict_types=1);
class Router
{
    private array $routes= [];

    public function add(string $path, Closure $handler): void
    {
        $this->routes[$path] = $handler;
    }

    public function dispatch(string $path): void
    {
        foreach($this->routes as $route => $handler)
        {
            $pattern = preg_replace("#\{\w+\}#", "([^\/]+)", $route);
            print_r($pattern);

            if (preg_match("#^$pattern$#", $path, $matches))
            {
                print_r($matches);
                return;
            }
        }
    }
}