<?php

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->post('auth/login', 'Auth\V1\AuthLoginController@login');
    $router->post('auth/register', 'Auth\V1\AuthRegisterController@register');

    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->post('auth/refresh', 'Auth\V1\AuthRefreshController@refresh');
        $router->post('auth/logout', 'Auth\V1\AuthLogoutController@logout');
    });
});
