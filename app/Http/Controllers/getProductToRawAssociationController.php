<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class getProductToRawAssociationController extends Controller
{
    //



     public function index()
    {
        return "hfyu";
    }
    public function getRecipes($PID)
    {
        
    $results=DB::select('select * from vw_producttorecipeview where PID='.$PID);
    $tableOfHtml="";
        foreach ($results as $ro){


           $tableOfHtml=$tableOfHtml." <tr>
                                    <td>". $ro->RMID . "</td>
                                    <td>".$ro->MatirialName."</td>
                                    <td>".$ro->Quantity."</td>
                                    <td>".$ro->Unit."</td>
                                    <td contenteditable=\"true\">".$ro->ECost."</td>


                                </tr>";



        }
    return $tableOfHtml;
      
       

    }


    public function golakabab($data){

        return $data;

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
        
    $results=DB::select('select * from tblmenuproducts');
   $sOp=" <select style=\"height: 45px !important; width: 298px !important;\" class=\"selectpicker form-control\"
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
