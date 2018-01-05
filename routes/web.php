<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/manage/post','PostController@ManagePost')->name('manage.post');

Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');