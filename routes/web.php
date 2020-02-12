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
//     return view('frontend.master');
// });

Auth::routes();

Route::get('/', 'frontendcontroller@index');

Route::get('/category-wise-blog/{id}', 'frontendcontroller@category_wise_blog')->name('category-wise-blog');

// visitor auth----------
Route::get('/visitor-login', 'visitorcontroller@index')->name('visitor-login');



Route::get('/home', 'HomeController@index')->name('home');

// for category related--------------

Route::get('/add-category', 'categorycontroller@index')->name('add-category');
Route::post('/save-category', 'categorycontroller@save_category')->name('save-category');
Route::get('/manage-category', 'categorycontroller@manage_category')->name('manage-category');
Route::get('/delete-category/{id}', 'categorycontroller@delete_category')->name('delete-category');
Route::get('/edit-category/{id}', 'categorycontroller@edit_category')->name('edit-category');
Route::post('/update-category', 'categorycontroller@update_category')->name('update-category');

// for blog related----------------

Route::get('/add-blog', 'blogcontroller@index')->name('add-blog');
Route::post('/save-blog', 'blogcontroller@save_blog')->name('save-blog');
Route::get('/manage-blog', 'blogcontroller@manage_blog')->name('manage-blog');
Route::get('/delete-blog/{id}', 'blogcontroller@delete_blog')->name('delete-blog');
Route::get('/edit-blog/{id}', 'blogcontroller@edit_blog')->name('edit-blog');
Route::post('/update-blog', 'blogcontroller@update_blog')->name('update-blog');


