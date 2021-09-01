<?php

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->group(['middleware' => 'role:Admin'], function () use ($router) {
        $router->group(['prefix' => 'admin'], function () use ($router) {
            $router->get('user', 'Api\V1\User\UserIndexController@index');
            $router->post('user', 'Api\V1\User\UserStoreController@store');
            $router->put('user/update', 'Api\V1\User\UserUpdateController@update');
            $router->patch('user/update/password', 'Api\V1\User\UserUpdatePasswordController@UpdatePassword');
            $router->patch('user/update/rol', 'Api\V1\User\UserUpdateRoleController@UpdateRole');
            $router->delete('user/delete', 'Api\V1\User\UserDeleteController@delete');
        });
    });
});
