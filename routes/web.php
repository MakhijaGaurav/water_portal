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

Route::prefix('admin')->group(function () {
    /*
     * USER ROUTES
     */
    Route::resource('/', 'AdminController');
    Route::get('/user/add', 'UserController@addUser');
    Route::resource('/user', 'UserController');
    Route::resource('/consumption','ConsumptionController');

    /*
     * FAMILY ROUTES
     */
    Route::get('/family/add', 'FamilyController@addFamily');
    Route::resource('/family', 'FamilyController');

    /*
     * BILL ROUTES
     */
    Route::resource('/bill','BillController');

    /*
     * COMPLAIN ROUTES
     */
    Route::resource('/complain','ComplainController');

    /*
     * FEEDBACK ROUTES
     */
    Route::resource('/feedback','FeedBackController');
});

Route::redirect('/', '/login');
Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
