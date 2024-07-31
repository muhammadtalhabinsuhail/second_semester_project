<?php
// if ( isset( $_POST[ 'description' ] ) ) {
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
    <link rel='shortcut icon' href='images\file-icons\64\005-database.png' />
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
                    <!-- partial -->
                    <div class='row'>
                        <div class='col-lg-12 grid-margin'>
                            <div class='card'>
                                <div class='card-body'>
                                    <div class='col-12 grid-margin stretch-card'>
                                        <div class='card'>
                                            <!-- <div class = 'card-body'>
    <h3 class = 'page-title'>Newly Manufactured Products Tables</h3>
    <nav aria-label = 'breadcrumb'>
    <ol class = 'breadcrumb'>
    <li class = 'breadcrumb-item'><a href = '#'>Tables</a></li>
    <li class = 'breadcrumb-item active' aria-current = 'page'>Basic
    tables</li>
    </ol>
    </nav>
    </div> -->
                                            <div class='row'>
                                                <div class='col-lg-12 grid-margin stretch-card'>
                                                    <div class='card'>
                                                        <div class='card-body'
                                                            style='overflow:hidden; text-overflow: ellipsis;'></div>
                                                        <?php
    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query = "SELECT * FROM manufactured_products_table2 WHERE Product_Id = '{$Product_Id}'";
    $data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
    if ( mysqli_num_rows( $data ) > 0 ) {
        ?>
                                                        <h4 class='card-title'>Manufactured Products</h4>
                                                        <p class='card-description'> Products
                                                            <code><a href = 'view_product.php'>Description Table</a></code>
                                                        </p>

                                                        <!-- <hr style = 'border-bottom: 2px solid black;'> -->

                                                        <table class='table table-responsive '>

                                                            <thead style='border-bottom: 2px solid black;'>
                                                                <tr>
                                                                    <th><b>Product ID</b></th>
                                                                    <th><b>Product Name</b></th>
                                                                    <th><b>Product Category</b></th>
                                                                    <th><b>Description</b></th>

                                                                </tr>

                                                            </thead>

                                                            <tbody>

                                                                <?php

        while( $rows = mysqli_fetch_assoc( $data ) ) 
 {

            ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $rows[ 'Product_Id' ];
            ?>
                                                                    </td>

                                                                    <td>
                                                                        <?php echo $rows[ 'Product_Name' ];
            ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $rows[ 'Product_Category' ];
            ?>
                                                                    </td>

                                                                    <td>

                                                                        <?php echo $rows[ 'Product_Description' ];
            ?>

                                                                    </td>

                                                                </tr>

                                                                <?php
        }
        ?>

                                                            </tbody>
                                                        </table>
                                                        <?php
    } else {
        echo '<h1><center style="color:red;"> <br> None Data exists in your panel !</h1></center>';
    }

    ?>

                                                        <?php

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
// }
?>