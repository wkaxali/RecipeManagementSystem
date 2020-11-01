<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class tblRawMaterialController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
   public function insetNewRawMaterial(){

        $MName="Mutton";
        $unit="KG";
        $rmks="This is awsssm";
        $cat="3";
   $result= DB::insert('insert into tblrawm ( MatirialName ,Unit ,Remarks,CategoryID) values (?, ?,?,?)', [$MName,$unit,$rmks,$cat]);
    

if($result==1){

    print('stwtRow added');
}
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function insertincatogorytbl(){

        $rcat="2";
        $Rraw="4";
        $remarks="This is delicious";
        
   $result= DB::insert('insert into tblrawtocategory (CatID, RawID, Remarks ) values (?, ?,?)', [$rcat,$Rraw,$remarks]);
    

if($result==1){

    print('hogyaa');
}
}

    public function insertinrecipetblraw(){

        $Rpid="2";
        $Rrawid="4";
        $Runit="KG";
        $Rquantity="3";
        $remarks="This is delicious";
        $REcost="99";
        
   $result= DB::insert('insert into tblrecipetoraw (PID, RAWID, Unit, Quantity, Remarks, ECost ) values (?, ?,?,?,?,?)', [$Rpid,$Rrawid,$Runit,$Rquantity,$remarks, $REcost]);
    

if($result==1){

    print('nextone');




}
   



}



public function insertintblsales(){

    $SMenuproductid="2";
    $Squantity="4";
    $Stotals="6";
    $Srecipecost="3";
    $StotalRecpCost="8";
    $Sdatetimestamp="";
    $Sdate="";
    
$result= DB::insert('insert into tblsales (MenuProductID, Quantity, TotalSale, 
RecipeCost, TotalRecipeCost, DateTimeStamp,Date ) values (?,?,?,?,?,?,?)', 
[$SMenuproductid, $Squantity,$Stotals,$Srecipecost, $StotalRecpCost,null,null]);


if($result==1){

print('nextonecomingsoon');
}
}

public function insertintblsoldrawmatirial(){

    $SoldPID="2";
    $SoldRMID="3";
    $SoldSoldQty="4";
    $SoldRawMatirialUsed="5";
    $SoldStockBefore="5";
    $SoldStockAfter="4";

    
$result= DB::insert('insert into tblsoldrawmatirial (PID, RMID, SoldQty, RawMatirialUsed, StockBefore, StockAfter ) values (?,?,?,?,?,?)', 
[$SoldPID,$SoldRMID,$SoldSoldQty,$SoldRawMatirialUsed,$SoldStockBefore,$SoldStockAfter]);


if($result==1){

print('nextonecomingsoonwowwwwww');



}
}


public function insertintblstocksaletrack(){

    $STSalesID="2";
    $StockRMID="3";
    $StockSold="4";
    $StockDateStamp="";


    
$result= DB::insert('insert into tblstocksaletrack (SalesID, RMID, StockSold, DateStamp) values (?,?,?,?)', 
[$STSalesID,$StockRMID,$StockSold,null]);


if($result==1){

print('bindas');



}
}

public function insertintbluserinfo(){

    $UserNameInfo="char";
    $UPassword="234";
    $UDesignation="";
    $Uenable="";
    $ULastlogin="456";

    
$result= DB::insert('insert into userinfo (UserName, Password, Designation, Enable, LastLogin) values (?,?,?,?,?)', 
[$UserNameInfo, $UPassword, null, null, $ULastlogin]);


if($result==1){

print('userlogin');



}
}

public function insertintblinstock(){

    $StockRMID="64";
    $SStockIn="234";
    $SPreviousStock="77";
    $SPPPrice="999";
    $SPerUnitSalePrice="";
    $SExpairyDate="";
    $SAverageSalePricePerUnit="";
    $SAveragePurchasePricePerUnit="";
    $SdateStamp="";
    $SIdealStock="";
    
$result= DB::insert('insert into instock (RawMatirialID, StockIn, PreviousStock, PerUnitPurchasePrice, PerUnitSalePrice, ExpairyDate,
 AverageSalePricePerUnit, AveragePurchasePricePerUnit, dateStamp, IdealStock) 
values (?,?,?,?,?,?,?,?,?,?)', 
[ $StockRMID,$SStockIn,$SPreviousStock,$SPPPrice,null,null,null,null,null,null]);


if($result==1){

print('Instockresults');


}

}
public function insertintbltblcategory(){

    $CCategoryName="";
    


    
$result= DB::insert('insert into tblcategory(CategoryName) values (?)', 
[null]);


if($result==1){

print('Category');



}
}
public function insertintbltblmenuproducts(){

    $MProductName="Sandwich";
    $MDiscrption="";
    $MSalePrice="666";
    $MRecipeCost="888";
    $MCategory="";


    
$result= DB::insert('insert into tblmenuproducts(ProductName, Discrption, SalePrice, RecipeCost, Category) 
values (?,?,?,?,?)', 
[$MProductName,null,$MSalePrice,$MRecipeCost,null]);


if($result==1){

print('MenuProductsresults');
}
}

public function updateintblinstock(){

    $StockRawMatirialID="6";
    $SStockIn="2";
    $SPreviousStock="4";
    $SPerUnitPurchasePrice="55";
    $SPerUnitSalePrice="55";
    $SExpairyDate="44";
    $SAverageSalePricePerUnit="44";
    $SAveragePurchasePricePerUnit="666";
    $SdateStamp="2038-01-19";
    $SIdealStock="77";
    


    $qr="UPDATE   instock  SET   RawMatirialID  =".$StockRawMatirialID.", StockIn   =".$SStockIn.", ";
    $qr=$qr."PreviousStock =".$SPreviousStock.", PerUnitPurchasePrice=".$SPerUnitPurchasePrice.", PerUnitSalePrice=".$SPerUnitSalePrice.",";
    
    $qr=$qr." AverageSalePricePerUnit=".$SAverageSalePricePerUnit.",AveragePurchasePricePerUnit=".$SAveragePurchasePricePerUnit."," ; 
    $qr=$qr.  "IdealStock=" .$SIdealStock." WHERE  RawMatirialID=".$StockRawMatirialID;
    $affected = DB::update($qr);
print("Number of Rows Affacted".$affected);




}
public function updateintblcategory(){

    $CatName="cha3r";
    $catID=3;
    
    $affected = DB::update("UPDATE  tblcategory    SET  CategoryName='".$CatName."' WHERE  CatID=".$catID);


   
print("Number of Rows Affacted".$affected);
}




public function updateintblmenuproducts(){

    $MProductName="dirnnnnk3";
    $MDiscrption="kama3l";
    $MSalePrice="22";
    $MRecipeCost="232";
    $MCategory="2";
    $MPID=5;


    $qr="UPDATE   tblmenuproducts SET   ProductName='".$MProductName."', Discrption ='".$MDiscrption."', ";
    $qr=$qr."SalePrice ='".$MSalePrice."',RecipeCost='".$MRecipeCost."',  Category='".$MCategory."' WHERE  PID =".$MPID;
    $affected = DB::update($qr);
print("Number of Rows Affacted".$affected);

} 

}