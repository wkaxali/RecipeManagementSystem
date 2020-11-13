<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class tblMenuProducts extends Controller
{
    


    function insertProducts(Request $request,$table){
        $obj = json_decode($table);


        foreach ($obj as $row){
            $MProductName=$row[0];
            $cate=$row[1];
            $salePrice=$row[2];
           
            $RecipeCost=$row[3];
            $Des=$row[4];
           
           
            

            
            print("yes");
      self::insertintbltblmenuproducts( $MProductName,$Des,$salePrice,$cate,$RecipeCost);
            print("what");
        }
        return $obj;


    }

    public function insertintbltblmenuproducts( $MProductName,$MDiscrption,$MSalePrice,$MCategory,$MRecipeCost){

       
    
    
        
    $result= DB::insert("insert into tblmenuproducts(ProductName, Discrption, SalePrice, RecipeCost, Category) 
    values ('?','?','?','?','?')", 
    [$MProductName,$MDiscrption,$MSalePrice,$MRecipeCost,$MCategory]);
    //DB::insert('insert into tblrawm ( MatirialName ,CategoryID,Unit) values (?, ?,?)', [$MName,$cat,$unit]);
    
    if($result==1){
    
    print('MenuProductsresults');
    }
    }



}
