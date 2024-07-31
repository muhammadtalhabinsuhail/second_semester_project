<?php

// $Product_Serial = $_POST[ 'Product_Serial' ];
$Product_Id = $_POST[ 'Product_Id' ];
$Product_Test_Id = $_POST[ 'Product_Test_Id' ];
$Product_Name = $_POST[ 'product' ]; //this not not name for generating test id used
$Product_Category = $_POST[ 'Product_Category' ];
$Product_Price = $_POST[ 'Product_Price' ];
$Product_Sending_Test_Date = $_POST[ 'Product_Sending_Test_Date' ];
$Product_Status = $_POST[ 'Product_Status' ];

$Product_Test_Type = $_POST[ 'testing' ];
$values = explode("|", $Product_Test_Type);

$test_type_id = $values[0];     // This will be '123'
$test_type_name = $values[1];   // this is test name



$Product_Description = $_POST[ 'Product_Description' ];

$conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
// $query = "UPDATE new_products_table1
//  SET
//   Product_Status='Pending For Test'
//   WHERE Product_Id='{$Product_Id}' ";
// $data = mysqli_query( $conn, $query ) or die ( 'query Failed' );



// Check if Testing_product_id exists in testing_request table

$product_query = "SELECT Product_Name FROM manufactured_products_table2 WHERE Product_Id = '$Product_Id'";
$product_result = $conn->query( $product_query );

$product_name = ( $product_result->num_rows > 0 ) ? $product_result->fetch_assoc()[ 'Product_Name' ] : '';

// echo $product_name;

$check_query = "SELECT Product_Test_Id FROM products_sender_table3 WHERE Product_Test_Id LIKE '{$Product_Test_Id}%'";
$check_result = $conn->query( $check_query );

if ( $check_result->num_rows > 0 ) {
    // ID exists, fetch similar IDs count
    $existing_count = $check_result->num_rows;
    $nextAlphabet = chr( 65 + $existing_count );
    // 'A' + count

    // Update the Testing_product_id
    $newTestingProductId = $Product_Test_Id  . $nextAlphabet;
} else {
    // ID doesn't exist, insert with 'A'
    $newTestingProductId = $Product_Test_Id . 'A';
}

// Inserting data into testing_request table


$query1 = "INSERT INTO products_sender_table3 VALUES ('$Product_Id', '$newTestingProductId', '$product_name', '$Product_Category', '$Product_Price',  '$Product_Sending_Test_Date' , 'Pending For Test' ,'$test_type_name' ,'$Product_Description');";
$data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );

$query2 = "INSERT INTO pending_testreceiving_table4 VALUES ('$Product_Id', '$newTestingProductId', '$product_name', '$Product_Category', '$Product_Price',  '$Product_Sending_Test_Date' , 'Pending For Test' ,'$test_type_name' ,'$Product_Description');";
$data2 = mysqli_query( $conn, $query2 ) or die ( 'query Failed' );


session_start();
$_SESSION['sendtotest']=true;

header( 'Location: Products_sentfortest.php' );
    // mysqli_close( $conn );


    



    ?>