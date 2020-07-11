<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'MyController@displayCustomer');
$router->post('/post','MyController@addCustomer');
$router->put('/update/{id}','MyController@updateCustomer');
$router->delete('/delete/{id}','MyController@deleteCustomer');


$router->get('/connection','ExampleController@databaseConncection');
// $router->post('/catch','MyController@catch');
// $router->get('/download', 'MyController@download');

