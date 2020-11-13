<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;





class getProductToRawAssociationController extends Controller
{
    //


    
     public function index()
    {
       
      print("skhcih");
    }

    
    function UpdateRecipeToMenu(Request $req){
       // session([ 'value' => $request->value]);
        // $data=$req->all();
        // $w=($data)->RMID;
        // print($w);
       
        
    }

    function test(Request $req){
        // session([ 'value' => $request->value]);
        print($req->qty[0]);
         return count($req->qty);
         
        
         
     }
     function test2(){
       
        alert($data);
         
     }
    public function getRecipes($PID)
    {
        
    $results=DB::select('select * from vw_producttorecipeview where PID='.$PID);
    $tableOfHtml="";
    
        foreach ($results as $ro){


           $tableOfHtml=$tableOfHtml." <tr id='dataTableRow'>
                                   
                                    <td 'name=RMID'>". $ro->RMID . "</td>
                                    <td id='DTMID'>".$ro->MatirialName."</td>
                                 
                                    <td> <input type=\"text\" onchange=\"calculationTrigerOnQtyValueChange(this)\" value=".$ro->Quantity." name='qty[]'></td>
                                    <td>   <select onchange=\"calculationForUnitAndQtyIfUnitChanges(this)\" id='unitCellInDataTable'> 

                                    <option value=".$ro->Unit.">".$ro->Unit."</option> 
                                    </select></td>
                                    <td >".$ro->ECost."</td>
                                    <td style=\"display: none;\" id='perUnitPurchasePriceInDataTable'>". $ro->PerUnitPurchasePrice . "</td>


                                </tr>";

          


        }
        
    return $tableOfHtml;
      
       

    }


    public function getRawMatirialForSearch(){
        $results=DB::select('select * from vw_stockview ');
        $tableOfHtml="";
            foreach ($results as $ro){
    
    
               $tableOfHtml=$tableOfHtml." <tr class='btnSelect'>
                                       
                                        <td >". $ro->RawMatirialID . "</td>
                                        <td>".$ro->MatirialName."</td>
                                       
                                        <td>".$ro->Unit."</td>
                                        
                                        <td >". $ro->PerUnitPurchasePrice . "</td>
    
    
                                    </tr>";
    
    
    
            }
        return $tableOfHtml;

    }









    public function getRawMatirialForSearch2(){
        $results=DB::select('select * from vw_stockview ');
        
            
        return $results;

    }


    public function getAllMenuProductsTable()
    {
        $results=DB::select('select PID,ProductName,SalePrice from tblmenuproducts');
        $tableOfHtml="";
        foreach ($results as $ro){


           $tableOfHtml=$tableOfHtml.'<tr><td>'.$ro->PID.'</td><td>'.$ro->ProductName.'</td><td>'.$ro->SalePrice.'</td>';


        }
        $editableRow="<tr><td><input style=\"border: none;\" type=\"text\" class=\"btnSelect\" id=\"pd-price\" name=\"text\"> 
        
        <td><input style=\"border: none;\" type=\"text\" class=\"btnSelect\" id=\"pd-price\" name=\"text\"> 
        
        
        </td><td><input style=\"border: none;\" type=\"text\" class=\"btnSelect\" id=\"pd-price\" name=\"text\"> 
        
        
        </td>
        </td></tr>";
        return $tableOfHtml.$editableRow;

    } 
    public function getIdealStock()
    {
        $results=DB::select('select * from vw_stockview');
        $tableOfHtml="";
        foreach ($results as $ro){


           $tableOfHtml=$tableOfHtml.'<tr>
           <td>'.$ro->RawMatirialID.'</td>
           <td>'.$ro->MatirialName.'</td>
           <td>'.$ro->StockIn.'</td>
           <td contenteditable="true">'.$ro->IdealStock.'</td>


           
           <td>'.$ro->Unit.'</td>
           <td>'.$ro->PerUnitPurchasePrice.'</td>
           ';


        }
       
        return $tableOfHtml;

    } 


    public function getAllMenuProducts()
    {
     //





    $results=DB::select('select * from tblmenuproducts');
   $sOp=" <select style=\"height: 45px !important; width: 298px !important;\" class=\"php arz\"
                        data-live-search=\"true\" tabindex=\"null\" onchange=\"getRecipes()\" id=\"SelectMenu\">";
                        
                        
                    
                    
    $tableOfHtml="";
        foreach ($results as $ro){


           $tableOfHtml=$tableOfHtml." <option value=".$ro->PID." onchange=\"getRecipes(".$ro->PID.")\">".$ro->ProductName."</option>";


        }
    
      $endSelect="</select>";
      $allHtml=$sOp . $tableOfHtml . $endSelect;
      return $allHtml;   

    }
}
