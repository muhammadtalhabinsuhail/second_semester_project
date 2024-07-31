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
        <li class="nav-item nav-category"><span class="nav-link">Products Addition</span></li>
        <li class="nav-item">
            <a class="nav-link" href="add_product.php">
                <span class="menu-title">Add New Products</span>
                <i class=" menu-icon  icon-plus  icon-plus"></i>
            </a>


        <li class="nav-item">
            <a class="nav-link" href="add_test_type.php">
                <span class="menu-title">Add Test Type</span>
                <i class=" menu-icon  icon-plus  icon-plus"></i>
            </a>



        <li class="nav-item nav-category"><span class="nav-link">Products Info</span></li>
        <li class="nav-item">
            <a class="nav-link" href="inprocess_products.php">
                <span class="menu-title">In Process Products</span>
                <i class=" menu-icon  icon-plus   icon-wrench"></i>
            </a>


        <li class="nav-item">
            <a class="nav-link" href="manufactured_products_show.php">
                <span class="menu-title">Manufactured Products</span>
                <i class=" menu-icon  icon-plus  icon-grid"></i>
            </a>











        <li class="nav-item nav-category"><span class="nav-link">Specific Actions</span></li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Manage Products</span>
                <i class="icon-layers menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="view_product.php">View Products In Process</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="view_product2.php">View Products Manufactured</a>
                    </li>

                </ul>
                <!-- </div> -->
                <!-- <div class="collapse" id="ui-basic"> -->
                <!-- <ul class="nav flex-column sub-menu">




            </ul> -->
                <!-- </div> -->


        <li class="nav-item">
            <a class="nav-link" href="send_product_for_test.php">
                <span class="menu-title">Ready For Test</span>
                <i class="icon-grid menu-icon  icon-paper-plane"></i>
            </a>
        </li>



        <li class="nav-item nav-category"><span class="nav-link">Product Status</span></li>
        <?php 
        $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
        $query = "SELECT COUNT(*) AS row_count FROM pending_testreceiving_table4 ;";
        $result= $conn->query($query);
        $row=$result->fetch_assoc();
        
        if($row['row_count']>0){
        ?>

        <li class="nav-item">
            <a class="nav-link" href="Products_sentfortest.php">
                <span class="menu-title">Pending For Test</span>
                <span class="badge bg-danger"
                    style="position:relative;left:41px;"><?php echo $row['row_count'];?></span>
            </a>
        </li>
        <?php }
        else{?>
        <li class="nav-item">
            <a class="nav-link" href="Products_sentfortest.php">
                <span class="menu-title">Pending For Test</span>
                <i class="icon-grid menu-icon  icon-paper-plane"></i>
                <!-- <span class="badge bg-danger" style="position:relative;left:28px;"></span> -->
            </a>
        </li>
        <?php } 
        ?>
        <!-- <li class="nav-item">
            <a class="nav-link" href="Products_sentfortest.php">
                <span class="menu-title">Pending For Test</span>
                <i class="icon-grid menu-icon  icon-paper-plane"></i>
            </a>
        </li> -->






        <?php 
        $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
        $query = "SELECT COUNT(*) AS row_count FROM product_acceptedcopy_table8 ;";
        $result= $conn->query($query);
        $row=$result->fetch_assoc();
        
        if($row['row_count']>0){
        ?>

        <li class="nav-item">
            <a class="nav-link" href="accepted_product_show_productpanel.php">
                <span class="menu-title">Accepted Products</span>
                <span class="badge bg-danger"
                    style="position:relative;left:29px;"><?php echo $row['row_count'];?></span>
            </a>
        </li>
        <?php }
        else{?>
        <li class="nav-item">
            <a class="nav-link" href="accepted_product_show_productpanel.php">
                <span class="menu-title">Accepted Products</span>
                <i class=" menu-icon  icon-login"></i>
                <!-- <span class="badge bg-danger" style="position:relative;left:28px;"></span> -->
            </a>
        </li>
        <?php }

        
       


                $query2 = "SELECT COUNT(*) AS row_counting FROM decline_reasoncopy_table6 ;";
                $result2= $conn->query($query2);
                $row2=$result2->fetch_assoc();
                
                if($row2['row_counting']>0){
        
        ?>


        <li class="nav-item">
            <a class="nav-link" href="declinedproducts_addproductpanel.php">
                <span class="menu-title">Declined Testings</span>
                <span class="badge bg-danger"
                    style="position: relative; left:39px"><?php echo $row2['row_counting']?></span>

            </a>
        </li>
        <?php }
        else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="declinedproducts_addproductpanel.php">
                <span class="menu-title">Declined Testings</span>
                <i class="menu-icon  icon-close"></i>
            </a>
        </li>
        <?php }?>





        <?php
        $query3 = "SELECT COUNT(*) AS row_counting FROM products_undertesting_table9 ;";
        $result3= $conn->query($query3);
        $row3=$result3->fetch_assoc();

        if($row3['row_counting']>0){

        ?>


        <li class="nav-item">
            <a class="nav-link" href="undertest2.php">
                <span class="menu-title">Undertesting Products</span>
                <span class="badge bg-danger"
                    style="position: relative; left:5px"><?php echo $row3['row_counting']?></span>

            </a>
        </li>
        <?php }
        else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="undertest2.php">
                <span class="menu-title">Undertesting Products</span>
                <i class="menu-icon   icon-wrench"></i>
            </a>
        </li>
        <?php }?>












        <li class="nav-item nav-category"><span class="nav-link">+ve Results (Send To CPRI) </span></li>
        <?php
        $query4 = "SELECT COUNT(*) AS row_counting FROM success_copy_table15 ;";
        $result4= $conn->query($query4);
        $row4=$result4->fetch_assoc();

        if($row4['row_counting']>0){

        ?>


        <li class="nav-item">
            <a class="nav-link" href="successfully_showon_addproduct.php">
                <span class="menu-title">Successful Testings</span>
                <span class="badge bg-danger"
                    style="position: relative; left:25px"><?php echo $row4['row_counting']?></span>

            </a>
        </li>
        <?php }
        else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="successfully_showon_addproduct.php">
                <span class="menu-title">Successful Testings</span>
                <i class="menu-icon  icon-like"></i>
            </a>
        </li>
        <?php }?>







        <li class="nav-item nav-category"><span class="nav-link">-ve Results (Reprocess It)</span></li>
        <?php
        $query5 = "SELECT COUNT(*) AS row_counting FROM failed_copy_table14 ;";
        $result5= $conn->query($query5);
        $row5=$result5->fetch_assoc();

        if($row5['row_counting']>0){

        ?>


        <li class="nav-item">
            <a class="nav-link" href="fail_product_show_addpanel.php">
                <span class="menu-title">Failed Products</span>
                <span class="badge bg-danger"
                    style="position: relative; left:50px"><?php echo $row5['row_counting']?></span>

            </a>
        </li>
        <?php }
        else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="fail_product_show_addpanel.php">
                <span class="menu-title">Failed Products</span>
                <i class="menu-icon  icon-close"></i>
            </a>
        </li>
        <?php }?>








































        <li class="nav-item nav-category"><span class="nav-link">Remanufacturation</span></li>
        <li class="nav-item">
            <a class="nav-link" href="reprocess_products.php" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Reprocessing Products</span>
                <i class="icon-doc menu-icon  icon-info"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="remanufactured_show.php" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Remanufactured</span>
                <i class="icon-doc menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="product_resend_fortest.php" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Ready For Retest</span>
                <i class="icon-doc menu-icon"></i>
            </a>
        </li>

        <li class="nav-item nav-category"><span class="nav-link">Previous Activities</span></li>
        <li class="nav-item">
            <a class="nav-link" href="accepted_product_recording.php" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Accepted Products</span>
                <i class="menu-icon icon-login"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="decline_product_recording.php" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Declined Products</span>
                <i class="icon-doc menu-icon  icon-paper-plane"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cpri_activites.php" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">CPRI Activities</span>
                <i class="icon-doc menu-icon"></i>
            </a>
        </li>


        <li class="nav-item nav-category"><span class="nav-link">Notifications from CPRI</span></li>



        <?php
        $query45 = "SELECT COUNT(*) AS row_counting FROM CPRI_approvefortestcopy_table20 ;";
        $result45= $conn->query($query45);
        $row45=$result45->fetch_assoc();

        if($row45['row_counting']>0){

        ?>


        <li class="nav-item">
            <a class="nav-link" href="products_approvedbycpri_onaddpanel.php">
                <span class="menu-title">Approved By CPRI</span>
                <span class="badge bg-danger"
                    style="position: relative; left:40px"><?php echo $row45['row_counting']?></span>

            </a>
        </li>
        <?php }
        else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="products_approvedbycpri_onaddpanel.php">
                <span class="menu-title">Approved By CPRI</span>

            </a>
        </li>
        <?php }?>



























        <?php
        $query55 = "SELECT COUNT(*) AS row_counting FROM CPRI_failedfortestcopy_table22 ;";
        $result55= $conn->query($query55);
        $row55=$result55->fetch_assoc();

        if($row55['row_counting']>0){

        ?>


        <li class="nav-item">
            <a class="nav-link" href="products_failedbycpri_onaddpanel.php">
                <span class="menu-title">Failed By CPRI</span>
                <span class="badge bg-danger"
                    style="position: relative; left:65px"><?php echo $row55['row_counting']?></span>

            </a>
        </li>
        <?php }
        else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="products_failedbycpri_onaddpanel.php">
                <span class="menu-title">Failed By CPRI</span>
                <i class="menu-icon  icon-close"></i>
            </a>
        </li>
        <?php }?>



















        <?php
        $query65 = "SELECT COUNT(*) AS row_counting FROM CPRI_demandfortest_table24;";
        $result65= $conn->query($query65);
        $row65=$result65->fetch_assoc();

        if($row65['row_counting']>0){

        ?>


        <li class="nav-item">
            <a class="nav-link" href="demand_cpri_addpanel.php">
                <span class="menu-title">CPRI Demand Test Type</span>
                <span class="badge bg-danger"
                    style="position: relative; left:2pxpx"><?php echo $row65['row_counting'];?></span>

            </a>
        </li>
        <?php }
        else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="demand_cpri_addpanel.php">
                <span class="menu-title">CPRI Demand Test Type</span>
                <i class="menu-icon  icon-close"></i>
            </a>
        </li>
        <?php }?>

























        <li class="nav-item nav-category"><span class="nav-link">Products Launching</span></li>
        <li class="nav-item">
            <a class="nav-link" href="launch_show.php" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Launch Products In Market</span>

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