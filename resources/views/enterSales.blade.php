<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="/css/app.css" rel="stylesheet">


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
    height: 350px !important;
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

<body>
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
                    <select style="width: 177px;"  data-live-search="true" tabindex="null">
                    <option>Beef Steak</option>
                    <option>25484</option>
                    <option>212121</option>
                    <option>020121</option>
                    <option>875454</option>
                    <option>Rayan</option>
                    <option>Naeem</option>
                </select>
                </div>
                <div class="col-md-5">
                    <label for="Quantity" style="width: 85px;">Quantity</label>
                    <input type="text" class="form-control-1" name="Quantity" id="Quantity">   
                      <button class="btn ml-5 btn-success">Add Sale</button>
                </div>
                <div class="col-lg-3">
                    <div class="input-group date">
                        <input type="text" class="form-control" placeholder="Select date" id="kt_datetimepicker_6" />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar glyphicon-th"></i>
                            </span>
                        </div>
                    </div>
                </div>
                
    </section>
    <br>

<br>
<section>
  
<div class="container">

        <div class="row">
            <div class="col-md-8 ">
                <div class="ent-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>10</td>
                                <td>Tea</td>
                                <td>20</td>
                                <td>300</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10</td>
                                <td>Tea</td>
                                <td>20</td>
                                <td>300</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10</td>
                                <td>Tea</td>
                                <td>20</td>
                                <td>300</td>
                                <td>1000</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 offme-10">
                <label for="g-total">Grand Total</label>
                <input type="text" name="text" id="text" class="form-control-1"><br>
                <label for="g-total">Raw Items Consumed</label>
                <input type="text" name="text" id="text" class="form-control-1"><br>
                <label for="g-total">Profit w/o Operational Const</label>
                <input type="text" name="text" id="text" class="form-control-1"><br>
             
                    <button style="margin-left:100px;" class="btn btn-success up-btn">Update</button>
  
            </div>
        </div>
    </div>
   
</div>

</section>
<!--  -->








    <!--end::Demo Panel-->
  
    <!--begin::Global Config(global config for global JS scripts)-->

    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js?v=7.0.4"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.4"></script>
    <script src="assets/js/scripts.bundle.js?v=7.0.4"></script>
    <script src="assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js?v=7.0.4"></script>

    <!--end::Global Theme Bundle-->
</body>

</html>