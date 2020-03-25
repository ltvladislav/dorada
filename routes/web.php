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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    $namespacePrefix = 'WithItemsBase\\';
    Route::group([
        'as'     => 'voyager.infoblocks.',
        'prefix' => 'infoblocks/{master}',
    ], function () use ($namespacePrefix) {
        Route::get('builder', ['uses' => $namespacePrefix.'BaseWithItemsController@builder',    'as' => 'builder']);
        Route::post('order', ['uses' => $namespacePrefix.'BaseWithItemsController@order_item', 'as' => 'order']);

        Route::group([
            'as'     => 'item.',
            'prefix' => 'item',
        ], function () use ($namespacePrefix) {
            Route::delete('{id}', ['uses' => $namespacePrefix.'BaseWithItemsController@delete_item', 'as' => 'destroy']);
            Route::post('/', ['uses' => $namespacePrefix.'BaseWithItemsController@add_item',    'as' => 'add']);
        });
    });


    Route::group([
        'as'     => 'voyager.galleries.',
        'prefix' => 'galleries/{master}',
    ], function () use ($namespacePrefix) {
        Route::get('builder', ['uses' => $namespacePrefix.'BaseWithItemsController@builder',    'as' => 'builder']);
        Route::post('order', ['uses' => $namespacePrefix.'BaseWithItemsController@order_item', 'as' => 'order']);

        Route::group([
            'as'     => 'item.',
            'prefix' => 'item',
        ], function () use ($namespacePrefix) {
            Route::delete('{id}', ['uses' => $namespacePrefix.'BaseWithItemsController@delete_item', 'as' => 'destroy']);
            Route::post('/', ['uses' => $namespacePrefix.'BaseWithItemsController@add_item',    'as' => 'add']);
        });
    });
});

Route::post('/postService', 'Posts\PostController@postService')->name('postService');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        return view('index')->withShortcodes();
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');


    Route::get('/posts', 'Posts\PostController@publicIndex')->name('posts');
    Route::get('/post/{slug?}', 'Posts\PostController@publicShow')->name('post');


    Route::get('{pageSlug}', 'Pages\PageController@show');
});


