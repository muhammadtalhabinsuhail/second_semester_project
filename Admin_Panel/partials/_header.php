<?php
echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient">
<div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images\SRS PROJECT LOGO.png" width="70"
            height="80" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product.php">Product Modules</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="reports.php" tabindex="-1" aria-disabled="true">Reports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="test.php" tabindex="-1" aria-disabled="true">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php" tabindex="-1" aria-disabled="true">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="gallery.php" tabindex="-1" aria-disabled="true">Gallery Section</a>
        </li>
        </ul>';
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){
        echo '
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-2 pl-2">
        <li class="nav-bt">
            <a class="btn btn-outline-light rounded-pill" href="logout.php">Logout</a>
        </li>';
        }
        else{
         echo'
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-2 pl-2">
         <li class="nav-bt">
             <a class="btn btn-outline-light rounded-pill" href="register.php">Login</a>
         </li>';
        }
        echo' <li class="nav-bt">
                <?php
                $count = 0;
                if (isset($_SESSION["cart"])) {
                $count = count($_SESSION["cart"]);
                }
                ?>
                <a href="mycart.php" class="btn btn-outline-light rounded-pill">My Cart <?php echo "( $count )"?></a>
            </li>
        </ul>
    </div>
</div>
</nav>
';

?>
