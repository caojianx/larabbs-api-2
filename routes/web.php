<?php

Route::get('/','PagesController@root')->name('root');
Auth::routes();
Route::resource('users','UsersController',['only'=>['show','edit','update']]);
Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('categories','CategoriesController',['only'=>['show']]);