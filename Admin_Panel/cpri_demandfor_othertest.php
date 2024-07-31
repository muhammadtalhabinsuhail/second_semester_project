<?php
if (isset($_POST['needothertest'])){
    $Product_Test_Id = $_POST[ 'Product_Test_Id' ];
    ?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>SRS Admin</title>
    <!-- plugins:css -->
    <link rel='stylesheet' href='vendors/simple-line-icons/css/simple-line-icons.css'>
    <link rel='stylesheet' href='vendors/flag-icon-css/css/flag-icon.min.css'>
    <link rel='stylesheet' href='vendors/css/vendor.bundle.base.css'>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel='stylesheet' href='./vendors/daterangepicker/daterangepicker.css'>
    <link rel='stylesheet' href='./vendors/chartist/chartist.min.css'>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel='stylesheet' href='./css/style.css'>
    <!-- End layout styles -->
    <link rel='shortcut icon' href='./images/favicon.png' />

</head>

<body>
    <div class='container-scroller'>
        <?php include 'includes\headerstrip.php'?>
        <!-- partial:partials/_navbar.html -->

        <!-- partial -->
        <div class='container-fluid page-body-wrapper'>
            <!-- partial:partials/_sidebar.html -->
            <?php include 'includes\aside_cpri_product.php'?>

            <!-- <hr> -->
            <!-- partial -->
            <div class='main-panel'>
                <div class='content-wrapper'>
                    <?php include 'includes\bodyheader.php' ?>

                    <div class='row'>
                        <div class='col-md-12 grid-margin'>
                            <div class='card'>
                                <div class='card-body'>
                                    <div class='col-12 grid-margin stretch-card'>
                                        <div class='card'>
                                            <div class='card-body'>
                                                <center>
                                                    <h2 class='card-title'><b>Demanding For Other Test Type</b></h2>
                                                </center>
                                                <hr>
                                                <p class='card-description'> Add Manufactured Products: </p>
                                                <?php
    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query = "SELECT * FROM CPRI_acceptproducts_table17 WHERE Product_Test_Id = '{$Product_Test_Id}'";
    $data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
    if ( mysqli_num_rows( $data ) >0 ) {
        while( $rows = mysqli_fetch_assoc( $data ) ) {

            
            ?>

                                                <form class='forms-sample' method='Post'
                                                    action='cpri_demand_process.php' onsubmit='return validateForm()'>


                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Product ID:</label>
                                                        <input type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product ID' name='Product_Id'
                                                            value="<?php echo $rows['Product_Id']; ?>" readonly
                                                            Required>
                                                    </div>

                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Product Test ID:</label>
                                                        <input type='text' class='form-control' id='Product_Test_Id'
                                                            placeholder='Product ID' name='Product_Test_Id'
                                                            value="<?php echo $rows['Product_Test_Id']; ?>" Required
                                                            readonly>
                                                    </div>





                                                    <div class='form-group'>
                                                        <label for="product">Product Name:</label>
                                                        <select name="Product_Name" id="product" class='form-control'
                                                            required>
                                                            <option selected disabled value="">Check and
                                                                Select
                                                                Product
                                                            </option>
                                                            <option value="<?php echo $rows['Product_Name']; ?>">
                                                                <?php echo $rows['Product_Name']; ?>
                                                            </option>




                                                        </select>
                                                    </div>
                                                    <p id='producterror'
                                                        style='color:maroon; position:relative; top:3px; left:3px;'>
                                                    </p>

                                                    <!-- <div class='form-group'>
                                                        <label for='exampleInputName1'>Product Name:</label>
                                                        <input type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product Name' name='Product_Name'
                                                            // value="// echo $rows['Product_Name']; ?>" Required
                                                    readonly>
                                            </div> -->
                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Product Category:</label>
                                                        <input type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product Category' name='Product_Category'
                                                            value="<?php echo $rows['Product_Category']; ?>" Required
                                                            readonly>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Product Price:</label>
                                                        <input type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product Price' name='Product_Price'
                                                            value="<?php echo $rows['Product_Price']; ?>" Required
                                                            readonly>
                                                    </div>


                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Product Status:</label>
                                                        <select type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product Price' name='Product_Status' value=""
                                                            Required>
                                                            <option value="CPRI Test Demand" selected>CPRI Test Demand
                                                            </option>
                                                        </select>

                                                    </div>




                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Product Test Reporting
                                                            Date:</label>
                                                        <script>

                                                        </script>

                                                        <input type='date' class='form-control' id='#datepicker'
                                                            name='Product_Report_Date' Required>
                                                    </div>

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
                                                    document.getElementById('#datepicker').value = getTodayDate();
                                                    </script>



                                                    <div class='form-group'>
                                                        <label for='exampleSelectGender'>Select Product Tested
                                                            Type From Test Department:</label>

                                                        <select name="Product_Test_Type" id="testing"
                                                            class='form-control' required>
                                                            <option selected disabled value="">Select Test</option>
                                                            <option value="<?php echo $rows['Product_Test_Type']; ?>">
                                                                <?php echo $rows['Product_Test_Type']; ?>
                                                            </option>

                                                        </select>





                                                        <script>
                                                        function generateTestId() {
                                                            var product = document.getElementById("product");
                                                            var selectedProduct = product.options[product
                                                                .selectedIndex].value;



                                                            var testing = document.getElementById("testing");
                                                            var selectedTesting = testing.options[testing
                                                                .selectedIndex].value;

                                                            // Take the first 6 digits from product and testing IDs and concatenate them
                                                            var testingProductId = selectedProduct.slice(0, 6) +
                                                                selectedTesting.slice(0, 6);

                                                            // Set the value of Testing Product ID field
                                                            document.getElementById("Product_Test_Id").value =
                                                                testingProductId;
                                                        }
                                                        </script>




                                                        <p id='testtypeerror'
                                                            style='color:maroon; position:relative; top:3px; left:3px;'>
                                                        </p>
                                                    </div>

                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Enter Required Test Type:</label>
                                                        <textarea type='text' class='form-control'
                                                            placeholder='Required Test Type' name='Product_Description'
                                                            value='' Required></textarea>
                                                    </div>

                                                    <button class='btn btn-success mr-2' type='submit'
                                                        name="testrequired">Demand Now</button>

                                                </form>
                                                <script>
                                                function validateForm() {
                                                    var check = document.getElementById('testoptions').value;
                                                    var product = document.getElementById('product').value;




                                                    if (check === 'Select Test Type') {

                                                        document.getElementById('testtypeerror')
                                                            .innerHTML = 'Select Test Type';

                                                        $('#testoptions').addClass('is-invalid');

                                                        return false;


                                                    }

                                                    if (product === "") {
                                                        $('#product').addClass('is-invalid');
                                                        return false;
                                                        document.getElementById('producterror')
                                                            .innerHTML = 'Select Product';

                                                    }
                                                }
                                                </script>
                                                <?php
        }

    }
    ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- content-wrapper ends -->
                    <?php include 'includes/footer.php' ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <?php include 'includes\scripts.php' ?>
</body>

</html>
<?php

?>
<?php
 }
?>