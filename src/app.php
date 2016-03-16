<?php

use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;



$routes = new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}', array(
    'name' => 'World',
    '_controller' => function ($request) {
        $request->attributes->set('foo', 'bar');
    
        $response = render_template($request);
        $response->headers->set('Content-Type', 'text/plain');
        return $response;
    }
)));

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'yaer' => null,
    '_controller' => 'Calendar\\Controller\\LeapYearController::indexAction', 
)));

return $routes;
