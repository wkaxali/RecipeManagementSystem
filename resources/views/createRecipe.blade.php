<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
            height: 450px;
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



        .ownButton {
            margin: 20px auto;
            padding: 20px 40px;
        }

        .rightmtButton {
            float: right;
        }

        #mt_header {
            margin-top: 20px;
        }

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

<body onload='getAllMenuItems()'>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class=" mb-3">Recipe Management</h3>
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <label for="carte">Category</label>
                    <select style="height: 25px !important; width: 58px !important;" class="selectpicker form-control"
                        data-live-search="true" tabindex="null">
                        <option>&nbsp; </option>
                        <option>Beef Steak</option>
                        <option>Chiken Steak</option>
                        <option>020121</option>
                        <option>875454</option>
                        <option>Rayan</option>
                        <option>Naeem</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="carte">Product Name</label>

                    <!-- <select style="height: 25px !important; width: 158px !important;" class="selectpicker form-control"
                        data-live-search="true" tabindex="null" id="Menus2">
                        
                    </select> -->
                    <select   class="selectpicker form-control" style="height: 25px !important; width: 208px !important;"name="n" id="Menus" data-live-search="true">
                
                </select>
                </div>

                <div  class="col-md-2 text-right ">

                    <button type="button" class="btn btn-primary" style="margin-top: 31px;" data-toggle="modal"
                        data-target=".bd-example-modal-xl">Extra large modal</button>

                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="selectTaBles" style="padding: 20px ;">
                                                <table class="table table-striped table-bordered " id="myTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Raw Item Id</th>
                                                            <th>Item Name</th>

                                                            <th>Quantity</th>
                                                            <th>Unit</th>
                                                            <th>Cost</th>




                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <tr>
                                                            <td>10/10/2020</td>
                                                            <td>#232</td>
                                                            <td>Coffee</td>
                                                            <td>100</td>
                                                            <td contenteditable="true">224</td>


                                                        </tr>
                                                        <tr>
                                                            <td>10/10/2020</td>
                                                            <td>#232</td>
                                                            <td>Coffee</td>
                                                            <td>100</td>
                                                            <td contenteditable="true">224</td>


                                                        </tr>
                                                        <tr>
                                                            <td>10/10/2020</td>
                                                            <td>#232</td>
                                                            <td>Coffee</td>
                                                            <td>100</td>
                                                            <td contenteditable="true">224</td>


                                                        </tr>
                                                        <tr>
                                                            <td>10/10/2020</td>
                                                            <td>#232</td>
                                                            <td>Coffee</td>
                                                            <td>100</td>
                                                            <td contenteditable="true">224</td>


                                                        </tr>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
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
                            <thead>
                                <tr>
                                    <th>Raw Item Id</th>
                                    <th>Item Name</th>

                                    <th>Quantity</th>
                                    <th>Unit</th>
                                    <th>Cost</th>




                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td>10/10/2020</td>
                                    <td>#232</td>
                                    <td>Coffee</td>
                                    <td>100</td>
                                    <td contenteditable="true">224</td>


                                </tr>
                                <tr>
                                    <td>10/10/2020</td>
                                    <td>#232</td>
                                    <td>Coffee</td>
                                    <td>100</td>
                                    <td contenteditable="true">224</td>


                                </tr>
                                <tr>
                                    <td>10/10/2020</td>
                                    <td>#232</td>
                                    <td>Coffee</td>
                                    <td>100</td>
                                    <td contenteditable="true">224</td>


                                </tr>
                                <tr>
                                    <td>10/10/2020</td>
                                    <td>#232</td>
                                    <td>Coffee</td>
                                    <td>100</td>
                                    <td contenteditable="true">224</td>


                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="textAREA">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Estimate Cost</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                style="height: 180px; resize: none;"></textarea>
                        </div>
                    </div>
                    <label for="Estimate">Estimate Cost</label>
                    <input type="text" class="form-control" name="Estimate" id="Estimate">
                    <label for="Sale">Sale Price</label>
                    <input type="text" class="form-control" name="sale" id="sale">
                    <br>
                    <div class="sale-buttons">
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                        <button class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </section>














    <!--end::Demo Panel-->
    <script>
        var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="assets/js/script.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>

    <!--end::Global Theme Bundle-->
   
</body>


<script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });




        function getAllMenuItems() {
   
   var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
       document.getElementById("Menus").innerHTML =
     this.responseText;
     $('#Menus').selectpicker('refresh');
    // searchRawMatirial();
   }
 };
 
 xhttp.open("GET", "./getAllMenuItems", true);
 xhttp.send();
};
    </script>

</html>