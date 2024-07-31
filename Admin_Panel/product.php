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
    <link rel="stylesheet" href="lightbox.css">
    <title>SRS - Software requirement Specification</title>
</head>

<body>
    <?php include "partials/_header.php"; ?>
    <div class="px-4 py-5 text-center bg-dark text-light"
        style="background-image: linear-gradient(rgba(36, 36, 36, 0.7), rgba(39, 39, 39, 0.7)), url('images/pexels-tim-douglas-6205600.jpg'); background-attachment: fixed;">
        <img class="d-block mx-auto mb-4" src="images\images (1).png" width="120" height="70">
        <h1 class="display-5 fw-bold text-body-emphasis">Product Modules</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">To discuss a practical approach to an electronic laboratory,
                we need to understand the problems that prevent electronic
                working. This article will review the following:</p>
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
                            Again, this process is inefficient, slow and
                            error prone due to the manual data entries,
                            which causes major problems for the
                            reviewer.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Content section start -->

    <div class="container marketing my-3 bg-light">
        <h2 class="pb-2 border-bottom">Designing Process</h2>
        <div class="row">
            <div class="col-lg-4">
                <a href="images\module.jpg" data-lightbox="Lab" data-title="THE ANALYTICAL PROCESS"><img
                        class="bd-placeholder-img rounded-circle" width="140" height="140" src="images\module.jpg"></a>
                <h2 class="fw-normal">THE ANALYTICAL PROCESS</h2>
                <p>The analytical process in FIGURE 1 describes the high-level
                    workflow from sampling to a reportable result; here, we will
                    focus on sample preparation to reporting in order to make a
                    decision (e.g., for product development or batch release).
                </p>
            </div>
            <div class="col-lg-4">
                <a href="images\module2.jpg" data-lightbox="Lab" data-title="LABORATORY PROCESSES"><img
                        class="bd-placeholder-img rounded-circle" width="140" height="140" src="images\module2.jpg"></a>
                <h2 class="fw-normal">LABORATORY PROCESSES</h2>
                <p>Most laboratory current processes have evolved
                    over time and are not designed to meet today's
                    needs. An example of a chromatographic
                    process in FIGURE 2 illustrates the problem:</p>
            </div><!--  ,  -->
            <div class="col-lg-4">
                <a href="images\module3.jpg" data-lightbox="Lab" data-title="LABORATORY PROCESSES"><img
                        class="bd-placeholder-img rounded-circle" width="140" height="140" src="images\module3.jpg"></a>
                <h2 class="fw-normal">AUTOMATING THE PROCESS</h2>
                <p>Mapping and redesign have only been
                    conducted on paper. How is this implemented
                    in software? Consider the impact of software
                    applications that could be used. The GAMP 5
                    software categories are the best way to
                    understand this as shown in FIGURE 6:</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light px-4 py-5 my-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Manufacturing Process</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image:  url('images/manufacturing3.jpg'); background-size: cover;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Concept and Design</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <a href="images\manufacturing3.jpg" data-lightbox="Lab" data-title="Concept and Design">
                                    <img src="images\cardlogo.jpg" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-warning"></a>
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>Earth</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('images/manufacturing2.jpg'); background-size: cover;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Materials and Components Sourcing
                        </h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <a href="images\manufacturing2.jpg" data-lightbox="Lab"
                                    data-title="Materials and Components Sourcing"><img src=" images\cardlogo.jpg"
                                        alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-warning"></a>
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>Pakistan</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>4d</small>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col">

                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style=" background-image: url('images/manufacturing4.jpg'); background-size: cover;"
                    data-lightbox="image">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-white">Manufacturing Process
                        </h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <a href="images\manufacturing4.jpg" data-lightbox="Lab"
                                    data-title="Materials and Components Sourcing"><img src="images\cardlogo.jpg"
                                        alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-warning"></a>
                            </li>
                            <li class="d-flex align-items-center me-3 text-white">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>California</small>
                            </li>
                            <li class="d-flex align-items-center text-white">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>5d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="b-example-divider"></div>

    <div class="container-fluid px-4 py-5 my-5 bg-light" id="icon-grid">
        <h2 class="pb-2 border-bottom">Top 8 Manufacture Company Names</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">General Electric (GE)</h3>
                    <p>The General Electric Company (GE) is an American multinational company. For more than 130 years,
                        GE has invented the future of industry. Today, GE is best known for its work in the Power,
                        Renewable Energy, and Aerospace industries.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#cpu-fill"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Panasonic Corporation</h3>
                    <p>rovides consumer, logistics, automotive, aviation, entertainment, manufacturing and housing
                        solutions, among others. The company manages and operates facilities, and research and
                        development centres in Japan, Asia, the Americas, and Europe. Panasonic is headquartered in
                        Kadoma-shi, Osaka, Japan.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#calendar3"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Sharp Corporation</h3>
                    <p>The company serves to original equipment manufacturers, electronics industries, solar industries,
                        and household customers. It has operations spanning across the Americas, Middle East, Africa,
                        Europe, and Asia-Pacific. Sharp is headquartered in Sakai-Ku, Osaka, Japan.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#home"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Mitsubishi Electric</h3>
                    <p>bishi Electric is one of the world's leading names in the manufacture and sales of electrical and
                        electronic products and systems used in a broad range of fields and applications. We're applying
                        our technologies to contribute to society and daily life around the world.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Electrolux</h3>
                    <p>Electrolux Group is a leading global appliance company that has shaped living for the better for
                        more than 100 years. We reinvent lifetime taste, care and wellbeing experiences for millions of
                        people, always striving to be at the forefront of sustainability in society through our
                        solutions and operations.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#toggles2"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Toshiba Corporation</h3>
                    <p>Toshiba manufactures a variety of consumer and business products. In addition to HD televisions
                        and laptop computers, the company builds DVD players, digital video recorders (DVRs), printers,
                        copiers, lighting products, medical imaging equipment, surveillance systems, and liquid crystal
                        display (LCD) devices.24-Oct-2023.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#geo-fill"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Kenmore (Sears brand)</h3>
                    <p>Kenmore brand is an industry leader in delivering trusted performance in the home with smart and
                        stylish appliance innovations that help consumers do things quicker, easier and better What is
                        Kenmore is an American brand of household appliances, cookware, floorcare, grills, HVAC
                        equipment and other home items owned.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#tools"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Honeywell</h3>
                    <p>eywell International Inc (Honeywell) is an engineering and technology company. The company
                        invents and manufactures technologies that address challenges in various sectors including
                        energy, security, safety, productivity and global urbanization.</p>
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
    <script src="lightbox-plus-jquery.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->



</body>

</html>