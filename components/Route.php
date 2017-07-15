<?php


class Route
{
    private $routes;
    public function getUrl()
    {
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }
    public function run()
    {
        $uriPattern = $this->routes;
        $path = include $uriPattern;

        echo $path;
        $uri = $this->getUrl();
        echo $uri;
    }
}