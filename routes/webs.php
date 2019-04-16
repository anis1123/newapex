<?php
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/drafts', 'PostController@drafts')
->name('list_drafts')
->middleware('auth');


Route::get('all','PostController@all');



Route::get('post','PostController@index');
Route::get('posts', 'PostController@index')->name('list_posts');


Route::get('/show/{id}', 'PostController@show')
->name('show_post');

Route::get('/create', 'PostController@create')
->name('create_post')
->middleware('can:create-post');



Route::post('/create', 'PostController@store')
->name('store_post')
->middleware('can:create-post');

Route::get('edit/{post}', 'PostController@edit')
->name('edit_post1')
->middleware('can:update-post,post');

Route::post('/{post}', 'PostController@update')
->name('update_post')
->middleware('can:update-post,post');

Route::get('/publish/{post}', 'PostController@publish')
->name('publish_post')
->middleware('can:publish-post');

Route::get('/delete/{id}', 'PostController@delete')
->name('delete_post');




Route::get('/general-post', 'GeneralController@create')
->name('create_general')
->middleware('can:create-post');

Route::get('/general/post/{id}', 'GeneralController@delete')
->name('delete_general');

Route::get('/general','GeneralController@index')
->name('list-general');

Route::post('/general', 'GeneralController@store')
->name('store_element');

Route::get('user','PostController@list');

Route::get('Register',[
    'middleware'=>'admin',

]);