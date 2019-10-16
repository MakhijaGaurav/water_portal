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

// Route::get('/','DashboardPagesController');
Route::get('/dashboard/bills','DashboardPagesController@getAllBills');
Route::get('/dashboard/complains','DashboardPagesController@getAllComplains');
Route::get('/dashboard/feedback','DashboardPagesController@getAllFeedbacks');
Route::get('/dashboard/users','DashboardPagesController@getAllUsers');
Route::get('/dashboard/consumption/all','DashboardPagesController@getAllConsumption');
Route::get('/dashboard/consumption/unit','DashboardPagesController@getUnitConsumption');
Route::get('/dashboard/consumption/family','DashboardPagesController@getFamilyConsumption');