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
                    <!-- partial -->
                    <div class="row">
                        <div class="col-lg-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card">

                                            <div class="row">
                                                <div class="col-lg-12 grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <?php
                                                           $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
$query = "SELECT * FROM decline_reason_table5;";
$data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
if ( mysqli_num_rows( $data ) > 0 ) {
    ?>
                                                            <h4 class="card-title">Decline Products Activities</h4>
                                                            <p class="card-description"> Products
                                                                <code><a href="view_product.php">Sort Table By Date</a></code>
                                                            </p>

                                                            <hr style="border-bottom: 2px solid black;">

                                                            <table class="table">

                                                                <thead style="border-bottom: 2px solid black;">
                                                                    <tr>
                                                                        <th><b>Product ID</b></th>
                                                                        <th><b>Product Test ID</b></th>
                                                                        <th><b>Product Name</b></th>
                                                                        <th><b>Product Category</b></th>

                                                                        <th><b>Product Test Recieve</b></th>
                                                                        <th><b>Product Status</b></th>
                                                                        <!-- <th><b>Description</b></th> -->


                                                                    </tr>

                                                                </thead>

                                                                <tbody>

                                                                    <?php

                                    
                                                                   while( $rows = mysqli_fetch_assoc( $data ) ) 
                                                                 {

                                                                   ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $rows[ 'Product_Id' ];?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $rows[ 'Product_Test_Id' ];?>
                                                                        </td>

                                                                        <td>
                                                                            <?php echo $rows[ 'Product_Name' ];?>
                                                                        </td>

                                                                        <td>
                                                                            <?php echo $rows[ 'Product_Category' ];?>
                                                                        </td>



                                                                        <td>

                                                                            <?php echo $rows[ 'Decline_Test_Date' ];?>

                                                                        </td>
                                                                        <?php 

if($rows[ 'Product_Status' ]==="Accepted For Testing"){
?>
                                                                        <td>
                                                                            <label class="badge badge-warning">
                                                                                <?php echo $rows[ 'Product_Status' ];?>
                                                                            </label>
                                                                        </td>
                                                                        <?php       
                                                                       }  if($rows[ 'Product_Status' ]==="After Accepted"){
?>
                                                                        <td>
                                                                            <label class="badge badge-info">
                                                                                <?php echo $rows[ 'Product_Status' ];?>
                                                                            </label>
                                                                        </td>
                                                                        <?php }?>
                                                                        <?php       
                                                                        if($rows[ 'Product_Status' ]==="After Declined"){
?>

                                                                        <?php }?>
                                                                        <?php       
                                                                        if($rows[ 'Product_Status' ]==="Declined For Testing"){
?>
                                                                        <td>
                                                                            <label class="badge badge-danger">
                                                                                <?php echo $rows[ 'Product_Status' ];?>
                                                                            </label>
                                                                        </td>
                                                                        <?php } else{?>
                                                                        <td>
                                                                            <label class="badge badge-info">
                                                                                <?php echo $rows[ 'Product_Status' ];?>
                                                                            </label>
                                                                        </td>
                                                                        <?php }?>












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