<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/bill/create","Api\BillRestController@store")->name("bill.store");
Route::post("/family/create","Api\FamilyRestController@store");
Route::get("/family/{family_id}/update","Api\FamilyRestController@update");
Route::get("/family/{family_id}/destroy","Api\FamilyRestController@destroy");
Route::get("/family/all","Api\FamilyRestController@getAllFamily");
