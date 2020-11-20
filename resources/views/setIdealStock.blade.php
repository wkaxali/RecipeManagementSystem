<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        table th,
        td {
            border: 1px solid rgb(202, 202, 202);
            padding: 5px;
        }

        .stockLabels label {
            width: 235px;
        }

        .stockLabels {
            padding: 20px 10px;
            border-radius: 10px;
            border: 1px solid rgb(202, 202, 202);
        }

        .stock-table {
            border-radius: 10px;
            padding: 10px;
        }

        .containerMy {
            max-width: 1400px;
            margin: 0 auto;

        }
    </style>
</head>

<body>

    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Set Ideal Stock</h3>
                </div>
            </div>

        </div>
    </header>
    <br>
    <section class="mt-5">
        <div class="containerMy">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="stock-table"
                        style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 100%;" id="myTable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Material Name</th>

                                    <th>Stock In</th>
                                    <th>Ideal Stock</th>
                                    <th>Unit</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>4</td>
                                    <td>Sugar</td>
                                    <td>123</td>
                                    <td>100</td>
                                    <td>Pc</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>4</td>
                                    <td>Sugar</td>
                                    <td>123</td>
                                    <td>100</td>
                                    <td>Pc</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>4</td>
                                    <td>Sugar</td>
                                    <td>123</td>
                                    <td>100</td>
                                    <td>Pc</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>4</td>
                                    <td>Sugar</td>
                                    <td>123</td>
                                    <td>100</td>
                                    <td>Pc</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>4</td>
                                    <td>Sugar</td>
                                    <td>123</td>
                                    <td>100</td>
                                    <td>Pc</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>4</td>
                                    <td>Sugar</td>
                                    <td>123</td>
                                    <td>100</td>
                                    <td>Pc</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>4</td>
                                    <td>Sugar</td>
                                    <td>123</td>
                                    <td>100</td>
                                    <td>Pc</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>4</td>
                                    <td>Sugar</td>
                                    <td>123</td>
                                    <td>100</td>
                                    <td>Pc</td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>4</td>
                                    <td>Sugar</td>
                                    <td>123</td>
                                    <td>100</td>
                                    <td>Pc</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-4 stockLabels">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="id"><br><br>
                    <label for="id">Name</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="id"><br><br>
                    <label for="id">Current Stock</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="id"><br><br>
                    <label for="id">Unit Price</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="id"><br><br>
                    <label for="id">Ideal Stock</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="id"><br><br>
                    <label for="id">Purchase Price</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="id"><br><br>
                    <div class="st-button  " style="margin-top: 15px; margin-left: 362px;">
                        <button class="btn btn-success">Update</button>

                    </div>
                </div>
            </div>
        </div>
    </section>







    <!--end::Demo Panel-->

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    <!--end::Global Theme Bundle-->
</body>

</html>