<?php
// $Product_Serial = $_POST[ 'Product_Serial' ];
$Product_Id = $_POST[ 'Product_Id' ];
$Product_Name = $_POST[ 'Product_Name' ];
$Product_Category = $_POST[ 'Product_Category' ];
$Product_Price = $_POST[ 'Product_Price' ];
$Product_Registration = $_POST[ 'Product_Registration' ];
$Product_Status = $_POST[ 'Product_Status' ];
$Product_Description = $_POST[ 'Product_Description' ];
// echo $Product_Serial;

$conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
$query = "UPDATE manufactured_products_table2
 SET
 Product_Name = '{$Product_Name}',
 Product_Category='{$Product_Category}',
 Product_Price='{$Product_Price}',
 Manufactured_Date='{$Product_Registration}',
 Product_Status='{$Product_Status}',
 Product_Description='{$Product_Description}'
 WHERE Product_Id='{$Product_Id}' ";
$data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
header( 'Location: view_product2.php' );
mysqli_close( $conn );

?>