<?php

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
use App\Product;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/product',"ProductController@ViewProduct");
Route::get('/ajout',"ProductController@AjoutProduit");
Route::post('/ajout',"ProductController@AjoutProduit");
Route::get('ajout/{id}', function($id){
	$product=Product::find($id);
	$product->delete();
	return redirect("product");
});


Route::get('modifier/{id}',"ProductController@ModifierProduit");
Route::post('modifier/{id}',"ProductController@ModifierProduit");