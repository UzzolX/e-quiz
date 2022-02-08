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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WelcomeController@index')->name('welcome.index');


Route::get('/dashboard', 'admin\dashboard\DashboardController@index')->name('dashboard.index');


Route::get('/dashboard/blogs', 'admin\Blogs\BlogsController@index')->name('blogs.index');
Route::get('/dashboard/blogs/create', 'admin\Blogs\BlogsController@create')->name('blogs.create');
Route::post('/dashboard/blogs/create', 'admin\Blogs\BlogsController@store')->name('blogs.store');
Route::get('/dashboard/blogs/{id}', 'admin\Blogs\BlogsController@show')->name('blogs.show');
Route::get('/dashboard/blogs/{id}/edit', 'admin\Blogs\BlogsController@edit')->name('blogs.edit');
Route::post('/dashboard/blogs/{id}/update', 'admin\Blogs\BlogsController@update')->name('blogs.update');
Route::get('/dashboard/blogs/{id}/delete', 'admin\Blogs\BlogsController@destroy')->name('blogs.delete');

Route::get('/dashboard/category', 'admin\category\CategoryController@index')->name('category.index');
Route::get('/dashboard/category/create', 'admin\category\CategoryController@create')->name('category.create');
Route::post('/dashboard/category/create', 'admin\category\CategoryController@store')->name('category.store');
Route::get('/dashboard/category/{id}', 'admin\category\CategoryController@show')->name('category.show');
Route::get('/dashboard/category/{id}/edit', 'admin\category\CategoryController@edit')->name('category.edit');
Route::post('/dashboard/category/{id}/update', 'admin\category\CategoryController@update')->name('category.update');
Route::get('/dashboard/category/{id}/delete', 'admin\category\CategoryController@destroy')->name('category.delete');


Route::get('/contact-us', 'Pages\Contact\ContactController@index')->name('contact.index');
Route::post('/contact-us/store', 'Contact\ContactController@store')->name('contact.store');

Route::get('/courses', 'Pages\Course\CourseController@index')->name('course.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
