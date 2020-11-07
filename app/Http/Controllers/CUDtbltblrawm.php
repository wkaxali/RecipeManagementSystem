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
           
           
            

            
              
      self::insertNewRawMaterial( $MName, $Cate,$unit);


     }
    
    }




    public function insertNewRawMaterial( $MName,$cat,$unit){

        
   $id= DB::insert('insert into tblrawm ( MatirialName ,CategoryID,Unit) values (?, ?,?)', [$MName,$cat,$unit]);
  
   ;

            print($id);
        }
}
