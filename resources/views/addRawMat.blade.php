<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
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

<body >
    <header class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Add New Raw Material</h2>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 offset-md-9">
<button class="btn btn-info" onclick="addRow()">Add Row</button>
<button  class="btn btn-success" onclick="printDiv()">Print</button>
            </div>
        </div>
    </div>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="raw-table" style="overflow:auto">
                        <table class="table  table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Rm</th>
                                    <th style="Display: none">Product Id</th>
                                    <th style="width: 150px;">Product Name</th>
                                    <th>Category</th>
                                    <th style="width: 150px;">Enter Stock</th>
                                    <th>Unit</th>
                                    <th>Purchase Price</th>

                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          <br>
            <div class="row">
                <div class="col-md-2 offset-md-10 text-right">
                    <button  class="btn btn-success" onclick="insertRecipeDataToDatabase()">Update</button>
                    
                </div>
            </div>
        </div>

    </section>






<script>
    
 function   printDiv(){
     var myTrows=[];

    $('#dataTable tr').each(function(row, tr){

myTrows[row]=[
    // //col1 =RMID
    // col2 =itemName
    // col3 =qty
    // clo4 =unitPrice
    // col5 = PUPP (this is hidden)
    $(tr).find('td:eq(1) input[type="text"]').val(),
    $(tr).find('td:eq(2)').find(":selected").val(),
    $(tr).find('td:eq(3) input[type="text"]').val(),
    $(tr).find('td:eq(4)').find(":selected").val(),
    $(tr).find('td:eq(5) input[type="text"]').val(),
    "<br><hr>"

]});

    var mywindow = window.open('', 'PRINT', 'height=800,width=60');
    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write('<h1>' + document.title  + '</h1>');
    mywindow.document.write(myTrows);
    mywindow.document.write('</body></html>');
    mywindow.print();

    

    }
    // first create TABLE structure with the headers. 
    function createTable() {
        var dataTable = document.createElement('table');
        dataTable.setAttribute('id', 'dataTable'); // table id.

        // var tr = dataTable.insertRow(-1);
        // for (var h = 0; h < arrHead.length; h++) {
        //     var th = document.createElement('th'); // create table headers
        //     th.innerHTML = arrHead[h];
        //     tr.appendChild(th);
        // }

        // var dive = document.getElementById('cont');
        // dive.appendChild(dataTable);  // add the TABLE to the container.
    }

    // now, add a new to the TABLE.
    function addRow() {
        var empTab = document.getElementById('dataTable');

          // table row count.
        var tr = empTab.insertRow(); // the table row.
    

        for (var c = 0; c < 6; c++) {
            var td = document.createElement('td'); // table definition.
            td = tr.insertCell(c);

            if (c == 0) {      // the first column.
                // add a button in every new row in the first column.
                var button = document.createElement('input');

                // set input attributes.
                button.setAttribute('type', 'button');
                button.setAttribute('value', 'Remove');

                // add button's 'onclick' event.
                button.setAttribute('onclick', 'removeRow(this)');

                td.appendChild(button);
            }
            else if (c==4) {
                // 2nd, 3rd and 4th column, will have textbox.
                var ele = document.createElement('select');
                
                ele.setAttribute('type', 'select');
                ele.innerHTML=' <option value="KG" >KG</option>';
                ele.innerHTML=ele.innerHTML+' <option value="Grams" >Grams</option>';
                ele.innerHTML=ele.innerHTML+' <option value="Litters" >Litters</option>';
                ele.innerHTML=ele.innerHTML+' <option value="MiliLitters" >MiliLitters</option>';
                ele.innerHTML=ele.innerHTML+' <option value="Pc" >Pc</option>';
                ele.innerHTML=ele.innerHTML+' <option value="Pack" >Pack</option>';
                ele.innerHTML=ele.innerHTML+' <option value="Box" >Box</option>';

                
                //ele.setAttribute('value', '');
                

                td.appendChild(ele);
            }
            else if (c==2) {
                // 2nd, 3rd and 4th column, will have textbox.
                var ele = document.createElement('select');
                
                ele.setAttribute('type', 'select');
                ele.innerHTML=' <option value="1" >Chicken</option>';
                ele.innerHTML=ele.innerHTML+' <option value="2" >Beef</option>';
                ele.innerHTML=ele.innerHTML+' <option value="3" >Sea Food</option>';
                ele.innerHTML=ele.innerHTML+' <option value="4" >Salads</option>';
                ele.innerHTML=ele.innerHTML+' <option value="5" >Friuts</option>';
                ele.innerHTML=ele.innerHTML+' <option value="6" >Spices</option>';
                ele.innerHTML=ele.innerHTML+' <option value="7" >Lamb</option>';
                ele.innerHTML=ele.innerHTML+' <option value="8" >Vegitables</option>';
                ele.innerHTML=ele.innerHTML+' <option value="9" >Herbs</option>';
                ele.innerHTML=ele.innerHTML+' <option value="10" >Milk</option>';
                ele.innerHTML=ele.innerHTML+' <option value="11" >Cheez</option>';
              


               

                
                //ele.setAttribute('value', '');
                

                td.appendChild(ele);

            }
            else{

                var x = document.createElement('input');

                // set input attributes.
                x.setAttribute('type', 'text');
                x.setAttribute('value', ' ');

                // add button's 'onclick' event.
               
                td.appendChild(x);
            }
        }
    }

    // delete TABLE row function.
    function removeRow(oButton) {
        var empTab = document.getElementById('dataTable');
        empTab.deleteRow(oButton.parentNode.parentNode.rowIndex); // button -> td -> tr.
    }

    // function to extract and submit table data.
    function insertRecipeDataToDatabase() {
        
        var myTrows=[];
    var table = document.getElementById("dataTable");
    
    
    //alert(sp);
    $('#dataTable tr').each(function(row, tr){

    myTrows[row]=[
        // //col1 =RMID
        // col2 =itemName
        // col3 =qty
        // clo4 =unitPrice
        // col5 = PUPP (this is hidden)
        $(tr).find('td:eq(1) input[type="text"]').val(),
        $(tr).find('td:eq(2)').find(":selected").val(),
        $(tr).find('td:eq(3) input[type="text"]').val(),
        $(tr).find('td:eq(4)').find(":selected").val(),
        $(tr).find('td:eq(5) input[type="text"]').val()
    
    ];
    

});
myTrows.shift();
   //alert(myTrows);
   
        
        // The final output.
        //document.getElementById('output').innerHTML = arrValues;
        //alert(myTrows[0]);
        var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        
     alert( this.responseText);
      
      $( "#dataTable" ).removeAttr( "style" ).hide().fadeIn(1000);
     
      //calc();
    }
  };

  var a=JSON.stringify(myTrows);
  //alert(a);
  xhttp.open("GET", "./insertInRawM/"+a, true);
  xhttp.send();
 
        //console.log (arrValues);   // you can see the array values in your browsers console window. Thanks :-) 
    }





    function test(){

var myTrows=[];
var table = document.getElementById("dataTable");

$('#dataTable tr').each(function(row, tr){

myTrows[row]=[
    
    $(tr).find('td:eq(1) input[type="text"]').val(),
    $(tr).find('td:eq(2)').find(":selected").val(),
    $(tr).find('td:eq(3) input[type="text"]').val(),
    
    $(tr).find('td:eq(4)').find(":selected").val(),
    $(tr).find('td:eq(3) input[type="text"]').val()

];


}) ;
myTrows.shift();
alert(myTrows);


};

</script>









    <!--end::Demo Panel-->
    <script>
        var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->

    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js?v=7.0.4"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.4"></script>
    <script src="assets/js/scripts.bundle.js?v=7.0.4"></script>
    <!--end::Global Theme Bundle-->
    
<script>

</script>
</body>

</html>