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
        $router->get('all/second',['uses' => 'FoodCategory\GetSecondCategoryController']);
    });

    $router->group(['prefix' => 'menurestaurant'], function () use($router) {
        $router->get('all/restaurant',['uses' => 'MenuRestaurant\GetAllByRestaurantController']);
    });

    $router->group(['prefix' => 'food'], function () use($router) {
            $router->get('all/restaurant',['uses' => 'Food\GetAllByRestaurantController']);
    });

    $router->group(['prefix' => 'auth'], function () use($router) {
        $router->post('login/user',['uses' => 'User\LoginController']);
    });

    $router->group(['prefix' => 'cart'], function () use($router) {
        $router->post('add',['uses' => 'Cart\AddController']);
        $router->get('all/user',['uses' => 'Cart\GetController']);
        $router->put('update/qty',['uses' => 'Cart\UpdateQtyCartController']);
        $router->get('get/totalcart',['uses' => 'Cart\GetTotalCartController']);
    });

});
