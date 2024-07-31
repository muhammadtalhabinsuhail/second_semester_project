<?php
 
$Product_Test_Id = $_POST[ 'Product_Test_Id' ];
$conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );


$query = "SELECT * FROM decline_reasoncopy_table6 WHERE Product_Test_Id='{$Product_Test_Id}';";
$data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
if ( mysqli_num_rows( $data ) > 0 ){
    while( $rows = mysqli_fetch_assoc( $data ) ) {
      $Product_Id= $rows[ 'Product_Id' ];
         $Product_Name= $rows[ 'Product_Name' ];
          $Product_Category= $rows[ 'Product_Category' ];
           $Product_Price= $rows[ 'Product_Price' ];
           
          
           $Product_Test_Type = $rows[ 'Product_Test_Type' ];
             $Product_Description= $rows[ 'Product_Description' ];
           
        
    }
    $currentDate = date('Y-m-d');

    $Product_Status= "After Accepted";



$query6= "UPDATE decline_reason_table5
SET Product_Status='After Accepted '
WHERE Product_Test_Id='{$Product_Test_Id}' ";
$data6 = mysqli_query( $conn, $query6 ) or die ( 'query Failed' );


$query7= "UPDATE products_sender_table3
SET Product_Status='After Accepted '
WHERE Product_Test_Id='{$Product_Test_Id}' ";
$data7 = mysqli_query( $conn, $query7 ) or die ( 'query Failed' );



$query1 = "INSERT INTO products_accepted_table7 VALUES ('{$Product_Id}','{$Product_Test_Id}','{$Product_Name}','{$Product_Category}','{$Product_Price}','{$currentDate}','{$Product_Status}','{$Product_Test_Type}','{$Product_Description}');";
$data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );

$query2 = "INSERT INTO product_acceptedcopy_table8 VALUES ('{$Product_Id}','{$Product_Test_Id}','{$Product_Name}','{$Product_Category}','{$Product_Price}','{$currentDate}','{$Product_Status}','{$Product_Test_Type}','{$Product_Description}');";
$data2= mysqli_query( $conn, $query2 ) or die ( 'query Failed' );

$query5 = "DELETE FROM decline_reasoncopy_table6 WHERE Product_Test_Id='{$Product_Test_Id}';";
$data5 = mysqli_query( $conn, $query5 ) or die ( 'query Failed' );

header( 'Location: accepted_product_show.php' );
mysqli_close( $conn );
}
?>