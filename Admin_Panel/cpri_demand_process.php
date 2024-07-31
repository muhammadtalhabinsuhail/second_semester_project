<?php
if ( isset( $_POST[ 'testrequired' ] ) ) {
    $Product_Id = $_POST[ 'Product_Id' ];
    $Product_Test_Id = $_POST[ 'Product_Test_Id' ];
    $Product_Name = $_POST[ 'Product_Name' ];
    $Product_Category = $_POST[ 'Product_Category' ];
    $Product_Price = $_POST[ 'Product_Price' ];
    $Product_Report_Date = $_POST[ 'Product_Report_Date' ];
    $Product_Status = $_POST[ 'Product_Status' ];
    $Product_Test_Type = $_POST[ 'Product_Test_Type' ];
    $Product_Description = $_POST[ 'Product_Description' ];

    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query1 = "INSERT INTO CPRI_demandfortest_table24 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );



    $query7 = "INSERT INTO tested_successfully_table13 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data7 = mysqli_query( $conn, $query7 ) or die ( 'query Failed' );




    
    $_SESSION['demand'] = true;
    
    header( 'location:cpri_waitingfortest.php' );

  
    
}
else{
    $Product_Id = $_POST[ 'Product_Id' ];
    $Product_Test_Id = $_POST[ 'Product_Test_Id' ];
    $Product_Name = $_POST[ 'Product_Name' ];
    $Product_Category = $_POST[ 'Product_Category' ];
    $Product_Price = $_POST[ 'Product_Price' ];
    $Product_Report_Date = $_POST[ 'Product_Report_Date' ];
    $Product_Status = $_POST[ 'Product_Status' ];
    $Product_Test_Type = $_POST[ 'Product_Test_Type' ];
    $Product_Description = $_POST[ 'Product_Description' ];


    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query1 = "INSERT INTO CPRI_demandfortest_table24 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );



    $query7 = "INSERT INTO tested_successfully_table13 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data7 = mysqli_query( $conn, $query7 ) or die ( 'query Failed' );


    $_SESSION['demand'] = true;
    
    header( 'location:cpri_waitingfortest.php' );





    
}




?>