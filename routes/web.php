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

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index')->name('admin');

    Route::get('users', 'UserController@index')->name('users.index');
    Route::get('users/create', 'UserController@create')->name('users.create');
    Route::post('users/create-user', 'UserController@store')->name('users.store');
    Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::post('users/update-user/{id}', 'UserController@update')->name('users.update');
    Route::post('users/delete/{id}', 'UserController@destroy')->name('users.destroy');

    Route::get('posts', 'PostController@index')->name('posts.index');
    Route::get('posts/create', 'PostController@create')->name('posts.create');
    Route::post('posts', 'PostController@store')->name('posts.store');
    Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit');
    Route::get('posts/modal_edit/{id}', 'PostController@getEditModal')->name('posts.modal_edit');
    Route::post('posts/update/{id}', 'PostController@update')->name('posts.update');
    Route::post('posts/delete/{id}', 'PostController@destroy')->name('posts.destroy');

    Route::get('categories','CategoryController@index')->name('categories.index');
    Route::get('categories/modal_create', 'CategoryController@getCreateModal')->name('categories.modal_create');
    Route::post('categories/create-category', 'CategoryController@store')->name('categories.store');
    Route::get('categories/modal_edit/{id}', 'CategoryController@getEditModal')->name('categories.modal_edit');
    Route::post('categories/update/{id}', 'CategoryController@update')->name('categories.update');
    Route::post('categories/delete/{id}', 'CategoryController@destroy')->name('categories.destroy');

    Route::get('roles','RoleController@index')->name('roles.index');
    Route::get('roles/modal_create', 'RoleController@getCreateModal')->name('roles.modal_create');
    Route::post('roles/create-role', 'RoleController@store')->name('roles.store');
    Route::get('roles/modal_edit/{id}', 'RoleController@getEditModal')->name('roles.modal_edit');
    Route::post('roles/update/{id}', 'RoleController@update')->name('roles.update');
    Route::post('roles/delete/{id}', 'RoleController@destroy')->name('roles.destroy');

    Route::get('permissions','PermissionController@index')->name('permissions.index');
    Route::get('permissions/permission', 'PermissionController@getCreateModal')->name('permissions.modal_create');
    Route::post('permissions/create-permission', 'PermissionController@store')->name('permissions.store');
    Route::get('permissions/modal_edit/{id}', 'PermissionController@getEditModal')->name('permissions.modal_edit');
    Route::post('permissions/update/{id}', 'PermissionController@update')->name('permissions.update');
    Route::post('permissions/delete/{id}', 'PermissionController@destroy')->name('permissions.destroy');
});


