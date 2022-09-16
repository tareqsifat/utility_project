<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group([
    'namespace' => 'website'
 ],function(){
    Route::get('/', 'WebsiteController@index')->name('website_index');
    Route::get('/about', 'WebsiteController@about')->name('website_about');
    Route::get('/service', 'WebsiteController@service')->name('website_services');
    Route::get('/contact', 'WebsiteController@contact')->name('website_contact');
    
});

Auth::routes();

Route::group([
    'prefix'=>'dashboard',
    'middleware'=>['auth'] 
],function(){
    Route::get('/','admin\DashboardController@index')->name('dashboard');
});

Route::group([
    'prefix'=>'user',
    'middleware'=>['auth'],
],
function(){ 
    //user Route
    Route::get('/index','admin\UserController@index')->name('admin_user_index');
    Route::get('/view/{id}','admin\UserController@view')->name('admin_user_view');
    Route::get('/create','admin\UserController@create')->name('admin_user_create');
    Route::post('/store','admin\UserController@store')->name('admin_user_store');
    Route::get('/edit/{id}','admin\UserController@edit')->name('admin_user_edit');
    Route::post('/update','admin\UserController@update')->name('admin_user_update');
    Route::post('/delete','admin\UserController@delete')->name('admin_user_delete');
    Route::get('/test/{id}','admin\UserController@test')->name('admin_user_test');
        
});

Route::group([
    'namespace'=>'system',
    'middleware'=>['auth']
],function(){

});

