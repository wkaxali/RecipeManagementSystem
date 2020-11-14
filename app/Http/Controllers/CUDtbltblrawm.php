<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CUDtbltblrawm extends Controller
{
    function insertInRawMateial(Request $request,$table){
        $obj = json_decode($table);
        
        foreach ($obj as $row){
        
            
            $MName=$row[0];
            $Cate=$row[1];
            $unit=$row[3];
            $stock=$row[2];
           $pp=$row[4];
           
            

            
              
      self::insertNewRawMaterial( $MName, $Cate,$unit,$stock,$pp);


     }
    
    }




    public function insertNewRawMaterial( $MName,$cat,$unit,$stock,$pp){

        
   $id= DB::insert('insert into tblrawm ( MatirialName ,CategoryID,Unit) values (?, ?,?)', [$MName,$cat,$unit]);
  
   $RMID = DB::table('tblrawm')->max('RMID');
   
   
  self::insertintblinstock($RMID, $stock,"200", $pp);

         
        }

        public function insertintblinstock($StockRMID, $SStockIn,$SIdealStock, $SPPPrice){

            // $StockRMID="64";
            // $SStockIn="234";
            // $SPreviousStock="77";
            // $SPPPrice="999";
            // $SPerUnitSalePrice="";
            // $SExpairyDate="";
            // $SAverageSalePricePerUnit="";
            // $SAveragePurchasePricePerUnit="";
            // $SdateStamp="";
            // $SIdealStock="";
            
        $result= DB::insert('insert into instock (RawMatirialID, StockIn, PreviousStock, PerUnitPurchasePrice, PerUnitSalePrice, ExpairyDate,
         AverageSalePricePerUnit, AveragePurchasePricePerUnit, dateStamp, IdealStock) 
        values (?,?,?,?,?,?,?,?,?,?)', 
        [ $StockRMID,$SStockIn,'0',$SPPPrice,null,null,null,null,null,$SIdealStock]);
        
        
        if($result==1){
        
        print('Instockresults');
        
        
        }
        
        }



}
