<?php
$conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
if ( isset( $_POST[ 'formrepoting_testingstatus' ] ) ) {
    $Product_Id = $_POST[ 'Product_Id' ];
    $Product_Test_Id= $_POST[ 'Product_Test_Id' ];
    $Product_Name = $_POST[ 'Product_Name' ];
    $Product_Category = $_POST[ 'Product_Category' ];
    $Product_Price = $_POST[ 'Product_Price' ];
    $Product_Registration = $_POST[ 'Product_Registration' ];
    $Product_Sending_Test_Date = $_POST[ 'Product_Sending_Test_Date' ];
    $Product_Report_Sending_Test_Date = $_POST[ 'Product_Report_Sending_Test_Date' ];
    $Product_Status = $_POST[ 'Product_Status' ];
    $Product_Test_Type = $_POST[ 'Product_Test_Type' ];
    $Product_Description = $_POST[ 'Product_Description' ];

    if ( $Product_Status ==="Successfully Tested"){
$query="INSERT INTO successfully_tested_table4 VALUES ('{$Product_Id}','{$Product_Test_Id}','{$Product_Name}','{$Product_Category}','{$Product_Price}','{$Product_Registration}','{$Product_Sending_Test_Date}','{$Product_Report_Sending_Test_Date}','{$Product_Status}','{$Product_Test_Type}','{$Product_Description}')";
$data = mysqli_query( $conn, $query ) or die ( 'query Failed' );








        
    }










    
    
}
?>