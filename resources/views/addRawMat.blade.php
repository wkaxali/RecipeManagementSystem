<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   
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

<body>
    <header class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Add New Raw Material</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="raw-table">
                        <table class="table  table-bordered" id="Kt_table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Id</th>
                                    <th style="width: 150px;">Product Name</th>
                                    <th>Category</th>
                                    <th style="width: 150px;">Enter Stock</th>
                                    <th>Unit</th>
                                    <th>Purchase Price</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td> <select style="height: 25px !important; width: 158px !important;"
                                            class="selectpicker" data-live-search="true" tabindex="null">
                                            <option></option>
                                            <option>25484</option>
                                            <option>212121</option>
                                            <option>020121</option>
                                            <option>875454</option>
                                            <option>Rayan</option>
                                            <option>Naeem</option>
                                        </select></td>
                                    <td>0</td>
                                    <td> <select style="height: 25px !important; width: 158px !important;"
                                            class="selectpicker" data-live-search="true" tabindex="null">
                                            <option>KG</option>
                                            <option>25484</option>
                                            <option>212121</option>
                                            <option>020121</option>
                                            <option>875454</option>
                                            <option>Rayan</option>
                                            <option>Naeem</option>
                                        </select></td>
                                    <td>0</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          <br>
            <div class="row">
                <div class="col-md-2 offset-md-10 text-right">
                    <button class="btn btn-success">Update</button>
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
    <!--end::Global Theme Bundle-->
</body>

</html>