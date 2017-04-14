<?php
  class Router {
    function addRoute($route, callable $call) {
      // call the second paramater and execute
      $this->route[$route] = $call;
    }
    function execute() {
      $server = $_SERVER['PATH_INFO'];
      $path = isset($server) ? $server : '/';
      $this->route[$path]();
    }
  }
  // New router instance
  $router = new Router();
  // Add the route and what class to call and which function to fire off
  $router->addRoute('/foo/bar', [new Foo, 'bar']);
  // Get the path and make the magic happen
  $router->execute();

  class Foo {
    function bar() {
      echo 'Class Foo, Function Bar';
    }
  }
