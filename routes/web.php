<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\getProductToRawAssociationController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/cp', function () {
    return view('cr');
});


Route::get('/addNewMenu', function () {
    return view('addMenuItems');
});

Route::get('/es', function () {

    
    return view('enterSales');
    
});

//https://www.w3schools.com/js/js_ajax_database.asp
Route::get('/dbcheck',function(){

$results=DB::select('select * from vw_producttorecipeview');

return $results[0]->RMID;
});


Route::get('/getAllRecipes/{PID}',[getProductToRawAssociationController::class, 'getRecipes'] );
Route::get('/getAllMenuItems',[getProductToRawAssociationController::class, 'getAllMenuProducts'] );
Route::get('/getAllMenuItemsTable',[getProductToRawAssociationController::class, 'getAllMenuProductsTable'] );
Route::get('/getIdealStock',[getProductToRawAssociationController::class, 'getIdealStock'] );
Route::get('/golakabab/{data}',[getProductToRawAssociationController::class, 'golakabab'] );




Route::get('/chp', function () {
    return view('changePrice');
});
Route::get('/vrs', function () {
    return view('viewRawMat');
});
Route::get('/sis', function () {
    return view('setIdealStock');
});
Route::get('/arm',function(){


return view('addRawMat');


});










Route::get('/createrecipe',function(){

return "Recipe page here";

});


Route::get('/srm/{RawID}/{RawMName}',function($RawID,$RawMname){

    return "Raw Matirial Name is ".$RawMname."And the ID is ". $RawID;


});