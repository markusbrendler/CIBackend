<?php

/*
 * markusbrendler:cibackend routes file.
 */
$routes->group('', ['namespace' => 'markusbrendler\cibackend\Controllers'], function ($routes) {
    $routes->get('test', 'BackendController::test', ['as' => 'test']);
    $routes->post('test', 'AuthController::postTest');
  
});
