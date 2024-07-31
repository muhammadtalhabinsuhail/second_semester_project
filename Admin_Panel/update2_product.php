<?php

if ( isset( $_POST[ 'update2' ] ) ) {
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
                                                    <h2 class='card-title'><b>Products Registration Form </b></h2>
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

                                                <form class='forms-sample' method='post'
                                                    action='update_product_manage2.php'>


                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Enter Product ID:</label>
                                                        <input type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product ID' name='Product_Id'
                                                            value="<?php echo $rows['Product_Id']; ?>" readonly
                                                            Required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Enter Product Name:</label>
                                                        <input type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product Name' name='Product_Name'
                                                            value="<?php echo $rows['Product_Name']; ?>" Required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Enter Product Category:</label>
                                                        <input type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product Category' name='Product_Category'
                                                            value="<?php echo $rows['Product_Category']; ?>" Required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Enter Product Price:</label>
                                                        <input type='text' class='form-control' id='exampleInputName1'
                                                            placeholder='Product Price' name='Product_Price'
                                                            value="<?php echo $rows['Product_Price']; ?>" Required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Enter Product Manufactured
                                                            Date:</label>
                                                        <input type='date' class='form-control' id='datepicke'
                                                            placeholder='Registration Date' name='Product_Registration'
                                                            value="<?php echo $rows['Manufactured_Date']; ?>" Required>
                                                    </div>

                                                    <div class='form-group'>
                                                        <label for='exampleSelectGender'>Select Product Status:</label>

                                                        <select class='form-control' id='exampleSelectGender'
                                                            name='Product_Status'>
                                                            <!-- PHP code to dynamically generate options based on $rows[ 'Product_Status' ] -->
                                                            <?php
            if ( $rows[ 'Product_Status' ] === 'In Process' )
 {

                ?>
                                                            <option value="<?php echo $rows[ 'Product_Status' ]; ?>"
                                                                selected>
                                                                <?php echo $rows[ 'Product_Status' ];
                ?></option>

                                                            <!-- Hard-coded options -->

                                                            <?php
            } else if ( $rows[ 'Product_Status' ] === 'Just Manufactured' )
 {

                ?>
                                                            <option value="<?php echo $rows[ 'Product_Status' ];?>"
                                                                selected>
                                                                <?php echo $rows[ 'Product_Status' ];
                ?></option>

                                                            <!-- Hard-coded options -->


                                                            <?php
            }
            ?>

                                                        </select>
                                                    </div>

                                                    <div class='form-group'>
                                                        <label for='exampleInputName1'>Enter Product
                                                            Description:</label>
                                                        <textarea type='text' class='form-control'
                                                            placeholder='Product Description' name='Product_Description'
                                                            value='' Required><?php echo $rows[ 'Product_Description' ];
            ?></textarea>
                                                    </div>

                                                    <button type='submit' class='btn btn-dark mr-2'>Register
                                                        Product</button>
                                                    <button class='btn btn-light'>Cancel</button>
                                                </form>
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
<?php }
    ?>