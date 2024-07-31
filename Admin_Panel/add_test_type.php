<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SRS Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
                                                    <h2 class="card-title"><b>Add Product Test Types </b></h2>
                                                </center>
                                                <hr>
                                                <p class="card-description"> Test Types: </p>
                                                <form class="forms-sample" method="post">
                                                    <input type='hidden'
                                                        value="<?php  echo $rows['Product_Serial']; ?>">
                                                    <!-- <div class="form-group">
                                                        <label for="exampleInputName1">Enter Product ID:</label>
                                                        <input type="text" class="form-control" id="exampleInputName1"
                                                            placeholder="Product ID" name="Product_Id" maxlength="10"
                                                            Required>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Enter Test Type:</label>
                                                        <input type="text" class="form-control" id="exampleInputName1"
                                                            placeholder="Product Name" name="testing_name" Required>
                                                    </div>


                                                    <button type="submit" name="submit"
                                                        class="btn btn-dark mr-2">Register
                                                        Test Type</button><br><br>



                                                    <?php 

function OpensuccessModal() {
    echo '
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-success" id="exampleModalLabel">Registered Successfully,</h4>
                        <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Check icon with green color -->
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="green" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm4.97 4.97a.75.75 0 0 1 1.05 1.05L8 11.05l-3.02-3.02a.75.75 0 1 1 1.05-1.05L8 8.95l4.97-4.97a.75.75 0 0 1 1.05 0z"/>
                            </svg>
                        </div>
                        <p class="mt-16  text-success-emphasis " style="position:relative;  ">New testing service record created successfully</p>
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
            $(document).ready(function(){
                $("#myModal").modal("show");
            });
        </script>
    ';
}







function OpenerrorModal() {
    echo '
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-danger" id="exampleModalLabel">Oops! Something Went Wrong,</h4>
                        <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Check icon with green color -->
                        <div class="text-center">
                        <i class="fas fa-times fa-5x red-cross"></i>
                      </div>
                        <p class="mt-16  text-success-emphasis " style="position:relative;  ">New testing service record is not created</p>
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <script>
            // Open the modal when the page loads
            $(document).ready(function(){
                $("#myModal").modal("show");
            });
        </script>
    ';
}












                                                    
                                                    if (isset($_POST['submit'])) {
                                                    // Form for adding testing service data submitted
                                                    $testing_name = $_POST['testing_name'];
                                                    $testing_id = str_pad(mt_rand(1, 999999999999), 12, '0',
                                                    STR_PAD_LEFT); // Generating 12-digit ID

                                                    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or
                                                     die( 'connection failed' );
                                                    // first of all checking dublication
                                                    $dublication_checker="SELECT * FROM test_type WHERE Test_Name='{$testing_name}';";
                                                    $data = mysqli_query( $conn, $dublication_checker ) or die ( 'query Failed' );
                                                    if ( mysqli_num_rows( $data ) > 0 ) {
                                                        
                                                        OpenerrorModal();
                                                        
                                                    }
                                                    else{
                                                    

                                                    // Insert testing service data into the testing_service table
                                                    $insert_testing_query = "INSERT INTO test_type(Test_Id,Test_Name) VALUES ('$testing_id', '$testing_name')";

                                                    if ($conn->query($insert_testing_query) === TRUE) {
                                                        OpensuccessModal()
                                                        ?>
                                                    <script>
                                                    // var imgElement = document.getElementById('myImage');
                                                    // imgElement.src = 'Admin_Panel\includes\checkimg.jpg';
                                                    </script>
                                                    <?php 

                                                    //echo "New testing service record created successfully";
                                                    }
                                                    else {
                                                        OpenerrorModal();
                                                    echo "Error: ".$insert_testing_query.
                                                    "<br>".$conn->error;
                                                    }
                                                    
                                                    }


                                                }

                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- content - wrapper ends -->
                    <?php include "includes/footer.php" ?>

                    <!-- partial -->
                </div>

            </div>

        </div>
        <?php include "includes\scripts.php" ?>
</body>

</html>