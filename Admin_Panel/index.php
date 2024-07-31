<?php
include "partials/_db_connect.php" ;
session_start();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link href="contact.css" rel="stylesheet">
    <title>SRS - Software requirement Specification</title>
</head>

<body>
    <!-- <div class="loader">
   <div id="preloader" data-glitch="Loading..." class="glitch">Loading...</div>
</div> -->

    <?php include "partials/_header.php"; ?>


    <!-- Carousel section start -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images\CASUAL 2 (1).png" width="300" height="700" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images\casual 3 blur.png" width="300" height="700" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images\casual capacitor 1.png" width="300" height="700" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel end -->
    <br><br>
    <hr><br><br><br>
    <center>
        <h1>Approved Products By CPRI & Manufacture</h1>
    </center>
    <br><br><br>



















    <div class="container my-4">
        <div class="row">
            <?php
            $conn = mysqli_connect('localhost','root','','company');
            ?>

            <?php 
            
            $query = "SELECT * FROM electric_products;";
            $data = mysqli_query($conn, $query);

            // if (mysqli_num_rows($data) > 0) {
            while ($result = mysqli_fetch_assoc($data)) {
                $imagePath = "releasedpro/" . $result['img_drc'];

            echo '<div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <img src="' . $imagePath . '"  alt="Not Showing" width="100%" height="255px">
                    
                    <div class="card-body">
                       <center> <h3 class="card-text"> ' . $result['product_name'] . '</h3></center>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <div class="d-grid gap-2 d-md-block">
                                    <form action="manage_cart.php" method="POST">
                                        <button class="btn btn-dark" name="Add_To_Cart" type="submit">Add To
                                            Cart</button>
                                        <input type="hidden" name="Item_Name" value="' . $result['product_name'] . '" />
                                        <input type="hidden" name="Price" value="' . $result['product_price'] . '" />
                                    </form>
                                </div>
                            </div>
                            <div class="btn-group">
                                <div class="d-grid gap-2 d-md-block">
                                    <button type="button" class="btn btn-dark mb-2" data-bs-toggle="modal"
                                        data-bs-target="#productModal_">
                                        More details
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted">&#8377;' . $result['product_price'] . '</p>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="productModal_" tabindex="-1" aria-labelledby="productModalLabel_" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="productModalLabel_">' . $result['product_name'] . '</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="mb-3">
                                        <h2>About this Product</h2>
                                        <p>' . $result['product_desc'] . '</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div id="list-example" class="list-group">
                                                <a class="list-group-item list-group-item-action"
                                                    href="#list-item-1">Features!</a>
                                                <a class="list-group-item list-group-item-action"
                                                    href="#list-item-2">Usage</a>
                                                <a class="list-group-item list-group-item-action"
                                                    href="#list-item-3">Warranty</a>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div data-bs-spy="scroll" data-bs-target="#list-example"
                                                data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                                                <h4 class="text-secondary" id="list-item-1"><span><i
                                                            class="fa-solid fa-shield"></i></span>Features | Voltage:</h4>
                                                <p>' . $result['pr_features'] . '</p>
                                                <h4 class="text-secondary" id="list-item-2"><span><i
                                                            class="fa-solid fa-triangle-exclamation"></i></span>Usage |
                                                    Overcurrent Protection:
                                                </h4>
                                                <p>' . $result['pr_usage'] . '</p>
                                                <h4 class="text-secondary" id="list-item-3"><span><i
                                                            class="fa-solid fa-circle-info"></i></span>Warranty:</h4>
                                                <h6>' . $result['warranty'] . '</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>';
            }
            // }
            ?>

        </div>
    </div>





























    <!-- footer -->
    <div class="container-fluid my-6">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Software Requirements Specification (SRS)</h5>

                            <p>
                                SRS stands for Software Requirements Specification. It is a comprehensive document
                                that
                                outlines the functional and non-functional requirements of a software system. The
                                SRS
                                document serves as a blueprint for the development team, providing a clear
                                understanding
                                of what needs to be designed and implemented.
                            </p>
                        </div>
                        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Contact Information</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Customer Support</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Email</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Phone</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Privacy and Legal</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Terms of Service</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">FAQ</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Navigation</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">Products/Services</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Accessibility Statement</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="mb-4" />

                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Register for free</span>
                        <button type="button" class="btn btn-outline-light btn-rounded">
                            Sign up!
                        </button>
                    </p>
                </section>
                <!-- Section: CTA -->

                <hr class="mb-4" />

                <!-- Section: Social media -->
                <section class="mb-4 text-center">

                    <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i
                            class="fab fa-google"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-facebook"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-linkedin-in"></i></a>
                </section>
                <!-- Section: Social media exit -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-4 copyright">
                © 2023 Copyright:
                <a class="text-white">SRSresearch.edu.pk</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- End of .container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="lightbox-plus-jquery.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->



</body>

</html>