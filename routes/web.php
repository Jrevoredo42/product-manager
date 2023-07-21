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
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);

Route::get('/products/{id}', function($id){
    return view('product',['id' => $id]);
});

Route::get('/products   ', function(){

    $busca = request('search');

    return view('products',['busca' => $busca]);
});

Route::get('/products/create', [ProductController::class, 'create']);
