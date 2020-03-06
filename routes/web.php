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

Route::get('/preguntas', function () {

    return view ('preguntas');
});


Route::bind('product', function($slug){
    return App\Product::where('slug',$slug)->first();
});


Route::get('/', [
    'as'=>'inicio',
    'uses'=>'StoreController@index'
    ]);   

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('store/{id}', [
    'as'=> 'store-filtrado',
    'uses'=> 'StoreController@filtrado'
]);

Route::get('product/{slug}', [
    'as'=> 'product-datail',
    'uses'=> 'StoreController@show'
]);

//carrito-------cart

Route::get('cart/show',[
'as'=>'cart-show',
'uses'=>'CartController@show'
 ]);

 Route::get('cart/add/{product}',[
 'as'=>'cart-add',
 'uses'=>'CartController@add'
 ]);
 Route::get('cart/delete/{product}',[
     'as'=>'cart-delete',
     'uses'=>'CartController@delete'
 ]);
 Route::get('cart/trash',[
 'as'=>'cart-trash',
 'uses'=>'CartController@trash'
 ]);
 Route::get('cart/update/{product}/{quantity?}',
 [
'as'=>'cart-update',
'uses'=>'CartController@update'
 ]);
 Route::get('cart-detail',[
     'middleware'=>'auth',
    'as'=>'order-detail',
    'uses'=>'CartController@orderDetail'
    ]);

// vista de la compra concluida

Route::get('compra-exitosa',[
'as'=>'compra-exitosa',
'uses'=>'CartController@exito'
]);

// ADMIN

Route::get('admin/home', function () {

    return view ('admin.home');
});

Route::resource('admin/category','Admin\CategoryController');

Route::resource('admin/product', 'Admin\ProductController');

Route::resource('admin/user', 'Admin\UserController');