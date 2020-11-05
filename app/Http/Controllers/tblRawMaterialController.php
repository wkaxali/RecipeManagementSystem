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
   public function insertNewRawMaterial(){

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

    $MProductName="dirnnnkfnk3";
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




public function updateintblrawm(){
    $RMatirialName="sushi";
    $RUnit="mm";
    $RRemarks="yummy";
    $RCategoryID="7";
    $RRMID="7";

    $qr="UPDATE   tblrawm SET   MatirialName='".$RMatirialName."', Unit ='".$RUnit."', ";
    $qr=$qr."Remarks ='".$RRemarks."',CategoryID='".$RCategoryID."' WHERE  RMID =".$RRMID;
    $affected = DB::update($qr);
print("Number of Rows Affactedddddddddddd".$affected);


}

    public function updateintblrawtocategory(){
        $RCCatID="2";
        $RCRawID="3";
        $RCid="1";
        $RCRemarks="kamal hai";

    $qr="UPDATE   tblrawtocategory SET   RawID='".$RCRawID."', Remarks ='".$RCRemarks."', ";
    $qr=$qr."id ='".$RCid."',CatID='".$RCCatID."' WHERE  CatID =".$RCCatID;
    $affected = DB::update($qr);
print("Number of Rows Affactdddd".$affected);










}

public function updateintblrecipetoraw(){
    $RERRID="2";
    $REPID="5";
    $RERAWID="78999";
    $REUnit="mm";
    $REQuantity="0.09";
    $RERemarks="wowww";
    $REECost="999.9";   

  

    $qr="UPDATE   tblrecipetoraw SET   PID='".$REPID."', RAWID ='".$RERAWID."', ";
    $qr=$qr."Unit ='".$REUnit."', Quantity='".$REQuantity."',  Remarks='". $RERemarks."',Ecost='".$REECost."' WHERE   RRID =". $RERRID;
    $affected = DB::update($qr);
print("Number of Rows Affacted".$affected);
}

public function updateintblsales(){
    
    
    $SSalesID="2";
    $SMenuProductID="6";
    $SQuantity="6";
    $STotalSale="6";
    $SRecipeCost="6";
    $STotalRecipeCost="6";
   
  

    $qr="UPDATE   tblsales SET   MenuProductID='".  $SMenuProductID."', TotalSale ='".$STotalSale."', ";
    $qr=$qr."RecipeCost ='". $SRecipeCost."', Quantity='".$SQuantity."',  TotalRecipeCost='".$STotalRecipeCost."' WHERE   SalesID =". $SSalesID;
    $affected = DB::update($qr);
    print("Number of Rows Affactttted".$affected);
}
public function updateintblsoldrawmatirial(){
    
    $SoldID="1";
    $SoldPID="2";
    $SoldRMID="2";
    $SoldSoldQty="2";
    $SoldRawMatirialUsed="2";
    $SoldStockBefore="2";
    $SoldSAfter="2";
   
   
  

    $qr="UPDATE   tblsoldrawmatirial SET   PID='".   $SoldPID."', RMID ='".  $SoldRMID."', StockAfter='".$SoldSAfter. "',";
    $qr=$qr."SoldQty ='".$SoldSoldQty."',  RawMatirialUsed='". $SoldRawMatirialUsed."', StockBefore='".$SoldStockBefore."' WHERE   ID =". $SoldID;
    $affected = DB::update($qr);
    print("Number of Rows Affactttted".$affected);
}


public function updateintblstocksaletrack(){
    $SalesID="9";
    $StockSalesID="2";
    $StockRMID="2";
    $SStockSold="2";
    // $StockDateStamp = date('09/24/1984 04:56:34 p', time());
    
//    $date=date_create("2013-03-15");
//    echo date_format($StockDateStamp,"d/m/Y");


$qr="UPDATE   tblstocksaletrack SET   RMID ='".$StockRMID."', ";
$qr=$qr."StockSold ='". $SStockSold."' WHERE   SalesID =".$SalesID;
$affected = DB::update($qr);
print("Number of Rows Affacccccctdddd".$affected);






}
public function updateintbluserinfo(){

    $UID="2";
    $UserNameinfo="std";
    $UPassword="333";
    $UDesignation="fg";
    $UEnable="no";
    $ULastLogin="555";  


    $qr="UPDATE   userinfo SET    UserName='". $UserNameinfo."', Password ='".$UPassword."', ";
    $qr=$qr." Designation ='".$UDesignation."',Enable='".$UEnable."',  LastLogin ='". $ULastLogin."' WHERE  UserID =". $UID;
    $affected = DB::update($qr);
print("Number of Rows Affacted".$affected);

} 



public function deleteintbluserinfo(){

    
    
    $Deleted = DB:: delete("delete from userinfo where UserID=3"); 
     
     print($Deleted);
     
     
 
 }
 

 public function deleteintblstocksaletrack(){

    
    
    $Deleted = DB:: delete("delete from tblstocksaletrack where StockDeductionID=2"); 
     
     print($Deleted);



 
 
    }

    public function deleteintblsales(){

    
    
        $Deleted = DB:: delete("delete from tblsales where SalesID=1"); 
         
         print($Deleted);
    
    
    
     }



     public function deleteintblrecipetoraw(){

    
    
        $Deleted = DB:: delete("delete from tblrecipetoraw where RRID=1"); 
         
         print($Deleted);
    
    
    
     }

     public function deleteintblrawtocategory(){

    
    
        $Deleted = DB:: delete("delete from tblrawtocategory where id=1"); 
         
         print($Deleted);
    
    
    
     }

     public function deleteintblrawm(){

    
    
        $Deleted = DB:: delete("delete from tblrawm where RMID=1"); 
         
         print($Deleted);
    
    
    
     }
     public function deleteintblmenuproducts(){

    
    
        $Deleted = DB:: delete("delete from tblmenuproducts where PID=1"); 
         
         print($Deleted);
    
    
    
     }
    
    public function deleteintblcategory(){

   
   
       $Deleted = DB:: delete("delete from tblcategory where CatID=1"); 
        
        print($Deleted);
   
   
   
    }
    public function deleteintblinstock(){

   
   
        $Deleted = DB:: delete("delete from instock where StockID=1"); 
         
         print($Deleted);
    
}
}