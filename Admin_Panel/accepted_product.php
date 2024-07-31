<?php
 
$Product_Test_Id = $_POST[ 'Product_Test_Id' ];
$conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
$query = "SELECT * FROM pending_testreceiving_table4 WHERE Product_Test_Id='{$Product_Test_Id}';";
$data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
if ( mysqli_num_rows( $data ) > 0 ){
    while( $rows = mysqli_fetch_assoc( $data ) ) {
      $Product_Id= $rows[ 'Product_Id' ];
         $Product_Name= $rows[ 'Product_Name' ];
          $Product_Category= $rows[ 'Product_Category' ];
           $Product_Price= $rows[ 'Product_Price' ];
           $currentDate = date('Y-m-d');
           $Product_Status= "Accepted For Testing";
           $Product_Test_Type = $rows[ 'Product_Test_Type' ];
             $Product_Description= $rows[ 'Product_Description' ];
           
        
    }
    $query1 = "INSERT INTO products_accepted_table7 VALUES ('{$Product_Id}','{$Product_Test_Id}','{$Product_Name}','{$Product_Category}','{$Product_Price}','{$currentDate}','{$Product_Status}','{$Product_Test_Type}','{$Product_Description}')";
    $data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );
    
    $query2 = "INSERT INTO product_acceptedcopy_table8 VALUES ('{$Product_Id}','{$Product_Test_Id}','{$Product_Name}','{$Product_Category}','{$Product_Price}','{$currentDate}','{$Product_Status}','{$Product_Test_Type}','{$Product_Description}')";
    $data2= mysqli_query( $conn, $query2 ) or die ( 'query Failed' );
   

 

    
    
    $query3 = "DELETE FROM pending_testreceiving_table4 WHERE Product_Test_Id='{$Product_Test_Id}';";
    $data3 = mysqli_query( $conn, $query3 ) or die ( 'query Failed' );

 


    
    $query4 = "UPDATE products_sender_table3
    SET Product_Status='{$Product_Status}'
    WHERE Product_Test_Id='{$Product_Test_Id}' ";
    $data4 = mysqli_query( $conn, $query4 ) or die ( 'query Failed' );




    
    }
    







// $query = "UPDATE new_products_table1
//  SET
//   Product_Status='Accepted For Testing'
//   WHERE Product_Id='{$Product_Id}' ";
// $data = mysqli_query( $conn, $query ) or die ( 'query Failed' );

// $query1 =  "UPDATE products_sender_table2
// SET
//  Product_Status='Accepted For Testing'
//  WHERE Product_Id='{$Product_Id}' ";

// $data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );

header( 'Location: accepted_product_show.php' );
 mysqli_close( $conn );

?>