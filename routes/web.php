<?php

Auth::routes();

Route::get('/', function () {return view('index');})->name('home');

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'PostController@index')->name('list_posts');
    Route::get('/drafts', 'PostController@drafts')->name('list_drafts')->middleware('auth');
    Route::get('/show/{slug}', 'PostController@show')->name('show_post');
    Route::get('/create', 'PostController@create')->name('create_post')->middleware('can:create-post');
    Route::post('/create', 'PostController@store')->name('store_post')->middleware('can:create-post');
    Route::get('/edit/{post}', 'PostController@edit')->name('edit_post')->middleware('can:update-post,post');
    Route::post('/edit/{post}', 'PostController@update')->name('update_post')->middleware('can:update-post,post');
    Route::get('/publish/{post}', 'PostController@publish')->name('publish_post')->middleware('can:publish-post');
    Route::get('/unpublish/{post}', 'PostController@unPublish')->name('unpublish_post')->middleware('can:publish-post');
});

Route::group(['prefix' => 'portfolio'], function () {
    Route::get('/', 'PortfolioController@index')->name('list_works');
//    Route::get('/drafts', 'PostController@drafts')->name('list_drafts')->middleware('auth');
//    Route::get('/show/{slug}', 'PostController@show')->name('show_post');
//    Route::get('/create', 'PostController@create')->name('create_post')->middleware('can:create-post');
//    Route::post('/create', 'PostController@store')->name('store_post')->middleware('can:create-post');
//    Route::get('/edit/{post}', 'PostController@edit')->name('edit_post')->middleware('can:update-post,post');
//    Route::post('/edit/{post}', 'PostController@update')->name('update_post')->middleware('can:update-post,post');
//    Route::get('/publish/{post}', 'PostController@publish')->name('publish_post')->middleware('can:publish-post');
//    Route::get('/unpublish/{post}', 'PostController@unPublish')->name('unpublish_post')->middleware('can:publish-post');
});