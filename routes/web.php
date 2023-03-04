<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

/*
// Route::get('/', function () {
//     return env('welcome');
// });

// Route that sends back a view
Route::get('/', function () {
    return view('welcome');
});

// Route to users - string
Route::get('/users', function () {
    return 'This is Mezzo\'s users page';
});

// Route to users - Array(JSON)
Route::get('/users', function () {
    return ['PHP', 'HTML', 'Laravel'];
});

// Rout to users - JSON object
Route::get('/users', function () {
    return response()->json([
        'name' => 'Mezzo',
        'course' => 'Learning Laravel basics and crazy stuff'
    ]);
});

// Route to users - function
Route::get('/users', function () {
    return redirect('/');
});

// localhost == /
// firstproject.com == /     here replaced 127.0.0.1 because it was changed in the hosts file
// localhost/users = /users 

*/

///////////////////////////////////////////////////

// Route::get('/', function () {
//     return view('home');
// });

// Laravel 8 (New)
// Route::get('/products', [ProductsController::class, 'index']);
// Route::get('products/about', [ProductsController::class, 'about']);

// Laravel 8 (Also New)
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');

// Before Laravel 8
// Route::get('/products', 'ProductsController@index');

//////////////////////////////////////////////////////

/*
* Passing Route Parameters
* /products = all products
* /products/productName
* /products/productId
* In laravel to pass Route params it is always to be in a curly braces, 
* and it should consist of alphabetic characters.
*/

// Route::get('/products/{id}', [ProductsController::class, 'show']);
// Route::get('/products/{name}', [ProductsController::class, 'show']);

// Pattern is an integer
// Route::get('/products/{id}', 
//     [ProductsController::class, 'show'])->where('id', '[0-9]+');
// Pattern is a string
// Route::get('/products/{name}', 
//     [ProductsController::class, 'show'])->where('name', '[a-z A-Z]+');
// Example of adding multilple patterns for checking
// Route::get('/products/{name}/{id}', 
//     [ProductsController::class, 'show'])->where([
//         'name' => '[a-z]+',
//         'id' => '[0-9]+'
//     ]);

// Using named routes
// The name for this route end point could be any name, but it is recommended 
// to be identical to the end point. 
// Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

// Posts endpoint
Route::get('/posts', [PostsController::class, 'index']);
