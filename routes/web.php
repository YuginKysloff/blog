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
    Route::get('/drafts', 'PortfolioController@drafts')->name('list_portfolio_drafts')->middleware('auth');
    Route::get('/show/{slug}', 'PortfolioController@show')->name('show_work');
    Route::get('/create', 'PortfolioController@create')->name('create_work')->middleware('can:create-post');
    Route::post('/create', 'PortfolioController@store')->name('store_work')->middleware('can:create-post');
    Route::get('/edit/{post}', 'PortfolioController@edit')->name('edit_work')->middleware('can:update-post,post');
    Route::post('/edit/{post}', 'PortfolioController@update')->name('update_work')->middleware('can:update-post,post');
    Route::get('/publish/{post}', 'PortfolioController@publish')->name('publish_work')->middleware('can:publish-post');
    Route::get('/unpublish/{post}', 'PortfolioController@unPublish')->name('unpublish_work')->middleware('can:publish-post');
});