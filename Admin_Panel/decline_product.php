<?php

// if ( isset( $_POST[ 'sendingfortest' ] ) ) {
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
            <?php include 'includes\aside_test_product.php'?>

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
                                                    <h2 class='card-title'><b>Ready For Decline Form </b></h2>
                                                </center>
                                                <hr>
                                                <p class='card-description'> Add Manufactured Products: </p>
                                                <?php
$conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
$query = "SELECT * FROM pending_testreceiving_table4 WHERE Product_Test_Id = '{$Product_Test_Id }'";
$data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
if ( mysqli_num_rows( $data ) >0 ) {
    while( $rows = mysqli_fetch_assoc( $data ) ) {

        ?>

                                                <form class='forms-sample' method='Post' action='decline_process.php'
                                                    onsubmit='return validateForm()'>

                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Product ID:</label>
                                                        <input type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product ID' name='Product_Id'
                                                            value="<?php echo $rows['Product_Id']; ?>" readonly
                                                            required>
                                                    </div>

                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Product Test ID:</label>
                                                        <input type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product ID' name='Product_Test_Id'
                                                            value='<?php echo $rows['Product_Test_Id']; ?>' readonly
                                                            Required>
                                                    </div>

                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Product Name:</label>
                                                        <input type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product Name' name='Product_Name'
                                                            value="<?php echo $rows['Product_Name']; ?>" Required
                                                            readonly>
                                                    </div>
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
                                                        <label for='exampleSelectGender'>Product Status:</label>

                                                        <select class='form-control' id='exampleSelectGender'
                                                            name='Product_Status'>
                                                            <!-- PHP code to dynamically generate options based on $rows[ 'Product_Status' ] -->
                                                            <option selected value='Declined For Testing'>Declined For
                                                                Testing
                                                            </option>

                                                        </select>
                                                    </div>

                                                    <div class='form-group'>
                                                        <label for='exampleSelectGender'>Select Product Test
                                                            Type:</label>

                                                        <select class='form-control' id='testoptions'
                                                            name='Product_Test_Type'>
                                                            <option value='<?php echo $rows[ 'Product_Test_Type' ];?>'>
                                                                <?php echo $rows[ 'Product_Test_Type' ];
        ?> </option>

                                                        </select>
                                                        <p id='testtypeerror'
                                                            style='color:maroon; position:relative; top:3px; left:3px;'>
                                                        </p>
                                                    </div>

                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Enter Product
                                                            Description:</label>
                                                        <textarea type='text' class='form-control'
                                                            placeholder='Product Description' name='Product_Description'
                                                            value='' Required readonly><?php echo $rows[ 'Product_Description' ];
        ?></textarea>
                                                    </div>

                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Enter Product
                                                            Decline Reason:</label>
                                                        <textarea type='text' class='form-control'
                                                            placeholder='Product Description'
                                                            name='Product_Decline_Reason' required></textarea>
                                                    </div>

                                                    <button class='btn btn-dark mr-2' type='submit'>Send Now</button>
                                                    <button class='btn btn-light'>Cancel</button>
                                                </form>
                                                <script>
                                                function validateForm() {
                                                    var check = document.getElementById('testoptions').value;

                                                    if (check === 'Select Test Type') {
                                                        document.getElementById('testtypeerror')
                                                            .innerHTML = 'Select Test Type';

                                                        $('#testoptions').addClass('is-invalid');

                                                        return false;
                                                        // } else if ( confirmpassword !== password ) {
                                                        //     $( '#confirmpassword' ).addClass( 'is-invalid' );
                                                        //     document.getElementById( 'invalid_text3' ).innerHTML =
                                                        //         'Enter Valid Details';
                                                        // }

                                                        // if ( userconfirmation ) {
                                                        // window.location.href = 'form_sendingfortest.php';
                                                        // } else {
                                                        //     window.location.href = 'form_sendingfortest.php';
                                                        // }

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
//}
?>