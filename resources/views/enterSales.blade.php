<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">


<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.recepi-table {
    border: 1px solid rgb(196, 218, 243);
    overflow: auto;
    height: 500px;
    padding: 10px;
}

.sale-buttons {
    text-align: center;
}

.sale-buttons button {
    /* display: block; */
    width: 90px !important;
    height: 50px;
    margin: 5px 5px;


}

.raw-table {
    border: 1px solid rgb(196, 218, 243);
    height: 500px;
}

.raw-table table tbody tr td:nth-child(3),
.raw-table table tbody tr td:nth-child(5) {
    width: 50px;
    /* height: 10px; */
}

.raw-table table tbody tr td:nth-child(1) {
    width: 50px;
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34
}

.btn-success.focus,
.btn-success:focus {
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
}

.btn-success.disabled,
.btn-success:disabled {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:not(:disabled):not(.disabled).active,
.btn-success:not(:disabled):not(.disabled):active,
.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #1e7e34;
    border-color: #1c7430
}

.btn-success:not(:disabled):not(.disabled).active:focus,
.btn-success:not(:disabled):not(.disabled):active:focus,
.show>.btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
}

.menu-table {
    border: 1px solid rgb(196, 218, 243);
    height: 500px;
}

.idi label {
    width: 210px !important;
}

/* .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
    width: 520px; } */
.menu-i {
    border: 1px solid #E5EAEE;
    padding: 10px 10px;
    border-radius: 10px;
}

.ent-table {
    border: 1px solid #E5EAEE;
    padding: 10px 10px;
    border-radius: 10px;
}

.ent-table {
    height: 430px !important;
}

.up-btn {
    margin-top: 5px;
    height: 120px !important;
    width: 120px !important;
}

.offme input {
    margin: 5px 0px;
}

.stock-table {
    height: 500px;
    overflow: auto;
}

.salePr-buttons {
    text-align: center;
}

.salePr-buttons button {
    height: 96px;
    width: 150px;
}

/* .esti-1{
        border: 1px solid #E5EAEE;
        padding: 10px;
    } */
.offme-10 label {
    width: 221px !important;
}

.offme-10 input {
    margin: 5px 0px !important;
}
.offme-10{
    border:1px solid #E5EAEE;
    border-radius:10px;
}




.mainWebButtons {
    margin-top: 50px !important;
}

.mainWebButtons button {
    margin: 20px 10px !important;
}

.mainWebButtons a {
    width: 150px;
    height: 100px;
    text-align: center;
    line-height: 80px;
    margin: 10px 10px;
}

.leftMaterial label {
    margin-right: 50px;
}



.ownButton{
    margin: 20px auto;
    padding: 20px 40px;
}
.rightmtButton{
    float: right;
}
#mt_header{
    margin-top: 20px;}
/* }
.bg-blue{
    background-color: blue;

}
.bg-yel{
    background-color: burlywood;
}
.bg-ideal{
    background-color: darkslateblue;
}
.bg-est{
    background-color: greenyellow;
}
.bg-order{
background-color: red;
} */

</style>

</head>

<body onload="getAllMenuItems()">
    <header class="mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Entering Sales</h2>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="margin-top: 8px;">
                    <label style="width: 88px;" for="Men-item">Menu Item</label>
                    <select style="width: 177px;"  data-live-search="true" tabindex="null" class="selectpicker form-control" id="Menus"
                    
                    onchange="getSaleAndRecipeCost()">
                   
                </select>
                </div>
                <div class="col-md-4" style="margin-top:5px;">
                    <label for="Quantity" style="width: 85px;" >Quantity</label><br>
                    <input type="text" class="form-control"  name="Quantity" style="display:inline-block; width:250px; " id="qty">   
                      <button class="btn btn-success"  style="margin-top:-6px;" onclick="AddRowInSalesTable()">Add Sale</button>
                   <input type="text" class="form-control-1" style="display:none;" name="salePrice" id="salePrice"> 
                      <input type="text" class="form-control-1" style="display:none;" name="recipeCost" id="recipeCost">   
                </div>
                <div class="col-lg-4">
                  
                    <label for="Quantity" style="width: 85px;" >Date</label>
                        <input type="date" class="form-control" placeholder="Select date"  />
                        <div class="input-group-append">
                       
                  
                    </div>
                </div>
                
    </section>
    <br>

<br>
<section>
  
<div class="container">

        <div class="row">
            <div class="col-md-8 ">
                <div class="ent-table" style="overflow:auto;">
                    <table class="table table-bordered" id="SalesTable">
                        <thead>
                            <tr>
                                
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>RCPU</th>
                                <th>RTC</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 offme-10">
                <label for="g-total">Grand Total</label>
                <input type="text"   class="form-control" id="TotalSales"><br>
                <label for="g-total">Raw Items Consumed</label>
                <input type="text"  class="form-control" id="TotalCost"><br>
                <label for="g-total">Profit w/o Operational Const</label>
                <input type="text"  class="form-control"id="profit">
             
                    <button style="margin-left:230px;" class="btn btn-success up-btn">Update</button>
  
            </div>
        </div>
    </div>
   
</div>

</section>
<!--  -->








    <!--end::Demo Panel-->
  
    <!--begin::Global Config(global config for global JS scripts)-->

 

    <!--end::Global Theme Bundle-->
</body>
   <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="assets/js/script.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
</script>

<script>


function getAllMenuItems() {
   
   var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
       document.getElementById("Menus").innerHTML =
     this.responseText;
     $('#Menus').selectpicker('refresh');
    // alert(this.responseText);
     //searchRawMatirial();
     //alert(this.responseText);
   }
 };
 
 xhttp.open("GET", "./getAllMenuItems", true);
 xhttp.send();
};
function AddRowInSalesTable() {
  var table = document.getElementById("SalesTable");
  var row = table.insertRow(-1);
  
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7= row.insertCell(6);
  var cell8=row.insertCell(7);
  var e = document.getElementById("Menus");
    var manuValue = e.options[e.selectedIndex].value;   
    var manuText = e.options[e.selectedIndex].text;
  cell1.innerHTML =  manuValue ;
  cell2.innerHTML = manuText;
  var qty=document.getElementById("qty").value;
  var sp=document.getElementById("salePrice").value ;
  var PUPP=document.getElementById("recipeCost").value
  var totSale=sp*qty;
  var totPurchase=PUPP*qty;
  cell3.innerHTML =document.getElementById("qty").value ;
  cell4.innerHTML = document.getElementById("salePrice").value ;
  cell5.innerHTML = totSale ;
  cell6.innerHTML = PUPP ;
  cell7.innerHTML = totPurchase ;
  
  cell8.innerHTML = "<button onclick='deleteRow(this)' class=\"btn btn-danger \" style=\"height: 25px;width: 25px; padding:auto;\"></button>";
  calc();
}

function getSaleAndRecipeCost(){
    var PID=$('#Menus').find(":selected").val();
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var mydata = JSON.parse(this.response);
       // alert( mydata[0]['SalePrice']);
        document.getElementById("recipeCost").value=mydata[0]['RecipeCost'];
        document.getElementById("salePrice").value=mydata[0]['SalePrice'];
        
      //  alert( mydata[0]['SalePrice']);

      
     // $( "#dataTable" ).removeAttr( "style" ).hide().fadeIn(1000);
      
     // calc();
    }
  };
  var selectedValue=$('#Menus').find(":selected").val();

  xhttp.open("GET", "./getSalePurchasePrice/"+PID, true);
  xhttp.send();
 
 }

 function deleteRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  //alert(i);
  document.getElementById("SalesTable").deleteRow(i);
  calc();
}


function calc() {

var table = document.getElementById('SalesTable');
var rows = table.rows;
var totalSale = 0;
var totRecipeCost=0;
var TotalSalescell;
var TotalPCell;

// Assume first row is headers, adjust as required
// Assume last row is footer, addjust as required
for (var i=1, iLen=rows.length ; i<iLen; i++) {
    TotalSalescell = rows[i].cells[4];
    TotalPCell= rows[i].cells[6];
    totalSale += Number(TotalSalescell.textContent || TotalSalescell.innerText);
    totRecipeCost+=Number(TotalPCell.textContent || TotalPCell.innerText);
}
document.getElementById('TotalSales').value = totalSale.toFixed(2);
document.getElementById('TotalCost').value = totRecipeCost.toFixed(2);
var profit=totalSale-totRecipeCost;
document.getElementById('profit').value = profit.toFixed(2);
}


</script>

</html>