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

Route::get('/','MainController@index');
Route::get('/about','MainController@about');
Route::get('/blog','MainController@blog');
Route::get('/contact','MainController@contact');
Route::get('/admissions','MainController@admissions');
Route::get('/Registration','MainController@registration');
Route::post('/register','MainController@apply')->name('apply');


//login  (admin)
Route::get('/adminlogin','MainController@login');
Route::post('/adminlogin','Auth\LoginController@login')->name('login'); //login button

//logOut (admin)
Route::post('/adminlogout','Auth\LoginController@logout')->name('adminlogout'); //logout button

//registration
Route::post('/checkRegistration','MainController@checkRegistration')->name('checkRegistration');

//dashboard
Route::get('/dashboard','DashboardController@index')->middleware('auth');
Route::get('/dashboard/applicants','DashboardController@table')->middleware('auth');
Route::get('/dashboard/news','DashboardController@news')->middleware('auth');
Route::get('/dashboard/addNews','DashboardController@addNews')->middleware('auth');
Route::post('/addNews','NewsController@addNews')->name('addNews');
Route::get('/editNews/{id}','NewsController@editNews');
Route::patch('/updateNews/{id}','NewsController@updateNews')->name('updateNews');
Route::get('/deleteNews/{id}','NewsController@deleteNews');
























// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
