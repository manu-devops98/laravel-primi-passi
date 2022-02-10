<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $data = [
    'links' => [
        [
            'name' => 'Home',
            'href' => '/'
        ],
        [
            'name' => 'Contatti',
            'href' => '/contatti'
        ],
        [
            'name' => 'Privacy',
            'href' => '/privacy'
        ],
        [
            'name' => 'Iscriviti',
            'href' => '/iscriviti'
        ],
      ]
    ];


    return view('home', $data);
});

Route::get('/contatti', function () {
    return view('contacts');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/iscriviti', function () {
    return view('submit');
});
