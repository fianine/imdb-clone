<?php

Route::group(['before' =>  'auth'], function(){
  Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::match(['get', 'post'], 'login', 'Auth\LoginController@login');
  Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){

  // Dashboard
  Route::get('admin/dashboard', 'Admin\DashboardController@index');

  // Movies
  Route::get('admin/movies', 'Admin\MoviesController@index');
  Route::match(['get', 'post'], 'admin/movies/add', 'Admin\MoviesController@add');
  Route::match(['get', 'post'], 'admin/movies/edit/{id}', 'Admin\MoviesController@edit');
  Route::delete('admin/movies/delete/{id}', 'Admin\MoviesController@delete');

});

Route::get('/', 'PagesController@index');
Route::get('detail/{id}', 'PagesController@detail');
Route::post('send/comments/{id}', 'PagesController@send_comment');

?>
