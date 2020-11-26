<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class tblSalesController extends Controller
{
    //
    function addSale(Request $request,$table){
       // date_default_timezone_set('Europe/London');

       $dateNow= Carbon::now()->toDateTimeString();
       //print($a);
       $obj = json_decode($table);
        
       foreach ($obj as $row){
       
           
           $PID=$row[0];
           $qty=$row[2];
           $TotalSalePrice=$row[4];
           $RCPU=$row[5];
          $RTC=$row[6];
          
           



       self::insertintblsales($PID,$qty,$TotalSalePrice,$RCPU,$RTC,$dateNow,$dateNow);
     return  self::updateStocks();
       }
        //return $a;

    }


    public function updateStocks(){
        $SID = DB::table('tblsales')->max('SalesID');
        $results=DB::select('select * from vw_stocktobeminus where SalesID='.$SID);
        $stockToBMinus=0.0;
        
      
            foreach ($results as $ro){


                    $usedUnit= $ro->UsedUnit;
                      $qty  =$ro->SoldUnits;
                     $pup   =$ro->RMPurchasedUnit;
                     $RMUsedQuantityValue=$ro->RMqtyPerProduct;
                     $RMStock=$ro->StockIn;
                     $RMID=$ro->RMID;
                     if( $usedUnit==$pup){
                        $stockToBMinus=floatval($qty);
                     }else{
                    $c=DB::select('select Conversion from tblunitconversion where unit="'.$pup.'" and SubUnit="'.$usedUnit.'"');
                    print("\n Purchsed Unit=".$pup."\t Subunit is =".$usedUnit);
                        $conversionRate=$c[0]->Conversion;
                            print("The conversion rate is =".$conversionRate);
                            print("\tThe stock is =".floatval($RMStock));
                            $totalUnitsofStockInSubUnits= $RMStock*  ($conversionRate);
                            print( "\tThe stock in sub units rate is =".$totalUnitsofStockInSubUnits);
                            $stockToBMinusInSubUnits= $totalUnitsofStockInSubUnits-($qty*$RMUsedQuantityValue);
                            print( "\t Stock to b minus".$stockToBMinusInSubUnits);
                            $newStock=$stockToBMinusInSubUnits/  ($conversionRate);
                            print("\t Stock to minus in Bigger units".$newStock);

                     }
                     
                     
                    
                     self::updateintblinstock($RMID,$newStock,$RMStock,null,null,null,null,null,null,null);



            }






    }
    public function updateintblinstock(

        $StockRawMatirialID,
        $SStockIn,
        $SPreviousStock,
        $SPerUnitPurchasePrice,
        $SPerUnitSalePrice,
        $SExpairyDate,
        $SAverageSalePricePerUnit,
        $SAveragePurchasePricePerUnit,
        $SdateStamp,
        $SIdealStock
    ){
        
    
    
        $qr="UPDATE   instock  SET    StockIn   =".$SStockIn.", ";
        $qr=$qr."PreviousStock =".$SPreviousStock;
        
       
        $qr=$qr.  " WHERE  RawMatirialID=".$StockRawMatirialID;
        $affected = DB::update($qr);
    print("Number of Rows Affacted".$affected);
    
    
    
    
    }

    public function insertintblsales(

        $SMenuproductid,
        $Squantity,
        $Stotals,
        $Srecipecost,
        $StotalRecpCost,
        $Sdatetimestamp,
        $Sdate
        ){
        
    $result= DB::insert('insert into tblsales (MenuProductID, Quantity, TotalSale, 
    RecipeCost, TotalRecipeCost, DateTimeStamp,Date ) values (?,?,?,?,?,?,?)', 
    [$SMenuproductid, $Squantity,$Stotals,$Srecipecost, $StotalRecpCost,$Sdatetimestamp,$Sdate]);
    
    
    if($result==1){
    
    print('nextonecomingsoon');
    }
    }
}
