<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SRS Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images\file-icons\64\005-database.png" />
</head>

<body>
    <div class="container-scroller">
        <?php include "includes\headerstrip.php"?>
        <!-- partial:partials/_navbar.html -->


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php include "includes\aside_add_product.php"?>



            <!-- <hr> -->
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php include "includes\bodyheader.php" ?>

                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <center>
                                                    <h2 class="card-title"><b>Products Registration Form </b></h2>
                                                </center>
                                                <hr>
                                                <p class="card-description"> Add Manufactured Products: </p>
                                                <form class="forms-sample" method="post"
                                                    action="add_product_manage.php">

                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Enter Product Name:</label>
                                                        <input type="text" class="form-control" id="exampleInputName1"
                                                            placeholder="Product Name" name="Product_Name" Required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Enter Product Category:</label>
                                                        <input type="text" class="form-control" id="exampleInputName1"
                                                            placeholder="Product Category" name="Product_Category"
                                                            Required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Enter Product Price:</label>
                                                        <input type="text" class="form-control" id="exampleInputName1"
                                                            placeholder="Product Price" name="Product_Price" Required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Enter Product Registration
                                                            Date:</label>
                                                        <input type="date" class="form-control" id="dateInput"
                                                            placeholder="Registration Date" name="Product_Registration"
                                                            Required>

                                                        <script>
                                                        // Get today's date in the format "YYYY-MM-DD"
                                                        function getTodayDate() {
                                                            const today = new Date();
                                                            const year = today.getFullYear();
                                                            const month = String(today.getMonth() + 1).padStart(2, '0');
                                                            const day = String(today.getDate()).padStart(2, '0');
                                                            return `${year}-${month}-${day}`;
                                                        }

                                                        // Set the value of the date input to today's date
                                                        document.getElementById('dateInput').value = getTodayDate();
                                                        </script>



                                                    </div>



                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">Select
                                                            Product
                                                            Status:</label>
                                                        <select class="form-control" id="exampleSelectGender"
                                                            name="Product_Status">
                                                            <option value="In Process">In Process</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Enter Product
                                                            Description:</label>
                                                        <textarea type="text" class="form-control"
                                                            placeholder="Product Description"
                                                            name="Product_Description"></textarea>
                                                    </div>





                                                    <button type="submit" class="btn btn-dark mr-2">Register
                                                        Product</button>
                                                    <button class="btn btn-light">Cancel</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- content-wrapper ends -->
                    <?php include "includes/footer.php" ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <?php include "includes\scripts.php" ?>
</body>

</html>