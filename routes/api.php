<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$router->group(['prefix' => 'v1'],function () use ($router) {

    $router->group(['prefix' => 'restaurant'], function () use($router) {
        $router->get('all',['uses' => 'Restaurant\GetAllController']);
    });

    $router->group(['prefix' => 'foodcategory'], function () use($router) {
        $router->get('all',['uses' => 'FoodCategory\GetAllController']);
        $router->get('all/first',['uses' => 'FoodCategory\GetFirstCategoryController']);
    });


});
