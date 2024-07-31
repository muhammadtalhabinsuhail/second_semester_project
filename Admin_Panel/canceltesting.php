<?php
// $Product_Serial = $_POST[ 'Product_Serial' ];
$Product_Test_Id = $_POST[ 'Product_Test_Id' ];

// echo $Product_Serial;

$conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
// $query = "UPDATE products_sender_table3
//  SET
//  Product_Status='C'
//  WHERE Product_Id='{$Product_Id}'; ";
// $data = mysqli_query( $conn, $query ) or die ( 'query Failed' );

$query1 = "DELETE FROM products_sender_table3 WHERE Product_Test_Id ='{$Product_Test_Id}'; ";
$data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );

$query2 = "DELETE FROM pending_testreceiving_table4 WHERE Product_Test_Id ='{$Product_Test_Id}'; ";
$data2 = mysqli_query( $conn, $query2 ) or die ( 'query Failed' );

header( 'Location: Products_sentfortest.php' );
mysqli_close( $conn );

?>