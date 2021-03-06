<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\getProductToRawAssociationController;
use App\Http\Controllers\tblRawMaterialController;
use App\Http\Controllers\testForJson;
use App\Http\Controllers\CUDtlbRawtoMenu;
use App\Http\Controllers\CUDtbltblrawm;
use App\Http\Controllers\tblMenuProducts;
use App\Http\Controllers\tblSalesController;


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
    return view('addMenu');
});

Route::get('/es', function () {

    
    return view('enterSales');
    
});

//https://www.w3schools.com/js/js_ajax_database.asp
Route::get('/dbcheck',function(){

// $results=DB::select('select * from vw_producttorecipeview');

// return $results[0]->RMID;

$id= DB::insert('insert into tblrawm (MatirialName) values ( ?)', [ 'Dayle']);
return $id;
});


Route::get('/getAllRecipes/{PID}',[getProductToRawAssociationController::class, 'getRecipes'] );
Route::get('/getAllMenuItems',[getProductToRawAssociationController::class, 'getAllMenuProducts'] );
Route::get('/getAllMenuItemsTable',[getProductToRawAssociationController::class, 'getAllMenuProductsTable'] );
Route::get('/getIdealStock',[getProductToRawAssociationController::class, 'getIdealStock'] );
Route::get('/getRawMatirial',[getProductToRawAssociationController::class, 'getRawMatirialForSearch2'] );

Route::get('/zuha',[tblRawMaterialController::class, 'deleteintblsales'] );
Route::post('/test',[getProductToRawAssociationController::class, 'test'] );
Route::get('/UpdateRecipe/{data}/{MenuID}/{TEC}/{TSP}',[CUDtlbRawtoMenu::class, 'UpdateRecipe'] );
Route::get('/getSalePurchasePrice/{PID}',[CUDtlbRawtoMenu::class, 'getSalePurchasePrice'] );
Route::get('/insertInRawM/{data}',[CUDtbltblrawm::class, 'insertInRawMateial'] );
Route::get('/insertInRawM/{data}',[CUDtbltblrawm::class, 'insertInRawMateial'] );
Route::get('/insertProducts/{data}',[tblMenuProducts::class, 'insertProducts'] );


///////////////////////////// this is sales routes here//////////////////////////////
Route::get('/addSale/{data}',[tblSalesController::class, 'addSale'] );
//////////////////////////////////sales end heres//////////////////////////////////

Route::get('/testdata/{data}',[testForJson::class, 'store'] );



Route::get('/insertData', function () {
//     for($i=10066;$i<=10139;$i++){
//     $result= DB::insert('insert into instock (RawMatirialID, StockIn, PreviousStock, PerUnitPurchasePrice) 
//    values (?,?,?,?)', 
//    [ $i,'200','150','250']);
//     }




});
Route::get('/vrs', function () {
    return view('viewRawMat');
});
Route::get('/sis', function () {
    return view('setIdealStock');
});



Route::get('/testH', function () {
    
});
Route::get('/cr', function () {
    return view('cr');
});
Route::get('/arm',function(){


return view('addRawMat');


});










Route::get('/createRecipe',function(){

return view('createRecipe');

});


Route::get('/srm/{RawID}/{RawMName}',function($RawID,$RawMname){

    return "Raw Matirial Name is ".$RawMname."And the ID is ". $RawID;


});