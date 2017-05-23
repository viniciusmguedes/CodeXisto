<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>'auth.checkrole'], function(){

  Route::group(['prefix'=>'categories', 'as'=>'categories.'], function(){

    Route::get('/',             ['as'=>'index',   'uses'=>'CategoriesController@index']);
    Route::get('/create',       ['as'=>'create',  'uses'=>'CategoriesController@create']);
    Route::get('/edit/{id}',    ['as'=>'edit',    'uses'=>'CategoriesController@edit']);
    Route::post('/store',       ['as'=>'store',   'uses'=>'CategoriesController@store']);
    Route::post('/update/{id}', ['as'=>'update',  'uses'=>'CategoriesController@update']);

  });

  Route::group(['prefix'=>'sellers', 'as'=>'sellers.'], function(){

    Route::get('/',             ['as'=>'index',   'uses'=>'SellersController@index']);
    Route::get('/create',       ['as'=>'create',  'uses'=>'SellersController@create']);
    Route::get('/edit/{id}',    ['as'=>'edit',    'uses'=>'SellersController@edit']);
    Route::post('/store',       ['as'=>'store',   'uses'=>'SellersController@store']);
    Route::post('/update/{id}', ['as'=>'update',  'uses'=>'SellersController@update']);

  });

  Route::group(['prefix'=>'statuses', 'as'=>'statuses.'], function(){

    Route::get('/',             ['as'=>'index',   'uses'=>'StatusesController@index']);
    Route::get('/create',       ['as'=>'create',  'uses'=>'StatusesController@create']);
    Route::get('/edit/{id}',    ['as'=>'edit',    'uses'=>'StatusesController@edit']);
    Route::post('/store',       ['as'=>'store',   'uses'=>'StatusesController@store']);
    Route::post('/update/{id}', ['as'=>'update',  'uses'=>'StatusesController@update']);

  });

  Route::group(['prefix'=>'products', 'as'=>'products.'], function(){

    Route::get('/',             ['as'=>'index',   'uses'=>'ProductsController@index']);
    Route::get('/create',       ['as'=>'create',  'uses'=>'ProductsController@create']);
    Route::get('/edit/{id}',    ['as'=>'edit',    'uses'=>'ProductsController@edit']);
    Route::get('/destroy/{id}', ['as'=>'destroy', 'uses'=>'ProductsController@destroy']);
    Route::post('/store',       ['as'=>'store',   'uses'=>'ProductsController@store']);
    Route::post('/update/{id}', ['as'=>'update',  'uses'=>'ProductsController@update']);

  });

  Route::group(['prefix'=>'photos', 'as'=>'photos.'], function(){

    Route::get('/{id}',         ['as'=>'index',   'uses'=>'PhotosController@index']);
    Route::get('/{id}/create',  ['as'=>'create',  'uses'=>'PhotosController@create']);
    Route::get('/destroy/{id}', ['as'=>'destroy', 'uses'=>'PhotosController@destroy']);
    Route::post('/{id}/store',  ['as'=>'store',   'uses'=>'PhotosController@store']);

  });
});

Route::group(['as'=>'client.store.'], function(){

  Route::get('/',               ['as'=>'index',         'uses'=>'StoreController@index']);
  Route::get('/products/{id}',  ['as'=>'products',      'uses'=>'StoreController@products']);
  Route::get('/product/{id}',   ['as'=>'product',       'uses'=>'StoreController@product']);
  Route::get('/publish',        ['as'=>'publish',       'uses'=>'StoreController@publish']);
  Route::get('/contact',        ['as'=>'contact',       'uses'=>'StoreController@contact']);
  Route::get('/about',          ['as'=>'about',         'uses'=>'StoreController@about']);
  
  Route::post('/interest/{id}', ['as'=>'interest',      'uses'=>'StoreController@interest']);
  Route::post('/publish_email', ['as'=>'publish_email', 'uses'=>'StoreController@publishEmail']);
  Route::post('/search',        ['as'=>'search',        'uses'=>'StoreController@search']);
  
});
