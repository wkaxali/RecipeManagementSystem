<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CUDtlbRawtoMenu extends Controller
{
    public function abc(){

        return "koko";
    }
    public function UpdateRecipe(Request $request,$RecipeTable,$MenuID,$Ecost,$salePrice){
        
        print($MenuID);

        self::deleteintblrecipetoraw($MenuID);
     $obj = json_decode($RecipeTable);
     foreach ($obj as $row){
        
            $RMID=$row[0];
            $RMName=$row[1];
            $qty=$row[2];
            $unit=$row[3];
            $unitCost=$row[4];
            $TotalCostOfThisItem=$row[5];

        // print("RMID".$RMID);
        // print("    Name".$RMName);
        // print("    Qty".$qty);
        // print("   unt".$unit);
        // print("   unit cost".$unitCost);
        // print("   Cost Total cost".$unitCost);
        

      self::insertinrecipetblraw($MenuID,$RMID,$unit,$qty," ",$TotalCostOfThisItem);


     }
     self::updateIntblMenuproductsForSaleAndPurchase($MenuID,$Ecost,$salePrice);
     return 0;
 
       
     }



     public function deleteintblrecipetoraw($MenuID){

    
    
        $Deleted = DB:: delete("delete from tblrecipetoraw where PID=".$MenuID); 
         
         print($Deleted);
    
    
    
     }

     public function insertinrecipetblraw($Rpid,$Rrawid,$Runit,$Rquantity,$remarks,$REcost){

       
        
   $result= DB::insert('insert into tblrecipetoraw (PID, RAWID, Unit, Quantity, Remarks, ECost ) values (?, ?,?,?,?,?)', [$Rpid,$Rrawid,$Runit,$Rquantity,$remarks, $REcost]);
    

    if($result==1){

        print('nextone');




            }
    }


    public function updateIntblMenuproductsForSaleAndPurchase($PID,$ERCost,$SalePrice){

        
    
    
        $qr="UPDATE   tblmenuproducts SET   SalePrice='".$SalePrice."', RecipeCost ='".$ERCost."' WHERE  PID =".$PID;
        $affected = DB::update($qr);
    print("Number of Rows Affacted".$affected);
    
    } 



    public function getSalePurchasePrice($PID){

        $results=DB::select('select RecipeCost,SalePrice from tblmenuproducts where PID='.$PID);
        
        
         return  $results;
        


    }

















}
