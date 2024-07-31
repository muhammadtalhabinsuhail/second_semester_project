<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">SRS Admin Panel</p>
                    <p class="designation">Administrator</p>
                </div>
                <div class="icon-container">
                    <i class="icon-bubbles"></i>
                    <div class="dot-indicator bg-danger"></div>
                </div>
            </a>
        </li>
        <!-- <li class="nav-item nav-category">
            <span class="nav-link">Dashboard Supervision</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
            </a>
        </li> -->

        <!-- <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="icon-layers menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li> -->
        <li class="nav-item nav-category"><span class="nav-link">Notification Dashboard</span></li>



        <?php 
        $sql="SELECT COUNT(*) AS row_count FROM CPRI_receiveproducts_table16 WHERE Product_Status='Received by CPRI' ;";
        $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        if($row['row_count'] > 0){
        ?>



        <li class="nav-item">
            <a class="nav-link" href="cpri_product.php">
                <span class="menu-title"> Products Notification</span>
                <span class="badge bg-danger"
                    style="position: relative; left:15px"><?php echo $row['row_count']?></span>

            </a>
            <?php }

            else {?>

        <li class="nav-item">
            <a class="nav-link" href="cpri_product.php">
                <span class="menu-title"> Products Notification</span>
                <span class="badge bg-danger"></span>
                <i class="menu-icon  icon-bell"></i>
            </a>
            <?php }?>



        <li class="nav-item nav-category"><span class="nav-link">Products Received</span></li>
        <li class="nav-item">
            <a class="nav-link" href="cpri_accepted_products_show_oncpri.php">
                <span class="menu-title">Accepted Products</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cpri_testwise_products.php">
                <span class="menu-title">Testwise Accepted Products</span>
            </a>
        </li>

        <li class="nav-item nav-category"><span class="nav-link">Other Test Required</span></li>
        <li class="nav-item">
            <a class="nav-link" href="cpri_demand_testtype2.php">
                <span class="menu-title">Demand For Other Test</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cpri_waitingfortest.php">
                <span class="menu-title">See waiting for other test</span>
            </a>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">Testing Processes</span></li>
        <li class="nav-item">
            <a class="nav-link" href="cpri_undertest_showoncpri.php">
                <span class="menu-title">Under Testing Products</span>
            </a>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">Successful Products</span></li>
        <li class="nav-item">
            <a class="nav-link" href="cpri_approveproduct_show_oncpri.php">
                <span class="menu-title">Approved Products</span>
            </a>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">Failures Products</span></li>
        <li class="nav-item">
            <a class="nav-link" href="cpri_failedproduct_show_oncpri.php">
                <span class="menu-title">Failed Products</span>
            </a>
        </li>




        <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
            </ul>
        </div>
        </li>
        <li class="nav-item pro-upgrade">
            <span class="nav-link">
                <a class="btn btn-block px-0 btn-rounded btn-upgrade"
                    href="https://www.bootstrapdash.com/product/stellar-admin-template/" target="_blank"> <i
                        class="icon-badge mx-2"></i> Upgrade to Pro</a>
            </span>
        </li>
    </ul>
</nav>