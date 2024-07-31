<?php include "partials/_db_connect.php" ?>

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

    <!-- Content section starts -->

    <div class="px-4 py-5 text-center bg-dark text-light"
        style="background-image: linear-gradient(rgba(36, 36, 36, 0.7), rgba(39, 39, 39, 0.7)), url('images/christopher-burns-Kj2SaNHG-hg-unsplash.jpg'); background-attachment: fixed;">
        <img class="d-block mx-auto mb-4" src="images\images (1).png" width="120" height="70">
        <h1 class="display-5 fw-bold text-body-emphasis">CPRI, Reports</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Central Power Research Institute (CPRI) is a research institute originally established
                by the Government of India in 1960, with headquarters in Bangalore. The Institute was re-organized into
                an Autonomous Society in the year 1978 under the aegis of the Ministry of Power, Government of India.
                The main objective of setting up the Institute is to serve as a national Level laboratory for
                undertaking applied research in electrical power engineering besides functioning as an independent
                national testing and certification authority for electrical equipment and components to ensure
                reliability in power systems and to innovate and develop new products.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <p>
                    <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseWidthExample" aria-expanded="false"
                        aria-controls="collapseWidthExample">
                        More Details
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="collapseWidthExample">
                        <div class="card bg-dark card-body" style="width: 300px;">
                            CPRI has been taking programs in various areas of electrical power generation, transmission
                            and distribution in the endeavor to assist utilities to supply reliable, uninterrupted and
                            quality services to the consumers. The broad objectives with the research projects are taken
                            up in CPRI are
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container my-3">
        <h2>Tested Product</h2>
        <?php
        
            $sql = "SELECT * FROM `reports`";
            $result = mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($result)) {
                $report_id = $rows['report_id'];
                $report_name = $rows['report_name'];
                $report_desc = $rows['report_desc'];
                echo ' <table class="table table-dark table-striped">';
               echo '<thead>
                    <th>Srlno</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    </thead>
                    <tbody>
                    <tr>
                    <td>' . $report_id . '</td>
                    <td>' . $report_name . '</td>
                    <td>' . $report_desc . '</td>
                </tr>
                </tbody>
            </table>';
        }
    ?>
    </div>
    <div class="container my-3 col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="images\a_logo_for_my_research_company_named_Central_Po.jpg"
                    class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">CPRI, After Testing We will lounch All
                    products in the Market</h1>
                <p class="lead">CPRI is accredited by National Accreditation Board for Certifying Bodies (NABCB) for
                    certification of electrical equipment as per ISO/IEC 17065: 2012 for Type 1a scheme. CPRI can offer
                    Certification for its Test Reports covering Transformers & Reactors, Cables and cable accessories,
                    Capacitors, Switchgear & Control gear, Microgeneration, Transmission line accessories and Energy
                    meters.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="https://www.inmrlaboratoryguide.com/listing/power-research-institute/"
                        class="btn btn-warning btn-lg px-4 me-md-2" fdprocessedid="ffkpxd">More (CPRI)</a>

                </div>
            </div>
        </div>

    </div>
    <hr class="my-5">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <iframe class="d-block mx-lg-auto" width="700" height="500"
                    src="https://www.youtube.com/embed/epBpK_MszZY?si=bO4EiIvF_I63tgQ4" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Electrical Products, Report Store</h1>
                <p class="lead">Electricity is the set of physical phenomena associated with the presence and motion of
                    matter that has a property of electric charge. Electricity is related to magnetism, both being part
                    of the phenomenon of electromagnetism, as described by Maxwell's equations. Various common phenomena
                    are related to electricity, including lightning, static electricity, electric heating, electric
                    discharges and many others.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="https://www.globaldata.com/store/industry/electrical-products-market/"
                        class="btn btn-warning btn-lg px-4 me-md-2">More</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Content section end -->




    <!-- Footer section start -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container-fluid my-6">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #3e4551">
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

                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
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
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">SRSresearch.edu.pk</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->



</body>

</html>