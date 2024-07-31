<?php  session_start();
function OpensuccessModal() {
echo '

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="exampleModalLabel">Sent Successfully,</h4>
                <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Check icon with green color -->
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="green"
                        class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm4.97 4.97a.75.75 0 0 1 1.05 1.05L8 11.05l-3.02-3.02a.75.75 0 1 1 1.05-1.05L8 8.95l4.97-4.97a.75.75 0 0 1 1.05 0z" />
                    </svg>
                </div>
                <p class="mt-16  text-success-emphasis " style="position:relative;  ">Product Report Sent Successfully
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
// Open the modal when the page loads
$(document).ready(function() {
    $("#myModal").modal("show");
});
</script>
';
}

if ( $_SESSION['sendtotest']==true ){
OpensuccessModal();
}
$_SESSION['sendtotest']='';



?>


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
$query = "SELECT * FROM pending_testreceiving_table4 WHERE Product_Status='Pending For Test';";
$data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
if ( mysqli_num_rows( $data ) > 0 ) {
    ?>
                                                            <h4 class="card-title">Pending For Test</h4>
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
                                                                        <th><b>Product Test Type</b></th>
                                                                        <th><b>Product Sent</b></th>
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
                                                                            <?php echo $rows[ 'Product_Test_Id' ];?>
                                                                        </td>

                                                                        <td>
                                                                            <?php echo $rows[ 'Product_Name' ];?>
                                                                        </td>

                                                                        <td>
                                                                            <?php echo $rows[ 'Product_Test_Type' ];?>
                                                                        </td>



                                                                        <td>

                                                                            <?php echo $rows[ 'Receiving_Test_Date' ];?>

                                                                        </td>
                                                                        <?php 

if($rows[ 'Product_Status' ]==="Pending For Test"){
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
                                                                                action="description2.php">
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
                                                                            <form action="canceltesting.php"
                                                                                method="post">
                                                                                <input type="hidden"
                                                                                    name="Product_Test_Id"
                                                                                    value="<?php echo $rows['Product_Test_Id']; ?>">
                                                                                <button class="btn btn-danger"
                                                                                    style="padding:10px; position:relative; left:6px ;; "
                                                                                    name="delete" type="submit">Cancel
                                                                                    Testing</button>
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

                                                            <?php 
if (isset($_POST['description'])) {
    $Product_Id = $_POST[ 'Product_Id' ];



?>
                                                            <!-- modal working -->
                                                            <div class="modal" id="myModal">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Product
                                                                                Description
                                                                            </h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal">&times;</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h3>Product ID: <p>
                                                                                    <?php echo $Product_Id ; ?>
                                                                                </p>
                                                                            </h3>
                                                                            <p>This is your modal content.
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php }?>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


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