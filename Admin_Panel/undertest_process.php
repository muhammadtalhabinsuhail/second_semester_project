<?php 
if(isset($_POST['Accept']))
{
    $Product_Test_Id=$_POST['Product_Test_Id'];

    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
$query = "SELECT * FROM product_acceptedcopy_table8 WHERE Product_Test_Id='{$Product_Test_Id}';";
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
    $Product_Status= "Under Testing";


    $query1 = "INSERT INTO products_undertesting_table9 VALUES ('{$Product_Id}','{$Product_Test_Id}','{$Product_Name}','{$Product_Category}','{$Product_Price}','{$currentDate}','{$Product_Status}','{$Product_Test_Type}','{$Product_Description}')";
    $data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );

    
    $query4 = "UPDATE products_sender_table3
    SET Product_Status='{$Product_Status}'
    WHERE Product_Test_Id='{$Product_Test_Id}' ";
    $data4 = mysqli_query( $conn, $query4 ) or die ( 'query Failed' );




    $query3 = "DELETE FROM product_acceptedcopy_table8 WHERE Product_Test_Id='{$Product_Test_Id}';";
    $data3 = mysqli_query( $conn, $query3 ) or die ( 'query Failed' );




    header( 'Location: undertesting_condition.php' );
    mysqli_close( $conn );


    
}


}

?>