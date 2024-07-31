<?php

if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    // $Product_Serial = $_POST[ 'Product_Serial' ];
    $product_id = str_pad( mt_rand( 1, 999999999999 ), 12, '0', STR_PAD_LEFT );
    // Generating 12-digit ID
    $Product_Name = $_POST[ 'Product_Name' ];
    $Product_Category = $_POST[ 'Product_Category' ];
    $Product_Price = $_POST[ 'Product_Price' ];
    $Product_Registration = $_POST[ 'Product_Registration' ];
    $Product_Status = $_POST[ 'Product_Status' ];
    $Product_Description = $_POST[ 'Product_Description' ];

    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' );

    if ( !$conn ) {
        die( 'Connection failed: ' . mysqli_connect_error() );
    }

    $query1 = "SELECT * FROM in_process_table1 WHERE Product_Id = '{$product_id}' ";
    $data1 = mysqli_query( $conn, $query1 );

    if ( mysqli_num_rows( $data1 ) > 0 ) {
        header( 'Location: error_messageofsameproduct.php' );
    } else {

        $product_id = str_pad( mt_rand( 1, 999999999999 ), 10, '0', STR_PAD_LEFT ); 
        // Generating 12-digit ID
        $query = "INSERT INTO in_process_table1(Product_Id,Product_Name,Product_Category,Product_Price,Registration_Date,Product_Status,Product_Description) VALUES ('$product_id','$Product_Name','$Product_Category','$Product_Price','$Product_Registration','$Product_Status','$Product_Description')";
        $data = mysqli_query( $conn, $query );

        if ( $data ) {
            header( 'Location: inprocess_products.php' );

        } else {

            echo 'Query Failed: ' . mysqli_error( $conn );
        }

    }

    mysqli_close( $conn );
}