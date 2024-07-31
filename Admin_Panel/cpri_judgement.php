<?php
if ( isset( $_POST[ 'approve' ] ) ) {
    $Product_Id = $_POST[ 'Product_Id' ];
    $Product_Test_Id = $_POST[ 'Product_Test_Id' ];
    $Product_Name = $_POST[ 'Product_Name' ];
    $Product_Category = $_POST[ 'Product_Category' ];
    $Product_Price = $_POST[ 'Product_Price' ];
    $Product_Report_Date = $_POST[ 'Product_Report_Date' ];
    $Product_Status = 'Approved By CPRI';
    $Product_Test_Type = $_POST[ 'Product_Test_Type' ];
    $Product_Description = $_POST[ 'Product_Description' ];

    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query1 = "INSERT INTO CPRI_approvefortest_table19 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );

    $query2 = "INSERT INTO CPRI_approvefortestcopy_table20 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data2 = mysqli_query( $conn, $query2 ) or die ( 'query Failed' );

    $query7 = "INSERT INTO tested_successfully_table13 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data7 = mysqli_query( $conn, $query7 ) or die ( 'query Failed' );

    $query3 = "DELETE FROM CPRI_acceptfortest_table18 WHERE Product_Test_Id='{$Product_Test_Id}';";
    $data3 = mysqli_query( $conn, $query3 ) or die ( 'query Failed' );

    $query4 = "UPDATE products_sender_table3
    SET Product_Status='{$Product_Status}'
    WHERE Product_Test_Id='{$Product_Test_Id}' ";
    $data4 = mysqli_query( $conn, $query4 ) or die ( 'query Failed' );
    session_start();

    
    $_SESSION['approve'] = true;
    header( 'location:cpri_approveproduct_show_oncpri.php' );

  
    
}

if ( isset( $_POST[ 'fails' ] ) ) {
    $Product_Id = $_POST[ 'Product_Id' ];
    $Product_Test_Id = $_POST[ 'Product_Test_Id' ];
    $Product_Name = $_POST[ 'Product_Name' ];
    $Product_Category = $_POST[ 'Product_Category' ];
    $Product_Price = $_POST[ 'Product_Price' ];
    $Product_Report_Date = $_POST[ 'Product_Report_Date' ];
    $Product_Status = 'Failed By CPRI';
    $Product_Test_Type = $_POST[ 'Product_Test_Type' ];
    $Product_Description = $_POST[ 'Product_Description' ];

    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query1 = "INSERT INTO CPRI_failedfortest_table21 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );

    $query2 = "INSERT INTO CPRI_failedfortestcopy_table22 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data2 = mysqli_query( $conn, $query2 ) or die ( 'query Failed' );

    $query7 = "INSERT INTO tested_successfully_table13 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data7 = mysqli_query( $conn, $query7 ) or die ( 'query Failed' );

    $query3 = "DELETE FROM CPRI_acceptfortest_table18 WHERE Product_Test_Id='{$Product_Test_Id}';";
    $data3 = mysqli_query( $conn, $query3 ) or die ( 'query Failed' );

    $query4 = "UPDATE products_sender_table3
    SET Product_Status='{$Product_Status}'
    WHERE Product_Test_Id='{$Product_Test_Id}' ";
    $data4 = mysqli_query( $conn, $query4 ) or die ( 'query Failed' );
    session_start();

    
    $_SESSION['fail'] = true;
    
    header( 'location:cpri_failedproduct_show_oncpri.php' );

    
}

?>