<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>SRS - Software requirement Specification</title>
</head>

<body>
<?php include "partials/_header.php"; ?>
    <!-- Content section start -->
    <div class="px-4 py-5 text-center bg-dark text-light"
        style="background-image: linear-gradient(rgba(36, 36, 36, 0.7), rgba(39, 39, 39, 0.7)), url('images/pexels-nick-collins-1292998.jpg'); background-position: center; background-attachment: fixed;">
        <img class="d-block mx-auto mb-4" src="images\images (1).png" width="120" height="70">
        <h1 class="display-5 fw-bold text-body-emphasis">My Cart</h1>
       
    </div>
    <div class="container-fluid p-5"
        style="background: url('images/richard-horvath-cPccYbPrF-A-unsplash.jpg'); background-size: cover; background-attachment: fixed;">
        <div class="row">
            <!-- <div class="col-lg-12 text-center">
                <h1>MY CART</h1>
            </div> -->
            <div class="col-lg-9">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){

                            foreach ($_SESSION['cart'] as $key => $value) {
                               
                                $serial_No = $key + 1;

                                echo "<tr>
                                <td> $serial_No</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]<input type='hidden' class='item_price' value='$value[Price]'</td>
                                    <td>
                                    <form action='manage_cart.php' method='post'>
                                    <input class='text-center item_quantity' type='number' value='$value[Quantity]' name='prod_quanttity' onchange='this.form.submit()' min='1' max='10'>
                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'/>
                                    </form>
                                    </td>
                                    <td class='itotal'></td>
                                    <form action='manage_cart.php' method='post'>
                                    <td>
                                    <button name='Remove_Item' class='btn btn-sm btn-outline-light'>REMOVE</button>
                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'/>
                                    </td>
                                    </form>
                                    </tr>
                                
                                ";
                        }
                    }
                    else {
                        echo "<tr><td colspan='4'><b>No items in cart</b><td></tr>";
                   }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border text-light bg-dark bg-gradient rounded p-4">
                    <h4>Grand Total</h4>
                    <h5 class="text-right" id="grand_total"></h5> <br>
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                        ?>
                    <form action="purchase.php" method="post">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="Full_name" placeholder="Your Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="Address" placeholder="Your Address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone No:</label>
                            <input type="number" name="Phone_No" placeholder="Your Phone" class="form-control">
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" checked type="radio" name="COD" value="COD"
                                id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery </label>
                        </div>
                        <br><br><br>
                        <button name="purchase" class="btn btn-outline-light btn-block text-center">Make
                            Purchase</button>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <script>
    var grand_total = 0;
    var iprice = document.getElementsByClassName('item_price');
    var iquantity = document.getElementsByClassName('item_quantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('grand_total');

    function subTotal() {
        grand_total = 0;
        for (i = 0; i < iprice.length; i++) {
            var calc = (iprice[i].value) * (iquantity[i].value);
            itotal[i].innerText = calc;
            grand_total = grand_total + calc;
        }

        gtotal.innerText = grand_total;
    }

    subTotal();
    </script>
    <!-- Content section end -->




    <!-- Footer section start -->

    <div class="container-fluid my-3">
        <footer class="text-center text-lg-start text-white" style="background-color: #3e4551">
            <div class="container p-4 pb-0">
                <section class="">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Software Requirements Specification (SRS)</h5>

                            <p>
                                SRS stands for Software Requirements Specification. It is a comprehensive document that
                                outlines the functional and non-functional requirements of a software system. The SRS
                                document serves as a blueprint for the development team, providing a clear understanding
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

                    </div>

                </section>


                <hr class="mb-4" />


                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Register for free</span>
                        <button type="button" class="btn btn-outline-light btn-rounded">
                            Sign up!
                        </button>
                    </p>
                </section>
                <hr class="mb-4" />
                <section class="mb-4 text-center">

                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-google"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-facebook"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-linkedin-in"></i></a>
                </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">SRSresearch.edu.pk</a>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->



</body>

</html>