<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="/css/app.css" rel="stylesheet">
    <style>
    

.stock-table {
    border: 1px solid rgb(196, 218, 243);
    overflow: auto;
    height: 500px;
    padding: 10px;
}

</style>

</head>

<body onload="getIdealStock()">
    
    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Set Ideal Stock</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 offset-md-1">
                    <label for="Pro-Name">Product Name</label>
                    <input type="text" name="Pro-Name" id="Pro-Name" class="form-control-1">
                </div>
            </div>
        </div>
    </header>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="stock-table" >
                        <table class="table table-bordered " >
                            <thead>
                                <tr>
                                    
                                    <th>ID</th>
                                    <th>Material Name</th>

                                    <th>Stock In</th>
                                    <th>Ideal Stock</th>
                                    <th>Unit</th>
                                    <th>Purchase Price</th>


                                </tr>
                            </thead>
                            <tbody id="stockTable">
                                


                            </tbody>
                        </table>
                    </div>
                    <div class="st-button text-right">
                        <button class="btn btn-success">Update</button>

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
    <script src="assets/plugins/global/plugins.bundle.js?v=7.0.4"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.4"></script>
    <script src="assets/js/scripts.bundle.js?v=7.0.4"></script>
    <script src="assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js?v=7.0.4"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--end::Global Theme Bundle-->
    <script type="text/javascript">

$(document).ready(function () {

$("#stTable").change('.btnSelect', function () {
 

    var col1 = $("#pd-price").val(); 
    var data = col1;

    alert(data);
});
});


function getIdealStock() {
   
   var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
       document.getElementById("stockTable").innerHTML =
     this.responseText;
   }
 };
 
 xhttp.open("GET", "./getIdealStock", true);
 xhttp.send();
}

</script>
</body>

</html>