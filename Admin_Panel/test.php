<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom Stylesheet -->
    <link href="contact.css" rel="stylesheet">

    <title>Contact Us</title>
</head>

<body>


    <?php include "partials/_header.php"; ?>

    <!-- <div class="bg-background"></div> -->
    <div class="container py-sm-2">
        <div class="row py-5 g-3">
            <div class="col-md-6">
                <img src="Man_Showing (2).jpg" class="img-fluid" alt="Image Description" />
            </div>
            <div class="bg-dark text-light bg-gradient col-md-6">
                <h1 class="text-center mt-3">Contact Us</h1>
                <form class="p-4 mt-5" action="send1.php" method="post">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Enter your Name</label>
                        <input type="text" class="form-control" id="nameInput" placeholder="Name" name="name" />
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email ID</label>
                        <input type="text" class="form-control" id="emailInput" name="email" placeholder="Email" />
                    </div>
                    <div class="p-3 mb-3">
                        Subject: <br />
                        <input type="radio" name="subject" value="Costumer Suggestion" required
                            checked /><label>Suggestion:
                        </label><br>
                        <input type="radio" name="subject" value="Costumer Complain" required /><label>Complain (OR)
                            Issue:</label><br>
                        <input type="radio" name="subject" value="Costumer Mindset" required /><label>Something
                            Else</label><br>
                    </div>
                    <div class="mb-3">
                        <label for="messageInput" class="form-label">Enter your message</label>
                        <textarea type="text" class="form-control" id="message" name="message"
                            placeholder="Describe Your Idea" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-outline-light" type="submit">Send Now</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- <div class="row-last">
            <div class="row row-cols-1 row-cols-md-3 p-3 text-white">
                <div class="col">
                    <h4>CALL US</h4>
                    <p>Contact information for calling.</p>
                </div>
                <div class="col">
                    <h4>LOCATION</h4>
                    <p>Information about your location.</p>
                </div>
                <div class="col">
                    <h4>Email</h4>
                    <p>Contact email address.</p>
                </div>
            </div>
        </div> -->
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
</body>

</html>