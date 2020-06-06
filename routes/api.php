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

Route::post("");
Route::post("/bill/create","Api\BillRestController@store")->name("bill.store");

/*****
 * FAMILY API
 */
//creating family
Route::post("/family/create","Api\FamilyRestController@store");
//updating family
Route::get("/family/{family_id}/update","Api\FamilyRestController@update");
//delete family
Route::get("/family/{family_id}/destroy","Api\FamilyRestController@destroy");
//get family members
Route::get("/family/{family_id}/members/all","Api\FamilyRestController@getAllMembers");
//get all families
Route::get("/family/all","Api\FamilyRestController@getAllFamily");
//get alloted family cards
Route::get("/family/{family_id}/card/all",'Api\FamilyRestController@getRfidDetails');
//get family consumption
Route::get("/family/{family_id}/consumption/all",'Api\FamilyRestController@getAllConsumption');
//get all family bills
Route::get('family/{family_id}/bill/all','Api\FamilyRestController@getAllBills');
//get all complains


//check for scanned rfid
Route::get('check/{rfid}','Api\RfidController@checkIfValid');

//get meter reading
Route::get('/rfid/{rfid}/consumption/{consumption}','Api\RfidController@recordConsumption');
