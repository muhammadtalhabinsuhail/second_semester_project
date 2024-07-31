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
        <li class="nav-item nav-category">
            <span class="nav-link">Notifications Dashboard </span>
        </li>




        <?php 
        $sql="SELECT COUNT(*) AS row_count FROM pending_testreceiving_table4 WHERE Product_Status='Pending For Test' ;";
        $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        if($row['row_count'] > 0){
        ?>



        <li class="nav-item">
            <a class="nav-link" href="test_product.php">
                <span class="menu-title"> Products Notification</span>
                <span class="badge bg-danger"
                    style="position: relative; left:15px"><?php echo $row['row_count']?></span>

            </a>
            <?php }

            else {?>

        <li class="nav-item">
            <a class="nav-link" href="test_product.php">
                <span class="menu-title"> Products Notification</span>
                <span class="badge bg-danger"></span>
                <i class="menu-icon  icon-bell"></i>
            </a>
            <?php }?>





        <li class="nav-item nav-category"><span class="nav-link">Products In Hand</span></li>





























        <li class="nav-item">
            <a class="nav-link" href="accepted_product_show.php">
                <span class="menu-title">Accepted Products</span>
                <i class=" menu-icon   icon-check"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="decline_product_show.php">
                <span class="menu-title">Declined Testings</span>
                <i class="menu-icon  icon-close"></i>
            </a>
        </li>













        <li class="nav-item nav-category"><span class="nav-link">Testing Processes </span></li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Manage Products</span>
                <i class="icon-layers menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="">View Products</a>
                    </li>

                </ul>
            </div>
        </li> -->









        <li class="nav-item">
            <a class="nav-link" href="undertesting_condition.php">
                <span class="menu-title">Under Testing</span>
                <i class="menu-icon  icon-close icon-wrench"></i>
            </a>
        </li>

        <li class="nav-item nav-category"><span class="nav-link">Positive Results </span></li>
        <li class="nav-item">
            <a class="nav-link" href="successful_product_show.php">
                <span class="menu-title">Successful Testing</span>
                <i class="menu-icon  icon-close icon-like"></i>
            </a>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">Negative Results </span></li>
        <li class="nav-item">
            <a class="nav-link" href="fail_product_show.php" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Failed Products</span>
                <i class="icon-doc menu-icon  icon-info "></i>
            </a>
        </li>





        <li class="nav-item nav-category"><span class="nav-link">Previous Activities</span></li>
        <li class="nav-item">
            <a class="nav-link" href="accepted_activity_ontest.php" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Accepted Products</span>
                <i class="icon-doc menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="decline_activity_ontest.php" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Declined Products</span>
                <i class="icon-doc menu-icon  icon-paper-plane"></i>
            </a>
        </li>

        <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
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