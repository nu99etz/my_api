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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('pegawai',[
  'as' => 'pegawai', 'uses' => 'PegawaiController@getAllPegawai'
]);

$router->get('pegawai/{id}',[
  'as' => 'pegawai', 'uses' => 'PegawaiController@getAllPegawai'
]);

$router->post('pegawai',[
  'as' => 'pegawai', 'uses' => 'PegawaiController@addPegawai'
]);

$router->delete('pegawai/{id}',[
  'as' => 'pegawai', 'uses' => 'PegawaiController@deletePegawai'
]);
