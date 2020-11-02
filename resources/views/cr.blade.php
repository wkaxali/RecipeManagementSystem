<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/datatables.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/datatables.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>


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
    height: 200px !important;
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

.mainWebPro {
    background-image: url(https://images.pexels.com/photos/3616956/pexels-photo-3616956.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 100vh;
    width: 100vw;
    position: relative;
    z-index: 0;
}

.mainWebPro::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.57);
    min-height: 100%;
    z-index: -1;


}
.btn-cp{
    height:42px;
    margin-top:-15px;
    width:50px;
}

.mainWebcontent {

    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 100%;

}

.mainWebcontent h3 {
    font-size: 35px;
    text-align: center;
    color: #E5EAEE;
}

.mainWebcontent h1 {
    font-size: 55px;
    color: #E5EAEE;
    text-align: center;


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
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-5 mb-5">Recipe Management</h3>
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-3 ">
                    <h5>Product Name</h5>
                </div>
              
                <div class="col-md-4" id="Menus"  >
                    <!-- the Select menu is comming from database -->
                </div>

<!-- there is the search modal -->


<div class="col-md-4 mt-3">
                    <button type="button" class="btn btn-info btn-cp" data-toggle="modal"
                        data-target=".bd-example-modal-xl"></button>
                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="searchModal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <h2 class="text-center mt-5 mb-5">Search</h2>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 offset-md-4 text-center">
                                            <input type="search" data-live-search="true" class="form-control" name=""
                                                id="">

                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 offset-md-2 mt-5 mb-5">
                                            <table class="table table-striped table-bordered " id="searchTable">
                                                <thead>
                                                    <tr>
                                                        <th>Material Id</th>
                                                        <th>Item Name</th>

                                                       
                                                        <th>Unit</th>
                                                        <th>Unit Sale Price</th>
                                                        


                                                    </tr>
                                                </thead>
                                                <tbody id="searchData" >

                                                    <!-- <-Data will be comming from database-->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 text-right mt-5 mb-5 offset-md-8">
                                            <button type="button" class="btn btn-org-1"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" data-dismiss="modal"
                                                class="btn btn-org-1">Okay</button>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>







                
            </div>
        </div>
    </section>
    <br>
    <section class="mt-5">

        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="recepi-table" style="overflow-y: auto;">
                        <table class="table table-striped table-bordered ">
                            <!-- <caption>Drag a column here to group by this column</caption> -->
                            <thead>
                                <tr>
                                    <th>Raw Item Id</th>
                                    <th>Item Name</th>

                                    <th>Quantity</th>
                                    <th>Unit</th>
                                    <th>Cost</th>
                                    <th>Purchase Price</th>




                                </tr>
                            </thead>
                            <tbody id="dataTable">


                                


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="Estimate">Estimate Cost</label>
                    <input type="text" class="form-control" name="Estimate" id="Estimate" value="89">
                    <label for="Sale">Sale Price</label>
                    <input type="text" class="form-control" name="sale" id="sale">
                    <br>
                    <div class="sale-buttons">
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                        <button class="btn btn-success" onclick="calc()">Save</button>
                    </div>
                </div>
            </div>
        </div>
        
    </section>













    <!--end::Demo Panel-->
    <script>
        var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--end::Global Theme Bundle-->
    <script>
 /////////////////////////

 function calc() {

var table = document.getElementById('dataTable');
var rows = table.rows;
var total = 0;
var cell;

// Assume first row is headers, adjust as required
// Assume last row is footer, addjust as required
for (var i=0, iLen=rows.length ; i<iLen; i++) {
    cell = rows[i].cells[4];
    total += Number(cell.textContent || cell.innerText);
}
document.getElementById('Estimate').value = total.toFixed(2);
$( "#Estimate" ).val().hide().fadeIn(1000);
}


 ////////////////////////
 function getRecipes() {
    
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("dataTable").innerHTML =
      this.responseText;
      $( "#dataTable" ).removeAttr( "style" ).hide().fadeIn(1000);
      
      calc();
    }
  };
  var selectedValue=$('#SelectMenu').find(":selected").val();

  xhttp.open("GET", "./getAllRecipes/"+selectedValue, true);
  xhttp.send();
 
 }

function searchRawMatirial() {
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("searchData").innerHTML =
      this.responseText;
    }
  };
  
  xhttp.open("GET", "./getRawMatirial/", true);
  xhttp.send();
    
};

 

 function getAllMenuItems() {
   
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Menus").innerHTML =
      this.responseText;
      searchRawMatirial();
    }
  };
  
  xhttp.open("GET", "./getAllMenuItems", true);
  xhttp.send();
 };

 

//  $(document).ready(function () {

// $("#searchTable").dblclick('.btnSelect', function () {

//     var currentRow=$(this).closest("tr"); 
//     var col1=currentRow.find("td:eq(0)").text();
//     var data = col1;

//     alert(data);
//     $('.bd-example-modal-xl').modal('hide');
// });
// $("input").click(function () {
//     $(this).css({
//         "border": "none",
//     })
// })
// });
$(document).ready(function(){

// code to read selected table row cell data (values).
$("#searchTable").on('click','.btnSelect',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var MID=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
     var Mname=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
     //var qty=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
     var unit=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
     var pppu=currentRow.find("td:eq(3)").text(); // get current row 3rd TD
   
     var table = document.getElementById("dataTable");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);    
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);

  cell1.innerHTML = MID;
  cell2.innerHTML = Mname; 
  cell3.innerHTML= '1';
  cell4.innerHTML=unit;
  cell6.innerHTML=pppu;
  
  //$("#searchModal").modal('hide');
  //calculation than enter price
  alert("Item added");



});
});

$(document).ready( function () {
    $('#searchTable').DataTable();
} );


 </script>

 
</body>


</html>