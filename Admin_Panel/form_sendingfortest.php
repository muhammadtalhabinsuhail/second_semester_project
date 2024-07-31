<?php

if ( isset( $_POST[ 'sendingfortest' ] ) ) {
    $Product_Id = $_POST[ 'Product_Id' ];
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
            <?php include 'includes\aside_add_product.php'?>

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
                                                    <h2 class='card-title'><b>Ready For Test Form </b></h2>
                                                </center>
                                                <hr>
                                                <p class='card-description'> Add Manufactured Products: </p>
                                                <?php
    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query = "SELECT * FROM manufactured_products_table2 WHERE Product_Id = '{$Product_Id}'";
    $data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
    if ( mysqli_num_rows( $data ) >0 ) {
        while( $rows = mysqli_fetch_assoc( $data ) ) {

            
            ?>

                                                <form class='forms-sample' method='Post' action='testsendertable.php'
                                                    onsubmit='return validateForm()'>


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
                                                            placeholder='Product ID' name='Product_Test_Id' Required
                                                            readonly>
                                                    </div>





                                                    <div class='form-group'>
                                                        <label for="product">Product Name:</label>
                                                        <select name="product" id="product" class='form-control'
                                                            onchange="generateTestId()" required>
                                                            <option selected disabled value="">Check and Select
                                                                Product
                                                            </option>
                                                            <?php
                                                        $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
                                                        $product_query = "SELECT Product_Id, Product_Name FROM manufactured_products_table2 WHERE Product_Id='{$Product_Id}' ";
                                                        $product_result = $conn->query($product_query);
            if ($product_result->num_rows > 0) {
                while ($row = $product_result->fetch_assoc()) {
                    echo "<option value='" . $row["Product_Id"] . "'>" . $row["Product_Name"] . "</option>";
                }
            }
            ?>



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
                                                        <label for='exampleInputName1'>Product Sending For Test
                                                            Date:</label>
                                                        <script>

                                                        </script>

                                                        <input type='date' class='form-control' id='#datepicker'
                                                            placeholder='Registration Date'
                                                            name='Product_Sending_Test_Date' Required>
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
                                                        <label for='exampleSelectGender'>Product Status:</label>

                                                        <select class='form-control' id='exampleSelectGender'
                                                            name='Product_Status'>
                                                            <!-- PHP code to dynamically generate options based on $rows[ 'Product_Status' ] -->
                                                            <option selected value='Testing Condition'>Testing
                                                                Condition
                                                            </option>

                                                        </select>
                                                    </div>

                                                    <div class='form-group'>
                                                        <label for='exampleSelectGender'>Select Product Test
                                                            Type:</label>

                                                        <select name="testing" id="testing" class='form-control'
                                                            onchange="generateTestId()" required>
                                                            <option selected disabled value="">Select Test</option>
                                                            <?php
                                                             $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
                                                             $testing_query = "SELECT Test_Id, Test_Name FROM test_type";
$testing_result = $conn->query($testing_query);
            if ($testing_result->num_rows > 0) {
                while ($row = $testing_result->fetch_assoc()) {
                    echo "<option value='" . $row["Test_Id"] . "|" . $row["Test_Name"] . "'>" . $row["Test_Name"] . "</option>";

                }
            }
            
            ?>

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
                                                        <label for='exampleInputName1'>Enter Product
                                                            Description:</label>
                                                        <textarea type='text' class='form-control'
                                                            placeholder='Product Description' name='Product_Description'
                                                            value='' Required><?php echo $rows[ 'Product_Description' ];
            ?></textarea>
                                                    </div>

                                                    <button class='btn btn-dark mr-2' type='submit'
                                                        name="sendtotest">Send
                                                        Now</button>
                                                    <button class='btn btn-light'>Cancel</button>
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
}
?>