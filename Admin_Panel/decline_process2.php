<?php
$conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
// $Product_Serial = $_POST[ 'Product_Serial' ];
$Product_Id = $_POST[ 'Product_Id' ];
$Product_Test_Id = $_POST[ 'Product_Test_Id' ];
$Product_Name = $_POST[ 'Product_Name' ];
$Product_Category = $_POST[ 'Product_Category' ];
$Product_Price = $_POST[ 'Product_Price' ];
$currentDate = date('Y-m-d');
$Product_Status = "After Declined";
$Product_Test_Type = $_POST[ 'Product_Test_Type' ];
$Product_Description = $_POST[ 'Product_Description' ];
$Product_Decline_Reason = $_POST[ 'Product_Decline_Reason' ];

$query1 = "INSERT INTO decline_reason_table5 VALUES ('{$Product_Id}','{$Product_Test_Id}','{$Product_Name}','{$Product_Category}','{$Product_Price}','{$currentDate}','{$Product_Status}','{$Product_Test_Type}','{$Product_Description}','{$Product_Decline_Reason}')";
$data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );

$query2 = "INSERT INTO decline_reasoncopy_table6 VALUES ('{$Product_Id}','{$Product_Test_Id}','{$Product_Name}','{$Product_Category}','{$Product_Price}','{$currentDate}','{$Product_Status}','{$Product_Test_Type}','{$Product_Description}','{$Product_Decline_Reason}')";
$data2= mysqli_query( $conn, $query2 ) or die ( 'query Failed' );


if ($data1 && $data2){



$query3 = "DELETE FROM pending_testreceiving_table4 WHERE Product_Test_Id='{$Product_Test_Id}';";
$data3 = mysqli_query( $conn, $query3 ) or die ( 'query Failed' );

$query4 = "UPDATE products_sender_table3
SET Product_Status='{$Product_Status}'
WHERE Product_Test_Id='{$Product_Test_Id}' ";
$data4 = mysqli_query( $conn, $query4 ) or die ( 'query Failed' );

$query5 = "DELETE FROM product_acceptedcopy_table8 WHERE Product_Test_Id='{$Product_Test_Id}';";
$data5 = mysqli_query( $conn, $query5 ) or die ( 'query Failed' );

$query4 = "UPDATE products_accepted_table7
SET Product_Status='After Declined'
WHERE Product_Test_Id='{$Product_Test_Id}' ";
$data4 = mysqli_query( $conn, $query4 ) or die ( 'query Failed' );




}

header("location:decline_product_show.php");

?>