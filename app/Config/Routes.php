<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index'); Servicios
$routes->get('/', 'Index::index');
$routes->get('/contacto', 'Contacto::index');
$routes->get('/Quienes_Somos', 'Quienes_Somos::index');
$routes->get('/Servicios', 'Servicios::index');
$routes->get('/gracias', 'Gracias::index');
