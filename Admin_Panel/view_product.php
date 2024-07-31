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
                                            <!-- <div class="card-body">
                                                <h3 class="page-title">Newly Manufactured Products Tables</h3>
                                                <nav aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                                        <li class="breadcrumb-item active" aria-current="page">Basic
                                                            tables</li>
                                                    </ol>
                                                </nav>
                                            </div> -->
                                            <div class="row">
                                                <div class="col-lg-12 grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <?php
                                                           $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
$query = "SELECT *
FROM in_process_table1;";
$data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
if ( mysqli_num_rows( $data ) > 0 ) {
    ?>
                                                            <h4 class="card-title">In Process Products</h4>
                                                            <p class="card-description"> Products
                                                                <code><a href="view_product.php">Sort Table By Date</a></code>
                                                            </p>

                                                            <hr style="border-bottom: 2px solid black;">

                                                            <table class="table">

                                                                <thead style="border-bottom: 2px solid black;">
                                                                    <tr>
                                                                        <th><b>Product ID</b></th>
                                                                        <th><b>Product Name</b></th>
                                                                        <th><b>Product Category</b></th>
                                                                        <th><b>Product Price</b></th>
                                                                        <th><b>Product Registration</b></th>
                                                                        <th><b>Product Status</b></th>
                                                                        <th><b>Description</b></th>
                                                                        <th><b>Actions</b></th>

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
                                                                            <?php echo $rows[ 'Product_Name' ];?>
                                                                        </td>

                                                                        <td>
                                                                            <?php echo $rows[ 'Product_Category' ];?>
                                                                        </td>

                                                                        <td>
                                                                            <?php echo $rows[ 'Product_Price' ];?>
                                                                        </td>

                                                                        <td>

                                                                            <?php echo $rows[ 'Registration_Date' ];?>

                                                                        </td>
                                                                        <?php 

 if($rows[ 'Product_Status' ]==="Declined"){
 ?>
                                                                        <td>
                                                                            <label class="badge badge-danger">
                                                                                <?php echo $rows[ 'Product_Status' ];?>
                                                                            </label>
                                                                        </td>
                                                                        <?php }?>
                                                                        <?php       
                                                                        if($rows[ 'Product_Status' ]==="In Process"){
 ?>
                                                                        <td>
                                                                            <label class="badge badge-info">
                                                                                <?php echo $rows[ 'Product_Status' ];?>
                                                                            </label>
                                                                        </td>
                                                                        <?php }?>




                                                                        <td>
                                                                            <form method="post"
                                                                                action="description_product.php">
                                                                                <input type="hidden" name="Product_Id"
                                                                                    value="<?php echo $rows['Product_Id']; ?>">
                                                                                <button class="btn btn-success"
                                                                                    type="submit" id="description"
                                                                                    name="description"
                                                                                    style="padding:10px;">
                                                                                    Display
                                                                                </button>

                                                                            </form>

                                                                        </td>





                                                                        <td>



                                                                            <br>

                                                                            <form action="update_product.php"
                                                                                method="post">
                                                                                <input type="hidden" name="Product_Id"
                                                                                    value="<?php echo $rows['Product_Id']; ?>">
                                                                                <button class="btn btn-warning"
                                                                                    style="padding:5px; position:relative; left:3px ;"
                                                                                    name="update"
                                                                                    type="submit">Update</button>
                                                                            </form>


                                                                            <form action="delete_product.php"
                                                                                method="post">
                                                                                <input type="hidden" name="Product_Id"
                                                                                    value="<?php echo $rows['Product_Id']; ?>">
                                                                                <button class="btn btn-danger"
                                                                                    style="padding:5px; position:relative; left:6px ;top:5px; "
                                                                                    name="delete"
                                                                                    type="submit">Delete</button>
                                                                            </form>


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